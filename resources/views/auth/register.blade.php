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
                            <label for="register-first-name">Prénom :</label>
                            <input class="form-control" name="firstname" type="text" placeholder="Prénom" id="register-first-name">
                        </div>
                        <div class="col-6">
                            <label for="register-last-name">Nom :</label>
                            <input class="form-control" name="lastname" type="text" placeholder="Nom" id="register-last-name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-6">
                            <label for="phone">Numéro de téléphone (Optionnel):</label>
                            <input class="form-control" name="phone" type="tel" placeholder="06 00 00 00 00" id="phone">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="register-email">Adresse mail :</label>
                            <input class="form-control" name="email" type="email" placeholder="mon.mail@exemple.fr" id="register-email">
                        </div>
                    </div>
                    <div>
                        <p>L'ensembles des information si dessus ne seront pas rendu public</p>
                    </div>
                    <hr>
                    <div class="row mb-3">
                        <div class="col-6">
                            <label for="username">Pseudonym :</label>
                            <input class="form-control" name="username" type="text" placeholder="xXPizzaMasterClassXx" id="username">
                        </div>
                        <div class="col-12 mt-3">
                            <p>Le pseudonym sera visible par l'ensemble des utilisateur</p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-6">
                            <label for="register-password">Mots de passe :</label>
                            <input class="form-control" name="password" type="password" placeholder="Mots de passe" id="register-password">
                        </div>
                        <div class="col-6">
                            <label for="register-password">Confirmation :</label>
                            <input class="form-control" name="password_confirmation" type="password" placeholder="Mot de passe" id="register-password">
                        </div>
                    </div>
                    @csrf
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
