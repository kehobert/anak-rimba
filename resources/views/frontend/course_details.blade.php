@extends('main')
@section('content')

<div class="inner">

    <div class="row">

        <div class="8u 12u$(small)">
            @foreach($course_details as $items)
                <h1>{{$items->course_name}}</h1>
                <p>{{$items->course_description}}</p>

                <h4>Date</h4>
                <p>{{$items->course_date_start}} - {{$items->course_date_end}}</p>

                <h4>Registration Deadline</h4>
                <p>{{$items->course_registration_deadline}}</p>

                <h4>Minimum Students Amount to start Class</h4>
                <p>{{$items->course_minimum_participant}} Persons</p>

                <h2>Location</h2>
                <p><i class="fa fa-map-marker"></i> {{$items->course_location}}</p>

        </div>

        <div class="4u 12u$(small)">
            <label class="button alt big">Rp {{ number_format($items->course_price,2) }} / Person</label>
            <a href="{{url('registration/'.$items->course_id)}}" class="button big">Register & Enroll Class</a>
        </div>
        @endforeach

    </div>

</div>

@stop