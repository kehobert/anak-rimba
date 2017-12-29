@extends('backend_main')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Edit News</h4>
                </div>
                <div class="content">
                    <form method="post" action="{{url('store_news')}}">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>News Content</label>
                                    <textarea class="form-control" name="news_content"></textarea>
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