<?php

namespace App\Http\Controllers;

use App\Course;
use App\Http\Requests\CourseFormRequest;
use App\Http\Requests\TestimonyFormRequest;
use App\Page;
use App\Registration;
use App\Testimony;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;


class TestimonyController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function view()
    {
        //email, fullname, course name,status, action

        $testimonies = DB::table('testimonies')->where('testimony_active',1)->get();

        return view('backend.testimony.view_testimony', compact('testimonies'));

    }

    public function add(){
        return view('backend.testimony.add_testimony');
    }

    public function update(TestimonyFormRequest $request){
        Testimony::where('testimony_id', $request->testimony_id)->update($request->except(['_token']));

        return back()->with('Message', 'Testimony has been updated');
    }

    public function destroy($testimony_id){
        DB::table('testimonies')->where('testimony_id', $testimony_id)->update(['testimony_active' => 0]);

        return redirect()->action('TestimonyController@view')->with('Message', 'Testimony has been deleted');
    }

    public function store(TestimonyFormRequest $request){
        $testimony = Testimony::create($request->all());

        return redirect()->action('TestimonyController@view')->with('Message', 'Testimony has been added');;

    }

    public function edit($testimony_id){
        $oTestimony = DB::table('testimonies')->where('testimony_id', $testimony_id)->get();

        return view('backend.testimony.edit_testimony', compact('oTestimony'));
    }



}