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
    <link rel="stylesheet" href="{{ URL::asset('public/css/main.css') }}" />
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

        <header class="align-center">
            <h1>Register Course</h1>
            <h3>{{$course_name}}</h3>
        </header>
        <hr class="major" />

        <form method="post" action="{{url('register_entry/'.$course_id)}}" name="submission">
            <div class="row uniform">
                <div class="6u 12u$(xsmall)">
                    <input type="text" name="name" id="name" value="" placeholder="Name" /><br />
                    <input type="text" name="phone" id="phone" value="" placeholder="Phonenumber" />
                </div>
                <div class="6u$ 12u$(xsmall)">
                    <input type="email" name="email" id="email" value="" placeholder="Email" /><br />
                    <div class="select-wrapper">
                        <select name="category" id="category">
                            <option value="">- Amount of Students -</option>
                            <option value="1">0-5</option>
                            <option value="1">6-10</option>
                            <option value="1">11-20</option>
                            <option value="1">> 21</option>
                        </select>
                    </div>
                </div>
                <div class="12u$">
                    <hr class="major" />
                    <textarea name="message" id="message" placeholder="Enter your message or questions" rows="5"></textarea>
                </div>
                <div class="12u align-center">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" value="Enroll now" class="button big">
                </div>
            </div>

        </form>

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