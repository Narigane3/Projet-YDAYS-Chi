{{-- Callback layout master  --}}
@extends('layouts.master')
{{-- Give more info into head --}}
@section('head')
    {{-- Give more info into head --}}
    {{-- Not index this page form Google --}}
    <meta name="robot" content="noindex">
@stop


@section('title', 'Création de compte')

@section('navbar')
    {{-- @parent--}}
    {{-- call nav bar on this page --}}
@stop

@section('content')
    <div class="overflow-hidden">
        <!-- Logo -->
        <div class="col-3 mx-auto mt-lg-5 ms-lg-5 text-center d-lg-none" id="block_auth_logo">
            <a href="/"><img src="{{url('images/logo/logo_chi_fond.jpg')}}" alt="logo chi" id="auth_logo"></a>
        </div>
        <div class="col-3 mx-auto mt-lg-5 ms-lg-5 text-center d-none d-lg-block" id="block_auth_logo">
            <a href="/"><img src="{{url('images/logo/logo-chi.svg')}}" alt="logo chi" id="auth_logo"
                             class="register"></a>
        </div>
        <section class="d-flex flex-column flex-lg-row-reverse">
            {{-- Section Login--}}
            <div class="col col-lg-7 d-flex d-lg-block flex-column block">

                <div class="position-relative top-50 start-50 translate-middle col col-lg-6 text-center"
                     id="block_form_auth">
                    <form method="POST" action="/register">
                        <h1 class="fw-bolder mb-5 fw-normal">Inscription</h1>
                        @csrf
                        <div class="form-floating mb-3">
                            <input class="form-control" name="firstname" type="text" placeholder="Nom"
                                   id="register-first-name" value="{{old('firstname')}}" required>
                            <label for="login_email">Nom (Obligatoire)</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="register-last-name" name="lastname"
                                   placeholder="Prénom" value="{{old('lastname')}}" required>
                            <label for="register-last-name">Prénom (Obligatoire)</label>
                        </div>

                        <div class="form-floating ">
                            <input class="form-control" name="username" type="text"
                                   placeholder="xXPizzaMasterClassXx"
                                   id="register-username" value="{{old('username')}}" required>
                            <label for="register-username">Pseudonym (Obligatoire)</label>
                        </div>
                        <div class="col-12 mb-3">
                            <span class="fw-light"> Le pseudonym sera visible par l'ensemble des utilisateur</span>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="login_email" name="email"
                                   placeholder="nom@chi.com" value="{{old('email')}}" required>
                            <label for="login_email">Email(Obligatoire)</label>
                        </div>
                        <hr>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="login_password"
                                   name="password" placeholder="Password">
                            <label for="login_password">Mot de passe (Obligatoire)</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" name="password_confirmation"
                            placeholder="Mot de passe" id="register-password">
                            <label for="login_password">Confirmation MP (Obligatoire)</label>
                        </div>

                        <div class="checkbox mb-3">
                            <label>
                                <input type="checkbox" value="1" id="rgpd" required>
                                Consentez vous a notre <a href="/politique-de-confidentialite" target="_blank" class="rgpd_acceptation">politique
                                    de confidentialité</a>
                            </label>
                        </div>

                        <div class="d-flex justify-content-center">
                            <div class="col col-md-8">
                                <button class="w-100 btn btn-lg btn-primary login" type="submit">Crée mon compte
                                </button>
                            </div>
                        </div>

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
                        <h2 class="fw-bolder mb-3 fw-normal mb-5">Tu es de retour ?</h2>
                        <div class="fw-light my-5">
                            <p>Reviens te connecter avec tes</p>
                            <p>données</p>
                        </div>
                        <div class="col-auto">
                            <a href="/login" class="btn btn-outline-primary btn_switch">Se connecter</a>
                        </div>

                    </div>
                </div>
            </div>
            {{-- Section Register--}}
            <div class="col d-none d-lg-block col-lg-5 btn_menu block">
                <div class="position-relative top-50 start-50 translate-middle col-6 text-center"
                     id="block_auth_register">
                    <h2 class="fw-bolder mb-3 fw-normal mb-5">Tu es de retour ?</h2>
                    <div class="fw-light my-5">
                        <p>Reviens te connecter avec tes</p>
                        <p>données</p>
                    </div>
                    <div class="col-auto">
                        <a href="/login" class="btn btn-outline-primary btn_switch">Se connecter</a>
                    </div>

                </div>
                <div id="register-login-illustration" class="register">
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

