@extends('backend_main')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Edit Course - {{$oCourse[0]->course_name}}</h4>
                </div>
                <div class="content">
                    <form method="post" action="{{url('update_course',$oCourse[0]->course_id)}}">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Course Name</label>
                                    <input type="text"
                                           class="form-control"
                                           name="course_name"
                                           value="{{$oCourse[0]->course_name}}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Course Description</label>
                                    <textarea class="form-control"  name="course_description">{{$oCourse[0]->course_description}}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Date Start</label>
                                    <input type="date"
                                           class="form-control"
                                           placeholder=""
                                           name="course_date_start"
                                           format="dd/mm/yy"
                                           value="{{$oCourse[0]->course_date_start}}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Date End</label>
                                    <input type="date"
                                           class="form-control"
                                           placeholder=""
                                           name="course_date_end"
                                            value="{{$oCourse[0]->course_date_end}}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Registration Deadline</label>
                                    <input type="date"
                                           class="form-control"
                                           placeholder=""
                                           name="course_registration_deadline"
                                           value="{{$oCourse[0]->course_registration_deadline}}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Minimum Participant</label>
                                    <input type="text"
                                           class="form-control"
                                           placeholder=""
                                           name="course_minimum_participant"
                                           value="{{$oCourse[0]->course_minimum_participant}}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Course Location</label>
                                    <input type="text"
                                           class="form-control"
                                           placeholder=""
                                           value="{{$oCourse[0]->course_location}}"
                                           name="course_location">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Course Price</label>
                                    <input type="text"
                                           class="form-control"
                                           placeholder=""
                                           value="{{$oCourse[0]->course_price}}"
                                           name="course_price">
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-danger btn-fill pull-right">Save</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop