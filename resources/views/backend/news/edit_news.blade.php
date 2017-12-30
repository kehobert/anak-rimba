@extends('backend_main')
@section('content')


    <div class="row">
        <div class="col-md-12">
            <div class="card">

                @if (count($errors) > 0)
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif

                <div class="header">
                    <h4 class="title">Add News</h4>
                </div>
                <div class="content">
                    <form method="post" action="{{url('update_news', $oNews[0]->news_id)}}" enctype="multipart/form-data">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>News Title</label>
                                    <input type="text"
                                           class="form-control"
                                           name="news_title"
                                           value="{{$oNews[0]->news_title}}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>News Content</label>
                                    <textarea class="form-control" name="news_content">{{$oNews[0]->news_content}}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>News Writer</label>
                                    <input type="text"
                                           class="form-control"
                                           name="news_writer"
                                           value="{{$oNews[0]->news_writer}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>News Editor</label>
                                    <input type="text"
                                           class="form-control"
                                           name="news_editor"
                                           value="{{$oNews[0]->news_editor}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>News Source (url)</label>
                                    <input type="text"
                                           class="form-control"
                                           name="news_source"
                                           value="{{$oNews[0]->news_source}}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="hidden" name="news_visible" value="0">
                                    <input type="checkbox" id="" name="news_visible" value="1" @if($oNews[0]->news_visible == 1) checked @else @endif><label> Set Visible</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Upload Image ( You can select more than one photo )</label>
                                    <input type="file" placeholder="Upload Image" class="btn btn-fill btn-danger" name="news_photo[]" multiple />
                                </div>
                            </div>
                        </div>

                        <input type="hidden" name="news_active" value="1">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-info btn-fill pull-right">Save</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop