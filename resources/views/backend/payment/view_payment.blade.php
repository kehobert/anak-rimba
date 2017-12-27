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
                    <h4 class="title">Payment</h4>

                </div>
                <div class="content">
                    <table class="table table-bordered" id="courseTable">

                        <thead>
                        <tr>
                            <th>Registrar Email</th>
                            <th>Course Name</th>
                            <th>Bank Name</th>
                            <th>Bank Account Number</th>
                            <th>Transfer Amount</th>
                            <th>Bank Destination</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        @foreach($payment_list as $item)
                            <tr>
                                <td>{{$item->registration_email}}</td>
                                <td>{{$item->course_name}}</td>
                                <td>{{$item->payment_confirmation_bank_name}}</td>
                                <td>{{$item->payment_confirmation_bank_account_number}}</td>
                                <td>{{$item->payment_confirmation_transfer_amount}}</td>
                                <td>{{$item->payment_confirmation_bank_destination}}</td>
                                @if($item->payment_confirmation_confirmed == 0)
                                    <td style="color:red">{{$status = "Pending" }}</td>
                                @else
                                    <td style="color:darkgreen">{{$status = "Confirmed" }}</td>
                                @endif
                                <td>
                                    <button class="btn btn-danger btn-fill">Delete</button>
                                    <button class="btn btn-info btn-fill">Confirm</button>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div><!-- end of content -->

            </div>
        </div>
    </div>

@stop