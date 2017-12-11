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
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class FrontendController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //return homepage
        return view('frontend.index');
    }

    public function course(){

        $sortBy = 'course_id';
        $sortDirection = 'ASC';

        $course = Course::orderBy($sortBy, $sortDirection)->paginate(5);

        return view('frontend.course', compact('course'));
    }

    public function course_details(Course $course){
        return view('frontend.course_details', compact('course'));
    }

    public function registration(){
        return view('frontend.register', compact('course'));
    }


}