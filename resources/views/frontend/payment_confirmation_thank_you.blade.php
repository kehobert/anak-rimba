<!DOCTYPE HTML>
<html>
<head>
    <title>Anak Rimba - Checkout</title>
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
    <a href="index.html" class="logo"><img src="assets/img/LogoAnakRimba.png" alt="Logo Anak Rimba"></a>
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
            <h1 style="">Thank You</h1>
            <p>
                We will verify your payment confirmation soon!<br/><br/>
                <a href="{{url('course')}}">Click here</a> to check other upcoming courses that we have
            </p>
        </header>

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