<!DOCTYPE HTML>
<!--
	Intensify by TEMPLATED
	templated.co @templatedco
        Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
    -->
<html>
<head>
    <title>Anak Rimba - Classes</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" />
</head>
<body class="subpage">

<!-- Header -->
<header id="header">
    <nav class="left">
        <a href="#menu"><span>Menu</span></a>
    </nav>
    <a href="index.html" class="logo"><img src="assets/img/LogoAnakRimba.png" alt="Anak Rimba"></a>
    <nav class="right">
        <a href="#" class="button alt">Register Class</a>
    </nav>
</header>

<!-- Menu -->
<nav id="menu">
    <ul class="links">
        <li><a href="index.html">Home</a></li>
        <li><a href="generic.html">Generic</a></li>
        <li><a href="elements.html">Elements</a></li>
    </ul>
    <ul class="actions vertical">
        <li><a href="#" class="button fit">Login</a></li>
    </ul>
</nav>

<!-- Main -->
<section id="main" class="wrapper">

    <div class="inner">

        <div class="row">

            <div class="8u 12u$(small)">
                @foreach($course_details as $items)
                    <h1>{{$items->course_name}}</h1>
                    <p>{{$items->course_description}}</p>

                    <h4>Date</h4>
                    <p>{{$items->course_date_start}} - {{$items->course_date_end}}</p>

                    <h4>Registration Deadline</h4>
                    <p>{{$items->course_registration_deadline}}</p>

                    <h4>Minimum Students Amount to start Class</h4>
                    <p>{{$items->course_minimum_participant}} Persons</p>

                    <h2>Location</h2>
                    <p><i class="fa fa-map-marker"></i> {{$items->course_location}}</p>

            </div>

            <div class="4u 12u$(small)">
                <label class="button alt big">Rp {{ number_format($items->course_price,2) }} / Person</label>
                <a href="{{url('registration/'.$items->course_id)}}" class="button big">Register & Enroll Class</a>
            </div>
            @endforeach

        </div>

    </div>

</section>



<!-- Footer -->
<footer id="footer">
    <div class="inner">
        <h2>Get In Touch</h2>
        <ul class="actions">
            <li><span class="icon fa-phone"></span> <a href="#">(000) 000-0000</a></li>
            <li><span class="icon fa-envelope"></span> <a href="#">information@untitled.tld</a></li>
            <li><span class="icon fa-map-marker"></span> 123 Somewhere Road, Nashville, TN 00000</li>
        </ul>
    </div>
    <div class="copyright">
        &copy; Untitled. Design <a href="https://templated.co">TEMPLATED</a>. Images <a href="https://unsplash.com">Unsplash</a>.
    </div>
</footer>

<!-- Scripts -->

<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('js/jquery.scrolly.min.js') }}"></script>
<script src="{{ URL::asset('js/skel.min.js') }}"></script>
<script src="{{ URL::asset('js/util.js') }}"></script>
<script src="{{ URL::asset('js/main.js') }}"></script>


</body>
</html>