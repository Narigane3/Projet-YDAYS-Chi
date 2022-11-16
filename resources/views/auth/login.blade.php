{{-- Callback layout master  --}}
@extends('layouts.master')
{{-- Give more info into head --}}
@section('head')
    {{-- Give more info into head --}}
    {{-- Not index this page form Google --}}
    <meta name="robot" content="noindex">
@stop


@section('title', 'Page de connection')

@section('navbar')
    @parent
    {{-- call nav bar on this page --}}
@stop
@section('content')
    <div class="container">
        <div class="m-3 d-flex flex-column bd-highlight justify-content-center">
            <div class="mb-3 d-flex justify-content-center">
                <div>
                    <h1>Page de Connection</h1>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <form method="POST" action="/login">
                    <div class="mb-3">
                        @csrf
                        <label for="email" class="form-label">Identifiant (Adresse email)</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
                    </div>
                    <div class="mb-3">
                        @csrf
                        <label for="password" class="form-label">Mots de passe</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" name="remember" class="form-check-input" id="check-me">
                        <label class="form-check-label" for="check-me">Se souvenir de moi</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Connection</button>
                </form>
            </div>
            {{-- Error handling --}}
            @if(!$errors->isEmpty())
                <div class="m-3 d-flex justify-content-center">
                    <div class="alert alert-danger col-6">
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

