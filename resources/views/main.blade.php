<!doctype html>
<html>
<head>
    @include('slices.frontend.head')
</head>
<body class="subpage">

    <!-- Show navbar -->
    @include('slices.frontend.navbar')

    <section id="main" class="wrapper">
        @yield('content')
    </section>

    <footer id="footer">
        @include('slices.frontend.footer')
    </footer>

</body>
</html>