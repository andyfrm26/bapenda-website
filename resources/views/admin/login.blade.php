<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Bapenda Jember">
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}

    <link rel="icon" href="{{ asset('favicon-bapenda.png') }}">

    <title>Login Dashboard Admin</title>

    <!-- Google Font-->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    {{-- Admin LTE --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/css/adminlte.min.css"
        integrity="sha512-IuO+tczf4J43RzbCMEFggCWW5JuX78IrCJRFFBoQEXNvGI6gkUw4OjuwMidiS4Lm9Q2lILzpJwZuMWuSEeT9UQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- Bootstrap 4.6 --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    {{-- DataTables --}}
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap4.min.css"
        integrity="sha512-PT0RvABaDhDQugEbpNMwgYBCnGCiTZMh9yOzUsJHDgl/dMhD9yjHAwoumnUk3JydV3QTcIkNDuN40CJxik5+WQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- Custom CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="container vh-100 text-center">
        <div class="d-flex flex-column h-100 justify-content-center align-items-center">
            <img src="{{ asset('/img/logo-bapenda.png') }}" alt="">
            <div class="admin__login-card card my-4">
                <div class="card-body">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-white mb-4">Login Dashboard Admin</h1>
                        </div>
                        @if (Session::has('error'))
                            <div class="alert alert-danger" role="alert">{{ Session::get('error') }}</div>
                        @endif
                        <form class="user" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user" id="email"
                                    name="email" aria-describedby="emailHelp" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-user" id="password"
                                    name="password" placeholder="Password">
                            </div>
                            <button type="submit" class="admin__login-button btn btn-user btn-block text-white">
                                Login
                            </button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small text-white" href="forgot-password.html">Forgot Password?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>

</html>
