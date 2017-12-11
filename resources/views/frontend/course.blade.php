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
            <h1>Our Course</h1>
            <p>Click register to enroll on our class</p>
        </header>

        <hr class="major" />

        <div class="table-wrapper">
            <table class="alt">
                <thead>
                <tr>
                    <th>Class Name</th>
                    <th width="20%">Date</th>
                    <th>Location</th>
                    <th>Register</th>
                </tr>
                </thead>
                <tbody>
                @foreach($course as $course_item)
                    <tr>
                        <td>{{$course_item->course_name}}</td>
                        <td>{{$course_item->course_date_start}}</td>
                        <td>{{$course_item->course_location}}</td>
                        <td><a href="{{ route('course_registration', $course_item->course_id) }}" class="button small">Register</a></td>
                    </tr>
                @endforeach
                <tr>
                    <td><a href="#">Advance Android Training and Development</a></td>
                    <td>11/01/2018 - 14/01/2018</td>
                    <td>Jakarta Barat, Indonesia</td>
                    <td><a href="#" class="button small">Register</a></td>
                </tr>
                <tr>
                    <td><a href="#">Penetration Testing Network Security</a></td>
                    <td>11/01/2018 - 14/01/2018</td>
                    <td>Jakarta Barat, Indonesia</td>
                    <td><a href="#" class="button small">Register</a></td>
                </tr>
                <tr>
                    <td><a href="#">Web Programming (Java, PHP, Node.js)</a></td>
                    <td>11/01/2018 - 14/01/2018</td>
                    <td>Jakarta Barat, Indonesia</td>
                    <td><a href="#" class="button small">Register</a></td>
                </tr>
                <tr>
                    <td><a href="#">IT & Network Fundamentals</a></td>
                    <td>11/01/2018 - 14/01/2018</td>
                    <td>Jakarta Barat, Indonesia</td>
                    <td><a href="#" class="button small">Register</a></td>
                </tr>
                <tr>
                    <td><a href="#">System Analysis Design & UML Development</a></td>
                    <td>11/01/2018 - 14/01/2018</td>
                    <td>Jakarta Barat, Indonesia</td>
                    <td><a href="#" class="button small">Register</a></td>
                </tr>
                </tbody>
            </table>
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


</body>
</html>

