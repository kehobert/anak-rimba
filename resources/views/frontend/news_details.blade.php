@extends('main')
@section('content')

    <div class="inner">
        <header class="align-center">

            <?php
                //Change time format to d-m-Y using PHP function DateTime->format
                $createDate = new DateTime($oNews[0]->created_at);
                $strip = $createDate->format('d-m-Y');
            ?>

            <h1>{{$oNews[0]->news_title}}</h1>
            <p>Posted at: <b>{{$strip}}</b> ( Source: <i>{{$oNews[0]->news_source}} )</i></p>
        </header>

        <hr class="major" />
        <!--
        <div class="img-fit">
            <img src="{{url('public/images/thumbnail_news_anak_rimba.png')}}" alt="">
        </div>
        -->

        {!!$oNews[0]->news_content !!}

    </div>

@stop