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
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


class FrontendController extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index()
    {
        //return homepage
        return view('frontend.index');
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

        return view('frontend.registration', ['course_name'=> $course_name, 'course_id' => $course_id]);
    }

    public function register_entry($course_id){

        $input = Input::only('name','email','phone', 'message');

        $lastRegistrationInsertId = DB::table('registration')->insertGetId(
            array('registration_email' => $input['email'],
                'registration_fullname' => $input['name'],
                'registration_phonenumber' => $input['phone'],
                'registration_message' => $input['message'],
                'registration_payment_confirmed' => '1',
                'course_id' => $course_id
            ));

        $hashed_id = md5($lastRegistrationInsertId);


        DB::table('registration')->
            where('registration_id', $lastRegistrationInsertId)->
            update(['hashed_id' => $hashed_id]);


        return redirect()->action('FrontendController@checkout', ['insert_id' => $hashed_id]);

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

        $id = DB::table('payment_confirmation')->insertGetId(
            array('payment_confirmation_bank_name' => $input['bank_name'],
                'payment_confirmation_bank_account_number' => $input['bank_account_number'],
                'payment_confirmation_transfer_amount' => $input['transfer_amount'],
                'payment_confirmation_bank_destination' => $input['chosen_bank'],
                //'payment_confirmation_additional_message' => $input['additional_message'],
                'registration_id' => $input['invoice_number']
            ));

        return redirect()->action('FrontendController@redirect_payment_confirmation');
    }

    public function redirect_payment_confirmation(){
        return view('frontend.payment_confirmation_thank_you');
    }


    /*
    public function rules(){
        return [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ];
    }*/


}