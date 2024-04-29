<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>

    <link rel="shortcut icon" href="{{ asset('assets/img/logoBlack.png') }}">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap5.3/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/all.min.css') }}">

    <style>
        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            /* background-color: #333;
            color: #fff;
            padding: 20px; */
        }
    </style>
    @yield('css')

</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                    <i class="fa fa-bars"></i>
                    <span class="sr-only">Toggle Menu</span>
                </button>
            </div>
            <div class="p-4">
                <h1><a href="#" class="logo"><img src="{{ asset('assets/img/logoielio.png') }}"
                            alt="Iélio Photography logo" style="height: 50px;"> <span>Iélio Martins
                            PhotograPhy</span></a></h1>
                <ul class="list-unstyled components mb-5">
                    <li class="active">
                        <a href="#"><span class="fa fa-home mr-3"></span> Home</a>
                    </li>
                    <li>
                        <a href="{{ url('/client') }}"><span class="fa fa-user mr-3"></span> Clientes</a>
                    </li>
                    <li>
                        <a href="#"><span class="fa fa-briefcase mr-3"></span> Fornecedores</a>
                    </li>
                    {{-- <li>
                        <a href="#"><span class="fa fa-sticky-note mr-3"></span> </a>
                    </li> --}}
                    <li>
                        <a href="#"><span class="fa fa-suitcase mr-3"></span> Vendas</a>
                    </li>
                    <li>
                        <a href="#"><span class="fa fa-cogs mr-3"></span> Configurações</a>
                    </li>
                    {{-- <li>
                        <a href="#"><span class="fa fa-paper-plane mr-3"></span> Contacts</a>
                    </li> --}}
                </ul>



                <footer>
                    <span class="mb-3 mb-md-0 small" style="color: #7B5123">&copy; {{ date('Y') }} {{ config('app.name') }}.
                        <p>@lang(' All rights reserved.')</p>
                    </span>
                </footer>



            </div>
        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
            @yield('content')
            {{-- <h2 class="mb-4">Sidebar #05</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.</p> --}}
        </div>
    </div>



    <script src="{{ asset('plugins/bootstrap5.3/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/popper.js') }}"></script> --}}
    <script src="{{ asset('assets/js/main.js') }}"></script>


    @yield('scripts')



</body>

</html>
