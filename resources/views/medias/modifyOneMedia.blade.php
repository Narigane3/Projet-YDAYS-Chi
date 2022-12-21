@extends('layouts.master')

@section('title', 'Modifier une photo')

@section('navbar')
    @parent
@stop

@section('content')
    <div class="container">
        <h1>Modification de la photo: {{$media["title"]}}</h1>

        <div class="row">
            <div class="col">
                <img src="{{url($media["path"])}}" alt="{{$media["alt"]}}">
            </div>
        </div>

        <div class="row align-self-center">
            <button type="button" class="btn btn-danger">Danger</button>
        </div>
    </div>
@stop

@section("footer")
@stop
