@extends("layouts.admin")

@section('title', "Blog")

@section('navbar')
    @parent
@stop

@section('content')
    <div class="home-desktop">
        <h1 class="page-title-desktop"><strong>BLOG</strong></h1>
        <img src="{{ url("/images/blog/home.jpg") }}" alt="Photo de la home page" style="max-width: 100%">
    </div>
    <div class="home-mobile">
        <h1 class="page-title-mobile"><strong>BLOG</strong></h1>
        <img src="{{ url("/images/blog/home.jpg") }}" alt="Photo de la home page" style="max-width: 100%">
    </div>


    <div class="categories-content">
        <h2 class="categories-title"><strong>Catégories</strong></h2>

        <div class="categories">
            <div class="card-full-img img-symptomes-menstruels img-size">
                <h3 class="title-card-full-img">Symptômes menstruels</h3>
                <span class="badge rounded-pill text-bg-primary badge-voir">Voir</span>
            </div>

            <div class="card-full-img img-protection img-size">
                <h3 class="title-card-full-img">Les protections</h3>
                <span class="badge rounded-pill text-bg-primary badge-voir">Voir</span>
            </div>

            <div class="card-full-img img-vivre-regles img-size">
                <h3 class="title-card-full-img">Vivre avec ces règles</h3>
                <span class="badge rounded-pill text-bg-primary badge-voir">Voir</span>
            </div>
        </div>

    </div>
@stop

