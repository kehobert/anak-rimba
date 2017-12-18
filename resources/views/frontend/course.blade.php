@extends('main')
@section('content')

<div class="inner">

    <header class="align-center">
        <h1>Our Course</h1>
        <p>Click register to enroll on our class</p>
    </header>

    <hr class="major" />

    <div class="table-wrapper">
        <table class="alt">
            <thead>
            <tr>
                <th>Class Name</th>
                <th width="20%">Date</th>
                <th>Location</th>
                <th>Register</th>
            </tr>
            </thead>
            <tbody>
            @foreach($course as $course_item)
                <tr>
                    <td><a href="{{ url('course_details', $course_item->course_id) }}">{{$course_item->course_name}}</a></td>
                    <td>{{$course_item->course_date_start}} - {{$course_item->course_date_start}} </td>
                    <td>{{$course_item->course_location}}</td>
                    <td><a href="{{ url('registration', $course_item->course_id) }}" class="button small">Register</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</div>
@stop