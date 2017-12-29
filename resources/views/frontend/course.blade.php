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

                @php
                    //Change time format to d-m-Y using PHP function DateTime->format
                    $dateStartObject = new DateTime($course_item->course_date_start);
                    $dateEndObject = new DateTime($course_item->course_date_end);

                    $dateStart = $dateStartObject->format('d/m/Y');
                    $dateEnd = $dateEndObject->format('d/m/Y');
                @endphp

                <tr>
                    <td><a href="{{ url('course_details', $course_item->course_id) }}">{{$course_item->course_name}}</a></td>
                    <td>{{$dateStart}} - {{$dateEnd}} </td>
                    <td>{{$course_item->course_location}}</td>
                    <td><a href="{{ url('registration', $course_item->course_id) }}" class="button small">Register</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</div>
@stop