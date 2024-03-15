<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>

    <link rel="shortcut icon" href="{{ asset('assets/img/logoBlack.png') }}">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/all.min.css') }}">

    <style>
        body {
            font-size: .875rem;
        }

        .feather {
            width: 16px;
            height: 16px;
        }

        .sidebar {
            position: fixed;
            top: 0;
            /* rtl:raw:
            right: 0;
            */
            bottom: 0;
            /* rtl:remove */
            left: 0;
            z-index: 100;
            /* Behind the navbar */
            padding: 74px 0 0;
        }

        @media (max-width: 767.98px) {
            .sidebar {
                top: 5rem;
            }
        }

        .sidebar-sticky {
            height: calc(100vh - 48px);
            overflow-x: hidden;
            overflow-y: auto;
            /* Scrollable contents if viewport is shorter than content. */
        }

        .sidebar .nav-link {
            font-weight: 500;
            color: #333;
        }

        .sidebar .nav-link .feather {
            margin-right: 4px;
            color: #727272;
        }

        .sidebar .nav-link.active {
            color: #2470dc;
        }

        .sidebar .nav-link:hover .feather,
        .sidebar .nav-link.active .feather {
            color: inherit;
        }

        .sidebar-heading {
            font-size: .75rem;
        }


        .navbar-brand {
            padding-top: .75rem;
            padding-bottom: .75rem;
            background-color: rgba(0, 0, 0, .25);
        }

        .navbar .navbar-toggler {
            top: .25rem;
            right: 1rem;
        }

        .navbar .form-control {
            padding: .75rem 1rem;
        }

        .form-control-dark {
            color: #fff;
            background-color: rgba(255, 255, 255, .1);
            border-color: rgba(255, 255, 255, .1);
        }

        .form-control-dark:focus {
            border-color: transparent;
            box-shadow: 0 0 0 3px rgba(255, 255, 255, .25);
        }

        .dropdown-toggle {
            outline: 0;
        }

        .div-user {
            border-radius: 1.9rem
        }

        .bs-custom {
            background-color: #EE8D11;
        }

        .nm-user {
            font-size: 15px;
            letter-spacing: 0.15px;
            color: #FFF
        }

        .prf-user {
            font-size: 10px;
            letter-spacing: 0.1px;
            color: #FFF
        }

        .settings {
            border-radius: 100%;
            width: 45px;
            height: 45px;
        }

        .settings:focus,
        .settings:hover {
            background-color: #ffc107;
            border-radius: 100%;
            width: 45px;
            height: 45px;
        }

        .settings a i {
            color: #FFF;
        }

        .navbar-nav .dropdown-menu {
            position: absolute;
        }

        .dropdown-menu[data-bs-popper] {
            top: 100%;
            right: 50%;
            left: unset;
            margin-top: var(--bs-dropdown-spacer);
        }

        .text-small {
            font-size: 85%;
        }

        .dropdown-item:active{
            background-color: #EE8D11
        }

        .footer{
            position: absolute;
            bottom: 0;
            width: -moz-available;          /* For Mozzila */
            width: -webkit-fill-available;  /* For Chrome */
        }
    </style>
    @yield('css')


