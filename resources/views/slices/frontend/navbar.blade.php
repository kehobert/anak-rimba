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

<!-- Menu -->
<nav id="menu">
    <ul class="links">
        <li><a href="{{url('')}}">Home</a></li>
        <li><a href="{{url('course')}}">Courses</a></li>
        <li><a href="{{url('payment')}}">Payment Confirmation</a></li>
        <li><a href="{{url('about_us')}}">About Anak Rimba</a></li>
    </ul>
    <ul class="actions vertical">
        <li><a href="#" class="button fit">Login</a></li>
    </ul>
</nav>

<button class="btn big contact-us-button"><i class="fa fa-envelope"></i> Contact Us!</button>

<style>
    .contact-us-button{
        position: fixed;
        bottom: 0px;
        right: 50px;
        border-radius: 10px 10px 0px 0px;
    }

</style>

