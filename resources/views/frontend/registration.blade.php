@extends('main')
@section('content')

<div class="inner">

    <header class="align-center">
        <h1>Register Course</h1>
        <h3>{{$course_name}}</h3>
    </header>

    <hr class="major" />

    @if (count( $errors ) > 0 )

        <div class="alert alert-danger" style="margin-bottom:20px; background: darkred; color:white; padding:10px;">

        @foreach ($errors->all() as $error)
            <i class="fa fa-warning"></i>&nbsp{{ $error }}
            <br>
        @endforeach

        </div>
    @endif



    <form method="post" action="{{url('register_entry/'.$course_id)}}" name="submission">
        <div class="row uniform">
            <div class="6u 12u$(xsmall)">
                <input type="text" name="name" id="name" value="{{Input::old('name')}}" placeholder="Name" /><br />
                <input type="text" name="phone" id="phone" value="{{Input::old('phone')}}" placeholder="Phonenumber" />
            </div>
            <div class="6u$ 12u$(xsmall)">
                <input type="email" name="email" id="email" value="{{Input::old('email')}}" placeholder="Email" /><br />
                <input type="text" name="address" id="address" value="{{Input::old('address')}}" placeholder="Address" /><br />
            </div>
            <div class="12u$">
                <hr class="major" />
                <textarea name="message" id="message" placeholder="Enter your message or questions" rows="5">{{Input::old('message')}}</textarea>
            </div>
            <div class="g-recaptcha" data-sitekey="6Ld7cT4UAAAAAGaxOqh1M4rZfX6cFxk0Y_6P0OJI"></div>
            <div class="12u align-center">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" value="Enroll now" class="button big">
            </div>

        </div>
    </form>

    </div>

</div>
<script src='https://www.google.com/recaptcha/api.js'></script>

@stop