</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-ligth flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">
            <img src="{{ asset('assets/img/logoielio.png') }}" alt="Iélio Photography logo" style="height: 50px;">
        </a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="w-100">
            @yield('title')
        </div>
        <div class="navbar-nav m-auto">
            <div class="nav-item text-nowrap">
                <div class="d-flex div-user bs-custom justify-content-between">
                    <img class="m-1" src="{{ asset('assets/img/user.png') }}" alt="Photo User" style="height: 45px;">

                    <div class="d-flex flex-column ml-1 mr-1 text-start justify-content-center">
                        <span class="nm-user">Iélio Martins</span>
                        <span class="prf-user">teste</span>
                    </div>

                    <div class="d-flex settings justify-content-center align-items-center m-1 dropdown">
                        <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-gear" style="font-size: 30px"></i>
                        </a>
                        <ul class="dropdown-menu text-small">
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3 sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">
                                <span class="align-text-bottom"> <i class="fa-solid fa-chart-line"></i></span>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="align-text-bottom"> <i class="fa-solid fa-user-plus"></i></span>
                                Clientes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="align-text-bottom"> <i class="fa-solid fa-people-carry-box"></i></span>
                                Fornecedores
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="align-text-bottom"> <i class="fa-solid fa-calendar-days"></i></span>
                                Agenda
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="align-text-bottom"> <i class="fa-regular fa-credit-card"></i></span>
                                Despesas
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="align-text-bottom"> <i class="fa-solid fa-file-signature"></i></span>
                                Contratos
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

                @yield('content')


                <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top main-footer m-5 footer">
                    <div class="col-md-4 d-flex align-items-center">
                        <span class="mb-3 mb-md-0 small text-dark">&copy; {{ date('Y') }}
                            {{ config('app.name') }}.@lang('All rights reserved.')</span>
                    </div>

                    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                        <li class="ms-3">
                            <a class="text-muted" href="#">
                                <img src="{{ asset('assets/img/bi_instagram.png') }}" alt="Instagram" style="height: 20px;">
                            </a>
                        </li>
                        <li class="ms-3">
                            <a class="text-muted" href="#">
                                <img src="{{ asset('assets/img/bi_whatsapp.png') }}" alt="Whatsapp" style="height: 20px;">
                            </a>
                        </li>
                        <li class="ms-3">
                            <img src="{{ asset('assets/img/gmail.png') }}" alt="Email" style="height: 20px;">
                        </li>
                    </ul>
                </footer>
            </main>
        </div>
    </div>

    {{-- <div class="container-xxl">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4">
            <a href="/" class="d-flex align-items-center col-md-1 mb-2 mb-md-0 text-dark text-decoration-none">
                <img src="{{ asset('assets/img/logoielio.png') }}" alt="Iélio Photography logo" style="height: 60px;">
    </a>

    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 bg-custom menu">
        <li><a href="#" class="nav-link px-2 m-1">Dashboard</a></li>
        <li><a href="#" class="nav-link px-2 m-1">Clientes</a></li>
        <li><a href="#" class="nav-link px-2 m-1">Fornecedores</a></li>
        <li><a href="#" class="nav-link px-2 m-1">Agenda</a></li>
        <li><a href="#" class="nav-link px-2 m-1">Pagamentos</a></li>
        <li><a href="#" class="nav-link px-2 m-1">Contratos</a></li>
    </ul>

    <div class="d-flex col-7 col-md-2 text-end div-user bg-custom justify-content-between">
        <img class="m-1" src="{{ asset('assets/img/user.png') }}" alt="Photo User" style="height: 45px;">

        <div class="d-flex flex-column ml-1 mr-1 text-start justify-content-center">
            <span class="nm-user">Iélio Martins</span>
            <span class="prf-user">Administrador</span>
        </div>

        <div class="d-flex settings justify-content-center align-items-center m-1 dropdown">
            <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-gear" style="font-size: 30px"></i>
            </a>
            <ul class="dropdown-menu text-small">
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
        </div>

    </div>
    </header>
    </div>

    <div class="container-xxl">
        @yield('content')

    </div>

    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top main-footer mt-auto m-5">
        <div class="col-md-4 d-flex align-items-center">
            <span class="mb-3 mb-md-0 small" style="color: #7B5123">&copy; {{ date('Y') }}
                {{ config('app.name') }}.@lang('All rights reserved.')</span>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3">
                <a class="text-muted" href="#">
                    <img src="{{ asset('assets/img/bi_instagram.png') }}" alt="Instagram" style="height: 20px;">
                </a>
            </li>
            <li class="ms-3">
                <a class="text-muted" href="#">
                    <img src="{{ asset('assets/img/bi_whatsapp.png') }}" alt="Whatsapp" style="height: 20px;">
                </a>
            </li>
            <li class="ms-3">
                <img src="{{ asset('assets/img/gmail.png') }}" alt="Email" style="height: 20px;">
            </li>
        </ul>
    </footer> --}}


    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

    <script>
        @yield('scripts')
    </script>


</body>

</html>
