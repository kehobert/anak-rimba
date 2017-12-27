@extends('backend_main')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Add Testimony</h4>
                </div>
                <div class="content">
                    <form method="post" action="{{url('store_testimony')}}">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Testimony Content</label>
                                    <textarea class="form-control" name="testimony_content"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Testimony Writer</label>
                                    <input type="text"
                                           class="form-control"
                                           placeholder=""
                                           name="testimony_name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Company</label>
                                    <input type="text"
                                           class="form-control"
                                           placeholder=""
                                           name="testimony_company">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Company Position</label>
                                    <input type="text"
                                           class="form-control"
                                           placeholder=""
                                           name="testimony_position">
                                </div>
                            </div>

                        </div>
                        <input type="hidden" name="testimony_active" value="1">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-info btn-fill pull-right">Add Testimony</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop