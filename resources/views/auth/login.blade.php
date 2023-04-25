{{-- Callback layout master  --}}
@extends('layouts.master')
{{-- Give more info into head --}}
@section('head')
    {{-- Give more info into head --}}
    {{-- Not index this page form Google --}}
    <meta name="robot" content="noindex">
@stop


@section('title', 'Authentification')

@section('navbar')
    {{-- @parent--}}
    {{-- call nav bar on this page --}}
@stop

@section('content')
    <div class="overflow-hidden">
        <!-- Logo -->
        <div class="col-3 mx-auto mt-lg-5 ms-lg-5 text-center" id="block_auth_logo">
            <a href="/"><img src="{{url('images/logo/logo_chi_fond.jpg')}}" alt="logo chi" id="auth_logo"></a>
        </div>
        <section class="d-flex flex-column flex-lg-row">
            {{-- Section Login--}}
            <div class="col col-lg-7 d-flex d-lg-block flex-column block">

                <div class="position-relative top-50 start-50 translate-middle col col-lg-6 text-center"
                     id="block_form_auth">
                    <form method="POST" action="/login">
                        <h1 class="fw-bolder mb-5 fw-normal">Connexion</h1>
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="login_email" name="email"
                                   placeholder="nom@chi.com">
                            <label for="login_email">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="login_password"
                                   name="password" placeholder="Password">
                            <label for="login_password">Mot de passe</label>
                        </div>

                        <div class="checkbox mb-3">
                            <label>
                                <input type="checkbox" name="remember" value="remember-me"> Se souvenir de moi
                            </label>
                        </div>

                        <div class="d-flex justify-content-center">
                            <div class="col col-md-8">
                                <button class="w-100 btn btn-lg btn-primary login" type="submit">Se connecter</button>
                            </div>
                        </div>

                        <p class="mt-5 mb-3 text-muted"><a href="#"
                                                           class="fw-bolder text-black-50 text-decoration-underline">Tu
                                as oublié ton mot de passe ?</a></p>
                    </form>
                    {{-- Error handling --}}
                    @if(!$errors->isEmpty())
                        <div class="col d-flex justify-content-center">
                            <div class="alert alert-danger col">
                                <ul class="list-unstyled">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif
                </div>


                <div class="d-block d-lg-none btn_menu col text-center mobile_switch_content">
                    <div class="position-relative top-50 start-50 translate-middle col-6 text-center">
                        <h2 class="fw-bolder mb-3 fw-normal mb-5">Rejoins nous !</h2>
                        <div class="fw-light my-5">
                            <p>Entre tes données</p>
                            <p>et démarre ta journée avec CHI !</p>
                        </div>
                        <div class="col-auto">
                            <button class="btn btn-outline-primary btn_switch">S'inscrire</button>
                        </div>

                    </div>
                </div>
            </div>
            {{-- Section Register--}}
            <div class="col d-none d-lg-block col-lg-5 btn_menu block">
                <div class="position-relative top-50 start-50 translate-middle col-6 text-center"
                     id="block_auth_register">
                    <h2 class="fw-bolder mb-3 fw-normal mb-5">Rejoins nous !</h2>
                    <div class="fw-light my-5">
                        <p>Entre tes données</p>
                        <p>et démarre ta journée avec CHI !</p>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-outline-primary btn_switch">S'inscrire</button>
                    </div>

                </div>
                <div id="illustration_bottom_content" class="overflow-none d-lg-block d-none">
                </div>
            </div>
        </section>
    </div>
@stop
@section('footer')
    @parent
    <style>
        body {
            margin-top: 0;
        }
    </style>
@stop

