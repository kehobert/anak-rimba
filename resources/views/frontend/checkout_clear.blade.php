@extends('main')
@section('content')
<div class="inner">

    <header class="align-center">
        <h1 style="">Thank You</h1>
        <p>Please check your email at <b>{{$oDB[0]->registration_email}}</b> to get your invoice</p>
    </header>

    <hr class="major" />

    <div class="row">
        <div class="6u 12u$(small)">
            <h3>Invoice Number</h3>
            <p>#{{$oDB[0]->registration_id}}</p>

            <h3>Course Name</h3>
            <p>{{$oDB[0]->course_name}}</p>

            <h3>Date</h3>
            <p>{{$oDB[0]->course_date_start}} - {{$oDB[0]->course_date_end}}</p>

            <h3>Amount to Pay</h3>
            <p>Rp {{ number_format($oDB[0]->course_price)}}</p>

            <hr class="major" />

            <h3>How to Pay?</h3>
            <div style="border:solid 1px darkgray; padding:13px;">
                <p>1. Pay the exact amount from the invoice above<br>
                    2. After the payment has been done, go to <a href="{{url('payment_confirmation')}}">Menu > Payment Confirmation</a> to verify your payment<br>
                    3. Our team will send an email regarding of your course</p>
            </div>

        </div>
        <div class="6u 12u$(small)">

            <h3>To Pay for your course, please pay through this account listed below</h3>

            <div class="flex-item box">
                <div class="image fit">
                    <img src="images/bca.jpg" alt="" />
                </div>
                <div class="content">
                    <h3>Bank Central Asia</h3>
                    <p>Rek: <b>5220 3100 29 (PT. Anak Rimba)</b></p>
                </div>
            </div>

        </div>
    </div>

</div>

@stop