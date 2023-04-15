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
            <a href="/blog/category/1">
                <div class="card-full-img img-symptomes-menstruels img-size">
                    <h3 class="title-card-full-img">Symptômes menstruels</h3>
                    <span class="badge rounded-pill text-bg-primary badge-voir">Voir</span>
                </div>
            </a>

            <a href="/blog/category/2">
                <div class="card-full-img img-protection img-size">
                    <h3 class="title-card-full-img">Les protections</h3>
                    <span class="badge rounded-pill text-bg-primary badge-voir">Voir</span>
                </div>
            </a>

            <a href="/blog/category/3">
                <div class="card-full-img img-vivre-regles img-size">
                    <h3 class="title-card-full-img">Vivre avec ces règles</h3>
                    <span class="badge rounded-pill text-bg-primary badge-voir">Voir</span>
                </div>
            </a>
        </div>
    </div>

    <div class="articles-content">
        <h2 class="articles-title"><strong>Nos derniers articles</strong></h2>

        <div class="articles">
            <a href="/blog/article/1">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ url("/images/blog/crampe_menstruelle.jpg") }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Symptômes menstruels</h5>
                        <p class="card-text" style="color: black">Comment soulager les crampes menstruelles : astuces et remèdes naturels</p>
                        <div class="card-date">Le 05 décembre 2022</div>
                    </div>
                </div>
            </a>

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ url("/images/blog/coupe_menstruelle.jpg") }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Les protections</h5>
                    <p class="card-text">La coupe menstruelle : comment l'utiliser et en prendre soin ?</p>
                    <div class="card-date">Le 05 décembre 2022</div>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ url("/images/blog/sport.jpg") }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Vivre avec ces règles</h5>
                    <p class="card-text">Le sport et les règles : comment bien s'entraîner pendant cette période ?</p>
                    <div class="card-date">Le 05 décembre 2022</div>
                </div>
            </div>
        </div>
    </div>
@stop

