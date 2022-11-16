{{-- Callback layout master  --}}
@extends('layouts.master')

{{-- Give more info into head --}}
@section('head')
    {{-- Give more info into head --}}
    {{-- Not index this page form Google --}}
    <meta name="robot" content="noindex">
@stop


@section('title', 'Page d\'inscription')

@section('navbar')
    @parent
    {{-- call nav bar on this page --}}
@stop
@section('content')
    <div class="container">
        <div class="m-3 d-flex flex-column bd-highlight justify-content-center">
            <div class="mb-3 d-flex justify-content-center">
                <div>
                    <h1>Bienvenu dans l'aventure Chi</h1>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <form method="POST" action="/register">
                    <div class="row mb-3">
                        <div class="col-6">
                            @csrf
                            <label for="register-first-name">Prénom :</label>
                            <input class="form-control" name="first-name" type="text" placeholder="Prénom" id="register-first-name">
                        </div>
                        <div class="col-6">
                            @csrf
                            <label for="register-last-name">Nom :</label>
                            <input class="form-control" name="last-name" type="text" placeholder="Nom" id="register-last-name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            @csrf
                            <label for="register-email">Adresse mail:</label>
                            <input class="form-control" name="email" type="email" placeholder="mon.mail@exemple.fr" id="register-email">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-6">
                            @csrf
                            <label for="register-password">Mots de passe :</label>
                            <input class="form-control" name="password" type="password" placeholder="Mots de passe" id="register-password">
                        </div>
                        <div class="col-6">
                            @csrf
                            <label for="register-password">Confirmation :</label>
                            <input class="form-control" name="password_confirmation" type="password" placeholder="Confirmation mots de passe" id="register-password">
                        </div>
                    </div>
                    <button class="btn btn-primary">Crée mon compte</button>
                </form>
            </div>
            {{-- Error handling --}}
            @if(!$errors->isEmpty())
                <div class="m-3 d-flex justify-content-center">
                    <div class="alert alert-danger col-6">
                        <h3>Oups..</h3>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li class="">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
        </div>
    </div>

@stop
