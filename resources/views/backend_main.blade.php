<!doctype html>
<html>
<head>
    @include('slices.backend.head')
</head>
<body class="subpage">

    <div class="content">
        <div class="container-fluid">
            @yield('content')
        </div>
    </div>

<footer id="footer">
    @include('slices.backend.footer')
</footer>

</body>
</html>