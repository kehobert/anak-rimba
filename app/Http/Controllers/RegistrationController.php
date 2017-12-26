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


class RegistrationController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function view()
    {
        //email, fullname, course name,status, action

        $registration = DB::table('registration')
            ->leftJoin('courses', 'registration.course_id', '=', 'courses.course_id')
            ->leftJoin('payment_confirmation', 'registration.registration_id', '=', 'payment_confirmation.registration_id')
            ->select(
                'registration.*',
                'payment_confirmation.payment_confirmation_confirmed',
                'courses.course_name')
            ->get();

        return view('backend.registration.view_registration', compact('registration'));

    }



}