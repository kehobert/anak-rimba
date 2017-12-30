@include('slices.frontend.head')

<style>
    .error-container{
        padding:30px;
        text-align:center;
        border: solid 1px darkgrey;
        margin-top: 50px;
    }

    .error-page-label{
        font-size:40px;
        color:darkred;
    }

</style>

<!-- Header -->
<header id="header">
    <a href="{{url('')}}" class="logo"><img src="{{ URL::asset('public/images/LogoAnakRimba.png') }}" alt="Anak Rimba"></a>
</header>

<div class="inner error-container">
    <h1 class="error-page-label">Error</h1>
    <p>The Page that you are looking for is not available, <a href="{{url('')}}">Click Here</a> to go back</p>
</div>