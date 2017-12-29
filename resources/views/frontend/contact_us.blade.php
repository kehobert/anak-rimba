@extends('main')
@section('content')

    <div class="inner">

        <header class="align-center">
            <h1>Contact Form</h1>
            <p>or you can send email directly to <b>sales@anakrimba.org</b></p>
        </header>
        <hr class="major" />

        @if (count( $errors ) > 0 )
            <div class="custom-error-box">

                @foreach ($errors->all() as $error)
                    <i class="fa fa-warning"></i>&nbsp{{ $error }}
                    <br>
                @endforeach

            </div>
        @endif


        <form method="post" action="{{url('send_customer_message')}}" name="contact_us_form">

            <h3>Your Name</h3>
            <input type="text" value="{{Input::old('contact_person_name')}}" name="contact_person_name"><br/>

            <h3>Your Email Address</h3>
            <input type="text" value="{{Input::old('contact_person_email')}}" name="contact_person_email" placeholder="We will reply to your email address as soon we saw your message"><br/>

            <h3>Select Your Topic</h3>
            <div class="select-wrapper">
                <select name="message_topic" value="{{Input::old('message_topic')}}">
                    <option value="Training">Training</option>
                    <option value="IT Consultant">IT Consultant</option>
                    <option value="Web Application Development">Web Application Development</option>
                    <option value="Mobile Application Development">Mobile Application Development</option>
                    <option value="Penetration Testing">Penetration Testing</option>
                    <option value="Hardening">Hardening</option>
                    <option value="Digital Investigation & Forensic">Digital Investigation & Forensic</option>
                </select>
            </div>

            <hr class="major" />

            <h3>Your Message</h3>
            <textarea name="message_content" rows="5">{{Input::old('message_content')}}</textarea><br/>

            <div class="g-recaptcha" data-sitekey="6Ld7cT4UAAAAAGaxOqh1M4rZfX6cFxk0Y_6P0OJI"></div><br/>

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" value="Send Message" class="button">
        </form>

    </div>

    <script src='https://www.google.com/recaptcha/api.js'></script>
@stop

