<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/187787b45d.js" crossorigin="anonymous"></script>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&family=Poppins&display=swap" rel="stylesheet">
    @vite(['resources/css/index.css', 'resources/js/index.js'])
    <style>
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Poppins', sans-serif !important;
        }

        p {
            font-family: 'PT Sans', sans-serif !important;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    @stack('style')

</head>

<body>
    @include('layout.header')
    <div class="px-3 lg:px-0">
        @yield('content')
    </div>

    @include('layout.footer')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    @stack('script')
</body>

</html>
