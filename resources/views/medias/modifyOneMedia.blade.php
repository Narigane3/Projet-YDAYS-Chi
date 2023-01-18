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
                <img class="media-modify" src="{{url($media["path"])}}" alt="{{$media["alt"]}}">
            </div>
            <div class="col">
                <div class="row align-self-center">
                    <form method="post" action="/modifyMedia">
                        @csrf
                        <input type="hidden" value="{{$media["id"]}}" name="mediaId">

                        <h5>
                            <label for="basic-url">Titre</label>
                        </h5>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" value="{{$media["title"]}}" name="modifyMediaTitle">
                        </div>

                        <h5>
                            <label for="basic-url">alt</label>
                        </h5>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="modifyMediaAlt" value="{{$media["alt"]}}">
                        </div>

                        <button type="submit" class="btn btn-success">Modifier</button>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </form>
                    <button onclick="location.href = '/deleteMedia/' + {{$media["id"]}};" class="btn btn-danger">Supprimer</button>
                </div>
            </div>
        </div>
    </div>
@stop

@section("footer")
@stop
