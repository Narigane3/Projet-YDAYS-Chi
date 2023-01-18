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
    <div class="container" id="register_page">
        <div class="m-3 d-flex flex-column bd-highlight justify-content-center">
            <div class="mb-3 d-flex justify-content-center">
                <div>
                    <h1>Bienvenu dans l'aventure Chi @{{last_name}}</h1>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <form method="POST" action="/register">
                    <div class="row mb-3">
                        <div class="col-6">
                            <label for="register-last-name">Prénom :</label>
                            <input v-model="last_name" class="form-control" name="lastname" type="text" placeholder="Prénom"
                                   id="register-last-name" value="{{old('lastname')}}">
                        </div>
                        <div class="col-6">
                            <label for="register-first-name">Nom :</label>
                            <input  class="form-control" name="firstname" type="text" placeholder="Nom"
                                   id="register-first-name" value="{{old('firstname')}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-6">
                            <label for="phone">Numéro de téléphone (Optionnel):</label>
                            <input class="form-control" name="phone" type="tel" placeholder="06 00 00 00 00" id="phone"
                            value="{{old('tel')}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="register-email">Adresse mail :</label>
                            <input class="form-control" name="email" type="email" placeholder="mon.mail@exemple.fr"
                                   id="register-email" value="{{old('email')}}">
                        </div>
                    </div>
                    <div class="alert-info m-3 p-3">
                        L'ensembles des information si dessus ne seront pas rendu public
                    </div>
                    <hr>
                    <div class="row mb-3">
                        <div class="col-6">
                            <label for="username">Pseudonym :</label>
                            <input class="form-control" name="username" type="text" placeholder="xXPizzaMasterClassXx"
                                   id="username" value="{{old('username')}}">
                        </div>
                        <div class="col-12 mt-3">
                            <p>Le pseudonym sera visible par l'ensemble des utilisateur</p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-6">
                            <label for="register-password">Mots de passe :</label>
                            <input class="form-control" name="password" type="password" placeholder="Mots de passe"
                                   id="register-password">
                        </div>
                        <div class="col-6 mb-3">
                            <label for="register-password">Confirmation :</label>
                            <input class="form-control" name="password_confirmation" type="password"
                                   placeholder="Mot de passe" id="register-password">
                        </div>
                    </div>
                    <div class="form-check mb-3">
                        <input v-model="approved" type="checkbox" name="" class="form-check-input" id="data_check_auth">
                        <label for="data_check_auth" class="form-check-label">consentez vous a nous laisser exploiter
                            ces données conformément à notre <a href="#">politique de confidentialité</a></label>

                        <div v-if="approved === false" class="alert-danger m-3 p-3"> Mercie de bien vouloir consentir a
                            notre politique de confidentialité pour continuer
                        </div>
                    </div>
                    @csrf
                    <div class="d-flex justify-content-center">
                        <button :disabled="approved === false" class="btn btn-primary">Crée mon compte</button>
                    </div>
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
{{-- Footer Parte --}}
@section("footer")
@stop
