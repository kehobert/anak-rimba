@extends('backend_main')
@section('content')

    @if(Session::has('message'))
        <div class="alert alert-info">
            {{Session::get('message')}}
        </div>
    @endif

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">View All Course <a href="{{url('add_course')}}" class="btn btn-danger btn-fill">Add New Course</a></h4>

                </div>
                <div class="content">
                    <table class="table table-bordered" id="courseTable">

                        <thead>
                            <tr>
                                <th>Course Name</th>
                                <th>Course Date (yyyy-mm-dd)</th>
                                <th>Location</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        @foreach($course as $course_item)
                            <tr>

                                <td>{{$course_item->course_name}}</td>
                                <td>{{$course_item->course_date_start}} - {{$course_item->course_date_end}}</td>
                                <td>{{$course_item->course_location}}</td>
                                <td>
                                    <a href="{{ url('edit_course', $course_item->course_id) }}" class="btn btn-primary btn-fill">Edit</a>
                                    <a href="{{ url('delete_course', $course_item->course_id) }}"
                                       class="btn btn-danger btn-fill"
                                       onclick="return confirm('Are you sure to delete this course?');">Delete</a>
                                </td>

                            </tr>
                        @endforeach
                    </table>
                </div><!-- end of content -->

            </div>
        </div>
    </div>

@stop