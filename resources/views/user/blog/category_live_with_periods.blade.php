@extends("layouts.admin")

@section('title', "Blog catégorie")

@section('navbar')
    @parent
@stop

@section('content')
    <div class="home-desktop" style="padding: 0; margin-top: 35px">
        <div class="cat-img img-vivre-regles">
            <div class="cat-texte"><strong>Vivre avec ces règles</strong></div>
        </div>
    </div>
    <div class="home-mobile">
        <div class="cat-texte-mobile"><strong>Vivre avec ces règles</strong></div>
        <div class="cat-img img-vivre-regles"></div>
    </div>

    <div class="cat-articles">
        <a href="/blog/article/7">
            <div class="cat-row">
                <div class="cat-col-2 cat-article-img-sport cat-article-img"></div>
                <div class="cat-col-8">
                    <div class="cat-categorie-article-title">Vivre avec ces règles</div>
                    <div class="cat-article-title">
                        <strong>Le sport et les règles : comment bien s’entraîner pendant cette période ?</strong>
                    </div>
                    <div class="cat-article-description">Vous pratiquez une activité sportive régulièrement et vous
                        redoutez l’arrivée de vos règles ? Cet article est fait pour vous ! Nous allons vous donner des
                        astuces pour que vous puissiez continuer à pratiquer votre sport préféré tout en gérant au mieux
                        vos règles. Que ce soit pour le running, le yoga ou la natation, découvrez comment adapter votre
                        entraînement à votre cycle menstruel.
                    </div>
                    <div class="cat-article-date">Le 05 décembre 2022</div>
                </div>
            </div>

            <div class="card category-card" style="width: 18rem;">
                <img class="card-img-top" src="{{ url("/images/blog/sport.jpg") }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Vivre avec ces règles</h5>
                    <h5 class="card-title-category">Le sport et les règles : comment bien s’entraîner pendant cette
                        période ?</h5>
                    <p class="card-text-category">Vous pratiquez une activité sportive régulièrement et vous redoutez
                        l’arrivée de vos règles ? Cet article est fait pour vous ! Nous allons vous donner des astuces
                        pour que vous puissiez continuer à pratiquer votre sport préféré tout en gérant au mieux vos
                        règles. Que ce soit pour le running, le yoga ou la natation, découvrez comment adapter votre
                        entraînement à votre cycle menstruel..</p>
                    <div class="card-date">Le 05 décembre 2022</div>
                </div>
            </div>
        </a>

        <a href="/blog/article/8">
            <div class="cat-row">
                <div class="cat-col-2 cat-article-img-voyage cat-article-img"></div>
                <div class="cat-col-8">
                    <div class="cat-categorie-article-title">Vivre avec ces règles</div>
                    <div class="cat-article-title">
                        <strong>Voyager pendant les règles : comment s’organiser pour un voyage serein</strong>
                    </div>
                    <div class="cat-article-description">Les voyages sont souvent source de stress, mais encore plus
                        lorsqu’on doit gérer ses règles en même temps. Dans cet article, nous allons vous donner des
                        conseils pratiques pour que vous puissiez voyager sereinement pendant cette période. Que vous
                        partiez en avion, en train ou en voiture, découvrez comment vous préparer au mieux pour éviter
                        tout désagrément.
                    </div>
                    <div class="cat-article-date">Le 05 décembre 2022</div>
                </div>
            </div>

            <div class="card category-card" style="width: 18rem;">
                <img class="card-img-top" src="{{ url("/images/blog/voyage.jpg") }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Vivre avec ces règles</h5>
                    <h5 class="card-title-category">Voyager pendant les règles : comment s’organiser pour un voyage
                        serein</h5>
                    <p class="card-text-category">Les voyages sont souvent source de stress, mais encore plus lorsqu’on
                        doit gérer ses règles en même temps. Dans cet article, nous allons vous donner des conseils
                        pratiques pour que vous puissiez voyager sereinement pendant cette période. Que vous partiez en
                        avion, en train ou en voiture, découvrez comment vous préparer au mieux pour éviter tout
                        désagrément.</p>
                    <div class="card-date">Le 05 décembre 2022</div>
                </div>
            </div>
        </a>

        <a href="/blog/article/9">
            <div class="cat-row">
                <div class="cat-col-2 cat-article-img-regles-travail cat-article-img"></div>
                <div class="cat-col-8">
                    <div class="cat-categorie-article-title">Vivre avec ces règles</div>
                    <div class="cat-article-title">
                        <strong>Les règles et le travail : comment mieux gérer son cycle menstruel au bureau</strong>
                    </div>
                    <div class="cat-article-description">Vous avez du mal à gérer votre cycle menstruel au travail ?
                        Entre les douleurs, la fatigue et les contraintes professionnelles, ce n’est pas toujours
                        facile. Dans cet article, nous allons vous donner des astuces pour mieux vivre cette période au
                        bureau. Découvrez comment adapter votre emploi du temps, comment choisir les bonnes protections
                        et comment gérer les éventuels désagréments de manière discrète.
                    </div>
                    <div class="cat-article-date">Le 05 décembre 2022</div>
                </div>
            </div>

            <div class="card category-card" style="width: 18rem;">
                <img class="card-img-top" src="{{ url("/images/blog/regles_travail.jpg") }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Vivre avec ces règles</h5>
                    <h5 class="card-title-category">Les règles et le travail : comment mieux gérer son cycle menstruel
                        au bureau</h5>
                    <p class="card-text-category">Vous avez du mal à gérer votre cycle menstruel au travail ? Entre les
                        douleurs, la fatigue et les contraintes professionnelles, ce n’est pas toujours facile. Dans cet
                        article, nous allons vous donner des astuces pour mieux vivre cette période au bureau. Découvrez
                        comment adapter votre emploi du temps, comment choisir les bonnes protections et comment gérer
                        les éventuels désagréments de manière discrète.</p>
                    <div class="card-date">Le 05 décembre 2022</div>
                </div>
            </div>
        </a>

        <div class="cat-pagination">
            <div class="btn-group me-2" role="group" aria-label="First group">
                <a type="button" class="btn cat-pagination-btn"><strong>1</strong></a>
                <a type="button" class="btn cat-pagination-btn-activate"><strong>2</strong></a>
                <a type="button" class="btn cat-pagination-btn"><strong>3</strong></a>
                <a type="button" class="btn cat-pagination-btn"><strong>4</strong></a>
            </div>
        </div>
    </div>
@stop

