@extends('backend_main')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Add Course</h4>
                </div>
                <div class="content">
                    <form method="post" action="{{url('store_course')}}">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Course Name</label>
                                    <input type="text"
                                           class="form-control"
                                           name="course_name"
                                           value="">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Course Description</label>
                                    <textarea class="form-control" name="course_description"></textarea>
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
                                           value="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Date End</label>
                                    <input type="date"
                                           class="form-control"
                                           placeholder=""
                                           name="course_date_end">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Registration Deadline</label>
                                    <input type="date"
                                           class="form-control"
                                           placeholder=""
                                           name="course_registration_deadline">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Minimum Participant</label>
                                    <input type="text"
                                           class="form-control"
                                           placeholder=""
                                           name="course_minimum_participant">
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
                                           name="course_location">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Course Price</label>
                                    <input type="text"
                                           class="form-control"
                                           placeholder=""
                                           name="course_price">
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="course_active" value="1">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-info btn-fill pull-right">Add Course</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop