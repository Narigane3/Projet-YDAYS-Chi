<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    {{-- Not index this page form Google --}}
    <meta name="robot" content="noindex">

    <title>Chi - @yield('title')</title>

    <link rel="stylesheet" href="https://use.typekit.net/rzo4cyf.css">

    @vite('resources/js/app.js')
    @section('head')
    @show
</head>

<body>
<div class="wrapper">
    @section('navbar')
        <nav id="nav_admin">

            <ul class="nav justify-content-start pt-1 pb-1 ps-2 ps-md-3">
                <li class="nav-item">
                    <a type="button" data-bs-toggle="offcanvas" data-bs-target="#admin_menu"
                       aria-controls="offcanvasRight">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                             class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                  d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                    </a>
                </li>
            </ul>

        </nav>
        <!-- Sidebar -->
        <div class="d-flex flex-column flex-shrink-0 p-3 offcanvas offcanvas-start" id="admin_menu"
             style="width: 280px;">
            <a href="/" class="d-flex align-items-center mb-md-0 link-dark text-decoration-none">
                <img src="{{url("/images/logo/logo-chi.svg")}}" alt="logo chi" id="menu_logo">
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="/admin/" class="nav-link link-dark" aria-current="page">
                        <i class="bi bi-house-door-fill me-2"></i>
                        Accueil
                    </a>
                </li>

                @auth()
                    @if( auth()->user()['role_id'] == 3|| auth()->user()['role_id'] == 4)
                        <li>
                            <hr>
                        </li>

                        <li>
                            <a href="/admin/users/" class="nav-link link-dark">
                                <i class="bi bi-people-fill me-2"></i>
                                Gestion des utilisateurs
                            </a>
                        </li>
                    @endif
                @endauth
            </ul>
            <hr>
            @auth()
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle"
                   id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi-person-circle rounded-circle me-2" style="font-size: 30px"></i>
                    <strong>{{ auth()->user()['username'] }}</strong>
                </a>
                <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">

                    <li>
                        <form @submit.prevent="logout" action="/logout" method="POST" ref="form" class="d-inline">
                            @csrf
                            <input type="hidden" value="{{ route('logout') }}">
                            <input type="submit" class="dropdown-item" style="background: none" value="Se déconnecter">
                        </form>
                    </li>
                </ul>
            </div>
            @endauth
        </div>
    @show
    <!-- Page Content -->
    <div id="content">
        @yield('content')
    </div>

</div>

</body>


</html>


