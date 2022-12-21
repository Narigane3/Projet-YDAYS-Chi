@extends('layouts.master')

@section('title', 'Galerie photos')

@section('navbar')
    @parent
@stop

@section('content')
    <div class="container">
        @foreach ($medias as $media)
            <a href="/galery/{{$media["id"]}}">
                <img src="{{url($media["path"])}}" alt="{{$media["alt"]}}">
            </a>
        @endforeach
    </div>
@stop

@section("footer")
@stop
