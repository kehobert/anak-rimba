<!doctype html>
<html>
<head>
    @include('slices.head')
</head>
<body class="subpage">

    <!-- Show navbar -->
    @include('slices.navbar')

    <section id="main" class="wrapper">
        @yield('content')
    </section>

    <footer id="footer">
        @include('slices.footer')
    </footer>

</body>
</html>