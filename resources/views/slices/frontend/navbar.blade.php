<!-- Header -->
<header id="header">
    <nav class="left">
        <a href="#menu"><span>Menu</span></a>
    </nav>
    <a href="{{url('')}}" class="logo"><img src="{{ URL::asset('public/images/LogoAnakRimba.png') }}" alt="Anak Rimba"></a>
    <nav class="right">
        <a href="{{ url('course') }}" class="button alt">Register Class</a>
    </nav>
</header>

<style>
    .service-tag-navbar{
        text-align: center;
        font-weight: 700;
        color:#FFFFFF;
    }

    .contact-us-button{
        position: fixed;
        bottom: 0px;
        right: 50px;
        border-radius: 10px 10px 0px 0px;
    }

</style>

<!-- Menu -->
<nav id="menu">
    <ul class="links">
        <li><a href="{{url('')}}">Home</a></li>
        <li><a href="{{url('course')}}">Training</a></li>
        <li><a href="{{url('payment')}}">Payment Confirmation</a></li>
        <li><a href="{{url('about_us')}}">About Anak Rimba</a></li>
        <li><a href="{{url('news')}}">News</a></li>
    </ul><br/>
    <ul class="links">

        <li><p class="service-tag-navbar">Services</p></li>
        <li><a href="{{url('it_consulting_service')}}">IT Consultant</a></li>
        <li><a href="{{url('mobile_application_development_service')}}">Mobile Application Development</a></li>
        <li><a href="{{url('web_application_development_service')}}">Web Application Development</a></li>
        <li><a href="{{url('penetration_testing_service')}}">Penetration Testing</a></li>
        <li><a href="{{url('hardening_service')}}">Hardening</a></li>
        <li><a href="{{url('digital_forensic_service')}}">Digital Investigation & Forensic</a></li>
    </ul>
</nav>

<button type="submit" href="#" class="btn big contact-us-button" onclick="location.href='http://localhost/anak-rimba/contact_us'">
    <i class="fa fa-envelope"></i> Contact Us!
</button>
