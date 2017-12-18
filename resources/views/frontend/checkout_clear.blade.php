<!DOCTYPE HTML>
<html>
<head>
    <title>Anak Rimba - Checkout</title>
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
            <p>Please check your email at <b>{{$oDB[0]->registration_email}}</b> to get your invoice</p>
        </header>
        <hr class="major" />


        <div class="row">
            <div class="6u 12u$(small)">
                <h3>Invoice Number</h3>
                <p>#{{$oDB[0]->registration_id}}</p>
                <h3>Course Name</h3>
                <p>{{$oDB[0]->course_name}}</p>
                <h3>Date</h3>
                <p>{{$oDB[0]->course_date_start}} - {{$oDB[0]->course_date_end}}</p>
                <h3>Amount to Pay</h3>
                <p>Rp {{ number_format($oDB[0]->course_price)}}</p>
                <hr class="major" />
                <h3>How to Pay?</h3>
                <div style="border:solid 1px darkgray; padding:13px;">
                    <p>1. Pay the exact amount from the invoice above<br>
                        2. After the payment has been done, go to <a href="#">Menu > Payment Confirmation</a> to verify your payment<br>
                        3. Our team will send an email regarding of your course</p>
                </div>

            </div>
            <div class="6u 12u$(small)">

                <h3>To Pay for your course, please pay through this account listed below</h3>

                <div class="flex-item box">
                    <div class="image fit">
                        <img src="images/bca.jpg" alt="" />
                    </div>
                    <div class="content">
                        <h3>Bank Central Asia</h3>
                        <p>Rek: <b>5220 3100 29 (PT. Anak Rimba)</b></p>
                    </div>
                </div>

            </div>
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