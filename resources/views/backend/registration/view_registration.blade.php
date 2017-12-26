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
                    <h4 class="title">Registration</h4>
                </div>
                <div class="content">
                    <table class="table table-bordered" id="courseTable">

                        <thead>
                        <tr>
                            <th>Registrar Email</th>
                            <th>Registrar Fullname</th>
                            <th>Course Name</th>
                            <th>Payment Status</th>
                        </tr>
                        </thead>

                        @foreach($registration as $registration_item)
                            <tr>
                                <td>{{$registration_item->registration_email}}</td>
                                <td>{{$registration_item->registration_fullname}}</td>
                                <td>{{$registration_item->course_name}}</td>

                                @if($registration_item->payment_confirmation_confirmed == 0)
                                    <td style="color:red">{{$status = "Pending" }}</td>
                                @else
                                    <td style="color:darkgreen">{{$status = "Confirmed" }}</td>
                                @endif


                            </tr>
                        @endforeach

                    </table>
                </div><!-- end of content -->

            </div>
        </div>
    </div>

@stop