@extends("layouts.admin")

@section('title', "Blog")

@section('navbar')
    @parent
@stop

@section('content')
    <div class="container">

        <div class="home">
            <h1>BLOG</h1>
            <img src="{{ url("/images/blog/home.jpg") }}" alt="Photo de la home page" style="max-width: 864px">
        </div>

        <div class="categories">
            <h1>Catégories</h1>
        </div>

        <div class="articles">
            <h1>Nos derniers articles</h1>
            @foreach($articles as $article)
                @include("_part.card", $article)
            @endforeach
        </div>
    </div>
@stop

