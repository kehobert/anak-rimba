@extends('main')
@section('content')

<div class="inner">

    <header class="align-center">
        <h1>Payment Confirmation</h1>
        <p>After you pay for the course, please put your payment information so our team can check it</p>
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


    <form method="post" action="{{url('confirm_payment')}}" name="payment_confirmation_form">

        <h3>Invoice Number</h3>
        <input type="text" name="invoice_number" value="{{Input::old('invoice_number')}}" placeholder="e.g: #40"><br>
        <h3>Bank Name</h3>
        <input type="text" name="bank_name" value="{{Input::old('bank_name')}}" placeholder="e.g: BCA, Mandiri"><br>

        <h3>Bank Account Number</h3>
        <input type="text" name="bank_account_number" value="{{Input::old('bank_account_number')}}" placeholder="e.g: 1234 5678 99"><br>

        <hr class="major" />

        <h3>Transfer Amount (IDR)</h3>
        <input type="text" name="transfer_amount" value="{{Input::old('transfer_amount')}}" placeholder="e.g: 2000000"><br>

        <h3>Bank Destination</h3>

        <div class="row">

            <div class="4u 12u$(small)">
                <input type="radio" id="bca" name="chosen_bank" value="BCA" checked>
                <label for="bca">Bank Central Asia (BCA)</label></div>
            <div class="4u 12u$(small)">
                <input type="radio" id="mandiri" name="chosen_bank" value="Bank Mandiri">
                <label for="mandiri">Bank Mandiri</label>
            </div>

        </div>
        <br/><br/>

        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="submit" value="Confirm Payment" class="button">
    </form>

</div>
@stop