@extends('backend_main')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Edit Testimony</h4>
                </div>
                <div class="content">

                    @if(Session::has('Message'))
                        <div class="alert alert-danger">
                            {{Session::get('Message')}}
                        </div>
                    @endif

                    <form method="post" action="{{url('update_testimony', $oTestimony[0]->testimony_id)}}">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Testimony Content</label>
                                    <textarea class="form-control" name="testimony_content">{{$oTestimony[0]->testimony_content}}</textarea>
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
                                           name="testimony_name"
                                           value="{{$oTestimony[0]->testimony_name}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Company</label>
                                    <input type="text"
                                           class="form-control"
                                           placeholder=""
                                           name="testimony_company"
                                           value="{{$oTestimony[0]->testimony_company}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Company Position</label>
                                    <input type="text"
                                           class="form-control"
                                           placeholder=""
                                           name="testimony_position"
                                           value="{{$oTestimony[0]->testimony_position}}">
                                </div>
                            </div>

                        </div>
                        <input type="hidden" name="testimony_active" value="1">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-info btn-fill pull-right">Save</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop