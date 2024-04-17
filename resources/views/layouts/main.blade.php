<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Badan Pendapatan Daerah (Bapenda) Kabupaten Jember merupakan badan pemerintahan yang bertanggung jawab dalam...">
    <meta name="keywords" content="Badan Pendapatan Daerah, Bapenda, Bapenda Jember, Pajak Jember">

    <link rel="icon" href="{{ asset('favicon-bapenda.png') }}">
    <title>Bapenda Jember | {{ $title }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;500;600;700;800;900;1000&display=swap"
        rel="stylesheet">

    {{-- Bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    {{-- Custom CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>

<body>
    {{-- <x-navbar :title="$title"></x-navbar> --}}

    @component('components.navbar', ['title' => $title])
    @endcomponent

    @yield('content')

    @component('components.footer')
    @endcomponent

    {{-- Instagram svg utilities --}}
    <svg width="0" height="0" style="position: absolute;">
        <radialGradient id="rg" r="150%" cx="30%" cy="107%">
            <stop stop-color="#fdf497" offset="0" />
            <stop stop-color="#fdf497" offset="0.05" />
            <stop stop-color="#fd5949" offset="0.45" />
            <stop stop-color="#d6249f" offset="0.6" />
            <stop stop-color="#285AEB" offset="0.9" />
        </radialGradient>
    </svg>

    {{-- font awesome --}}
    <script src="https://use.fontawesome.com/releases/v6.4.0/js/all.js"></script>

    {{-- Bootstrap 5 --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
