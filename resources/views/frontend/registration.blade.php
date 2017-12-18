@extends('main')
@section('content')

<div class="inner">

    <header class="align-center">
        <h1>Register Course</h1>
        <h3>{{$course_name}}</h3>
    </header>

    <hr class="major" />

    <form method="post" action="{{url('register_entry/'.$course_id)}}" name="submission">
        <div class="row uniform">
            <div class="6u 12u$(xsmall)">
                <input type="text" name="name" id="name" value="" placeholder="Name" /><br />
                <input type="text" name="phone" id="phone" value="" placeholder="Phonenumber" />
            </div>
            <div class="6u$ 12u$(xsmall)">
                <input type="email" name="email" id="email" value="" placeholder="Email" /><br />
                <div class="select-wrapper">
                    <select name="category" id="category">
                        <option value="">- Amount of Students -</option>
                        <option value="1">0-5</option>
                        <option value="1">6-10</option>
                        <option value="1">11-20</option>
                        <option value="1">> 21</option>
                    </select>
                </div>
            </div>
            <div class="12u$">
                <hr class="major" />
                <textarea name="message" id="message" placeholder="Enter your message or questions" rows="5"></textarea>
            </div>
            <div class="12u align-center">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" value="Enroll now" class="button big">
            </div>
        </div>

    </form>

    </div>

</div>

@stop