@extends('mail_main')
@section('content')

    <p style="font-size:20px;">Course <b>{{$course_name}}</b> has been registered</p>

    <p style="font-size:15px;">Course Price: <b>Rp {{ number_format($course_price)}}</b></p>

    <br/><br/>

    <h3>
        You can do payments to these banks below
    </h3>

    <div style="padding:15px; border: 1px solid lightgray">
        <p>
            Bank BCA: 5220 3100 29 - Kevin Hobert<br/>
            Bank Mandiri: 5220 3100 29 - Kevin Hobert<br/>
        </p>
    </div>

    <p>
        After your payment has been finished, visit <a href="{{url('payment ')}}">
            Payment Confirmation</a> to confirm your payment

    </p>

    <h4>Regards,<br/>Anak Rimba Team</h4>

    <br/><br/><br/><br/>
    <p>Note: Do not reply to this email. This is an auto respond email.</p>
@stop