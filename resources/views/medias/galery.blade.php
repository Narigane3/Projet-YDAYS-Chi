@extends('layouts.master')

@section('title', 'Galerie photos')

@section('navbar')
    @parent
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3">
                <form action="/createMedia" method="post" enctype="multipart/form-data" id="mediaForm">
                    @csrf
                    <input type="file" ref="imageInput" name="medias">
                    <h6>
                        <label for="basic-url">Alt</label>
                    </h6>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="createAlt">
                    </div>

                    <button type="submit" class="btn btn-success">Enregistrer</button>
                </form>

            </div>
            <div class="col-9">
                @foreach ($medias as $media)
                    <a href="/galery/{{$media["id"]}}">
                        <img src="{{url($media["path"])}}" alt="{{$media["alt"]}}">
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@stop

@section("footer")
@stop
