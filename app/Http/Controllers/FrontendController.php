<?php
/**
 * Created by PhpStorm.
 * User: Kevho
 * Date: 11/12/2017
 * Time: 09.58
 */

namespace App\Http\Controllers;

use App\Course;
use App\Http\Requests\PageFormRequest;
use App\Page;
use App\Registration;
use App\Testimony;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Validator;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Anhskohbo\NoCaptcha\Facades\NoCaptcha;


class FrontendController extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index()
    {
        $sortBy = 'course_id';
        $sortDirection = 'ASC';
        $testimonies = Testimony::orderBy($sortBy, $sortDirection)->paginate(3);

        return view('frontend.index', compact('testimonies'));
    }

    public function course(){

        $sortBy = 'course_id';
        $sortDirection = 'ASC';

        //how to pass this object to other pages?
        $course = Course::orderBy($sortBy, $sortDirection)->paginate(5);

        return view('frontend.course', compact('course'));
    }

    public function course_details($course_id){

        $course_details = DB::select("SELECT * from courses WHERE courses.course_id = ".$course_id);

        //return view('frontend.course_details', array('c' => $course_details ));
        return view('frontend.course_details', ['course_details' => $course_details]);
    }

    public function registration($course_id){

        $course_details = DB::select("SELECT course_id, course_name from courses WHERE courses.course_id = ".$course_id);
        $course_name = $course_details[0]->course_name;
        $course_id = $course_details[0]->course_id;

        NoCaptcha::getFacadeApplication();

        return view('frontend.registration', ['course_name'=> $course_name, 'course_id' => $course_id]);
    }

    public function register_entry($course_id){

        //Get all Input from the form and set the rules for input (required, etc)
        $input = Input::only('name','email','phone', 'message', 'g-recaptcha-response');
        $rules = array(
            'name'                  => 'required',
            'email'                 => 'required|email',
            'phone'                 => 'required|numeric',
            'message'               => '',
            'g-recaptcha-response'  => 'required'
        );

        $validator = Validator::make(Input::all(), $rules);


        //Verify from Google whether the Captha is valid or not
        $client = new Client();
        $response = $client->post('https://www.google.com/recaptcha/api/siteverify',[
            'form_params' => array(
                'secret' => '6Ld7cT4UAAAAAJPD6AD9DNW6Hvu1wy0z6nLyTxhg',
                'response' => $input['g-recaptcha-response']
                )
        ]);
        $result = json_decode($response->getBody()->getContents());
        //If captcha success, then it will continue to the next step, which is the form validation, else it will produce redirect error
        if(!$result->success){
            return Redirect::to('registration/'.$course_id)->withErrors('Captcha Error')->withInput();
        }

        //If any of the input does not fulfill the requirement, it will be redirect error to registration page
        if($validator->fails()){
            //happens if the input doesn't match with rule
            $messages = $validator->messages();

            return Redirect::to('registration/'.$course_id)->withErrors($validator)->withInput();

        }else{

            //input all the registration information to database
            $lastRegistrationInsertId = DB::table('registration')->insertGetId(
                array('registration_email' => $input['email'],
                    'registration_fullname' => $input['name'],
                    'registration_phonenumber' => $input['phone'],
                    'registration_message' => $input['message'],
                    'registration_payment_confirmed' => '1',
                    'course_id' => $course_id
                ));


            //from the Last Id of the registration process, hash the ID and write the hashed ID into the database
            $hashed_id = md5($lastRegistrationInsertId);
            DB::table('registration')->
            where('registration_id', $lastRegistrationInsertId)->
            update(['hashed_id' => $hashed_id]);

            //Get all course information to be passed in email
            $oCourse = DB::table('registration')
                ->leftJoin('courses', 'registration.course_id', '=', 'courses.course_id')
                ->select(
                    'registration.*',
                    'courses.course_name',
                    'courses.course_date_start',
                    'courses.course_date_end',
                    'courses.course_price')
                ->where('hashed_id', $hashed_id)
                ->get();

            //Send Email to Registrar
            $data = [
                        'email_destination'=> $input['email'],
                        'fullname_destination' => $input['name'],
                        'course_name' => $oCourse[0]->course_name,
                        'course_date_start' => $oCourse[0]->course_date_start,
                        'course_date_end' => $oCourse[0]->course_date_end,
                        'course_price' => $oCourse[0]->course_price,
                    ];

            Mail::send('mails.register_mail', $data, function($message) use ($data){
                $message->to( $data['email_destination'], $data['fullname_destination'])->subject('Course Registration');
                $message->from('kevinhobert29@gmail.com','Kevin Hobert');
            });

            return redirect()->action('FrontendController@checkout', ['insert_id' => $hashed_id]);
        }

    }

    public function checkout($hashed_id){

        $oDB = DB::table('registration')
                ->leftJoin('courses', 'registration.course_id', '=', 'courses.course_id')
                ->select(
                    'registration.*',
                    'courses.course_name',
                    'courses.course_date_start',
                    'courses.course_date_end',
                    'courses.course_price')
                ->where('hashed_id', $hashed_id)
                ->get();

        return view('frontend.checkout_clear', compact('oDB'));
    }

    public function payment_confirmation(){
        return view('frontend.payment_confirmation');
    }

    public function submit_payment_confirmation(){
        $input = Input::only('invoice_number','bank_name','bank_account_number', 'transfer_amount', 'chosen_bank');

        $rules = array(
            'bank_name'                 => 'required',
            'bank_account_number'       => 'required|numeric',
            'transfer_amount'           => 'required|numeric',
            'chosen_bank'               => '',
            'invoice_number'            => 'required|numeric'
        );
        $validator = Validator::make(Input::all(), $rules);

        $DEFAULT_PAYMENT_CONFIRMATION_VALUE = 0;

        if($validator->fails()){
            $messages = $validator->messages();

            return Redirect::to('payment')->withErrors($validator)->withInput();
        }else{
            $id = DB::table('payment_confirmation')->insertGetId(
                array('payment_confirmation_bank_name' => $input['bank_name'],
                    'payment_confirmation_bank_account_number' => $input['bank_account_number'],
                    'payment_confirmation_transfer_amount' => $input['transfer_amount'],
                    'payment_confirmation_bank_destination' => $input['chosen_bank'],
                    'payment_confirmation_confirmed' => $DEFAULT_PAYMENT_CONFIRMATION_VALUE,
                    //'payment_confirmation_additional_message' => $input['additional_message'],
                    'registration_id' => $input['invoice_number']
                ));

            return redirect()->action('FrontendController@redirect_payment_confirmation');
        }

    }

    public function redirect_payment_confirmation(){
        return view('frontend.payment_confirmation_thank_you');
    }

    public function about_us(){
        return view('frontend.about_us');
    }


}