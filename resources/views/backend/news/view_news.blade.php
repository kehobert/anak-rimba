@extends('backend_main')
@section('content')

    @if(Session::has('Message'))
        <div class="alert alert-danger">
            {{Session::get('Message')}}
        </div>
    @endif

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">News <a href="{{url('add_news')}}" class="btn btn-danger btn-fill">Add News</a></h4>

                </div>
                <div class="content">
                    <table class="table table-bordered" id="courseTable">

                        <thead>
                            <tr>
                                <th width="15%">News Title</th>
                                <th width="40%">News Content</th>
                                <th>Writer</th>
                                <th>Created at</th>
                                <th>Visible</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        @foreach($news as $news_item)
                            <tr>

                                <td>{{$news_item->news_title}}</td>
                                <td>{!! str_limit($news_item->news_content, 400) !!}</td>
                                <td>{{$news_item->news_writer}}</td>
                                <td>{{$news_item->created_at}}</td>

                                    @if($news_item->news_visible == 1)
                                        <td style="color:darkgreen">Published</td>
                                    @else
                                        <td style="color:red">Draft</td>
                                    @endif

                                <td>
                                    <a href="{{ url('edit_news', $news_item->news_id) }}" class="btn btn-primary btn-fill">Edit</a>
                                    <a href="{{ url('delete_news', $news_item->news_id) }}"
                                       class="btn btn-danger btn-fill"
                                       onclick="return confirm('Are you sure to delete this course?');">Delete</a>
                                </td>

                            </tr>
                        @endforeach

                    </table>
                </div><!-- end of content -->

            </div>
        </div>
    </div>

@stop