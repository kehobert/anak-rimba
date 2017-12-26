<?php

namespace App\Http\Controllers;

use App\Course;
use App\Http\Requests\CourseFormRequest;
use App\Page;
use App\Registration;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;


class PaymentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function view()
    {
        $payment_list = DB::table('payment_confirmation')
            ->leftJoin('registration', 'registration.registration_id', '=', 'payment_confirmation.registration_id')
            ->join('courses', 'registration.course_id', '=', 'courses.course_id')
            ->select(
                'payment_confirmation.*',
                'courses.course_name',
                'registration.registration_email')
            ->get();

        return view('backend.payment.view_payment', compact('payment_list'));
    }



}