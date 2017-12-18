<!-- Header -->
<header id="header">
    <nav class="left">
        <a href="#menu"><span>Menu</span></a>
    </nav>
    <a href="index.html" class="logo"><img src="public/images/LogoAnakRimba.png" alt="Anak Rimba"></a>
    <nav class="right">
        <a href="{{ url('course') }}" class="button alt">Register Class</a>
    </nav>
</header>

<!-- Menu -->
<nav id="menu">
    <ul class="links">
        <li><a href="{{url('')}}">Home</a></li>
        <li><a href="{{url('course')}}">Courses</a></li>
        <li><a href="{{url('payment_confirmation')}}">Payment Confirmation</a></li>
        <li><a href="{{url('about_us')}}">About Anak Rimba</a></li>
    </ul>
    <ul class="actions vertical">
        <li><a href="#" class="button fit">Login</a></li>
    </ul>
</nav>