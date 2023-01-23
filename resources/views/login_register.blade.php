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
    @parent
    {{-- call nav bar on this page --}}
@stop
@section('content')
    <div class="container">

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
@stop

