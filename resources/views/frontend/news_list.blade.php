@extends('main')
@section('content')

    <div class="inner">
        <header class="align-center">
            <h1>Newsfeed</h1>
            <p>Check out latest news from Anakrimba</p>
        </header>

        <hr class="major" />


            @foreach($oNews as $news)

            <?php
                //Change time format to d-m-Y using PHP function DateTime->format
                $createDate = new DateTime($news->created_at);
                $strip = $createDate->format('d-m-Y');
            ?>

            <div class="row">
                <div class="3u 12u$(small)">

                    <img src="{{url('public/images/thumbnail_news_anak_rimba.png')}}" width="200px;">

                </div>
                <div class="9u 12u$(small)">

                    <h3><a href="{{url('news_details',$news->news_id)}}">{{$news->news_title}}</a></h3>

                    <p style="font-size:14px;">Posted at: <b>{{$strip}}</b> (Source: <i>{{$news->news_source}}</i>)</p>
                    <p>{{strip_tags(str_limit($news->news_content,150))}}</p>

                </div>
            </div>
            @endforeach

    </div>

@stop