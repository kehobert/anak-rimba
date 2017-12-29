<?php
/**
 * Created by PhpStorm.
 * User: Kevho
 * Date: 11/12/2017
 * Time: 09.58
 */

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


class CourseController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add()
    {
        //return homepage
        return view('backend.course.add_course');
    }

    public function store(CourseFormRequest $request){

        $course = Course::create($request->all());

        //alert()->success('Page has been added.');

        return redirect()->action('CourseController@view')->with('Message', 'Course has been added');
    }

    public function edit($course_id)
    {
        $oCourse = DB::table('courses')->where('course_id', $course_id)->get();

        return view('backend.course.edit_course', compact('oCourse'));
    }

    public function update(CourseFormRequest $request)
    {
        Course::where('course_id', $request->course_id)->update($request->except(['_token']));

        alert()->success('Page has been updated.');

        return back()->with('Message', 'Course has been updated');
    }

    public function view()
    {
        //return homepage
        $sortBy = 'course_date_start';
        $sortDirection = 'ASC';

        $course =  DB::table('courses')->where('course_active', 1)->orderBy($sortBy, $sortDirection)->get();


        return view('backend.course.view_course', compact('course'));
    }

    public function destroy($course_id){

        DB::table('courses')->
        where('course_id', $course_id)->
        update(['course_active' => 0]);

        //alert()->success('Course Deleted');

        return redirect()->action('CourseController@view')->with('Message', 'Course has been deleted');
        //return redirect('/view_course');
    }

}