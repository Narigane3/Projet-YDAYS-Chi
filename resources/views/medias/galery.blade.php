@extends('layouts.master')

@section('title', 'Galerie photos')

@section('navbar')
    @parent
@stop

@section('content')

    <div class="mt-5">
        <form action="/createMedia" method="post" enctype="multipart/form-data" id="mediaForm">
            @csrf
            <input class="form-control" type="file" ref="imageInput" name="medias">
            <input type="text" class="form-control" placeholder="Alt de l'image importée"
                   aria-label="Alt de l'image importée" name="createAlt">


            <button type="submit" class="btn btn-success">Enregistrer</button>
        </form>


        @foreach ($medias as $media)
            <a href="/galery/{{$media["id"]}}">
                @if (file_exists(public_path($media["path"])))
                    <img src="{{url($media["path"])}}" alt="{{$media["alt"]}}">
                @else
                    <img src="{{url("/medias/default.jpg")}}" alt="{{$media["alt"]}}">
                @endif
            </a>
        @endforeach
    </div>
@stop

@section("footer")
@stop
