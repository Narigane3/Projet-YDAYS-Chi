@extends("layouts.admin")

@section('title', "Blog catégorie")

@section('navbar')
    @parent
@stop

@section('content')
    <div class="home-desktop" style="padding: 0; margin-top: 35px">
        <div class="cat-img img-symptomes-menstruels">
            <div class="cat-texte"><strong>Symptômes menstruels</strong></div>
        </div>
    </div>
    <div class="home-mobile">
        <div class="cat-texte-mobile"><strong>Symptômes menstruels</strong></div>
        <div class="cat-img img-symptomes-menstruels"></div>
    </div>

    <div class="cat-articles">
        <a href="/blog/article/1">
            <div class="cat-row">
                <div class="cat-col-2 cat-article-img-crampe-menstruelle cat-article-img"></div>
                <div class="cat-col-8">
                    <div class="cat-categorie-article-title">Symptômes menstruels</div>
                    <div class="cat-article-title">
                        <strong>Comment soulager les crampes menstruelles : astuces et remèdes naturels</strong>
                    </div>
                    <div class="cat-article-description">Vous êtes fatigué(e)s, irritable(s), ballonné(e)s, et vous
                        ressentez des douleurs dans le bas du ventre ? Pas de panique, ce sont des symptômes courrants
                        pendant vos règles ! Dans cet article, nous allons explorer les différentes causes de ses
                        symptômes et vous donner des conseils pratiques pour les soulager. Ne laissez plus vos règles
                        gâcher votre humeur et votre bien-être !
                    </div>
                    <div class="cat-article-date">Le 05 décembre 2022</div>
                </div>
            </div>

            <div class="card category-card" style="width: 18rem;">
                <img class="card-img-top" src="{{ url("/images/blog/crampe_menstruelle.jpg") }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Symptômes menstruels</h5>
                    <h5 class="card-title-category">Comment soulager les crampes menstruelles : astuces et remèdes
                        naturels</h5>
                    <p class="card-text-category">Vous êtes fatigué(e)s, irritable(s), ballonné(e)s, et vous
                        ressentez des douleurs dans le bas du ventre ? Pas de panique, ce sont des symptômes courrants
                        pendant vos règles ! Dans cet article, nous allons explorer les différentes causes de ses
                        symptômes et vous donner des conseils pratiques pour les soulager. Ne laissez plus vos règles
                        gâcher votre humeur et votre bien-être !</p>
                    <div class="card-date">Le 05 décembre 2022</div>
                </div>
            </div>
        </a>

        <a href="/blog/article/2">
            <div class="cat-row">
                <div class="cat-col-2 cat-article-img-saignement cat-article-img"></div>
                <div class="cat-col-8">
                    <div class="cat-categorie-article-title">Symptômes menstruels</div>
                    <div class="cat-article-title">
                        <strong>Les saignements abondants pendant les règles : que faire ?</strong>
                    </div>
                    <div class="cat-article-description">Les saignements abondants pendant les règles peuvent être un
                        véritable casse-tête pour les personnes qui en souffrent. Comment faire face à ces pertes de
                        sang importantes et répétitives ? Dans cet article, nous allons exmplorer les différentes causes
                        de saignements abondants, les symptômes à surveiller et les options de traitement disponible. Si
                        vous êtes concerné(e)s, ne manquez pas ces conseils pratique pour mieux vivre vos menstruations
                        !
                    </div>
                    <div class="cat-article-date">Le 05 décembre 2022</div>
                </div>
            </div>

            <div class="card category-card" style="width: 18rem;">
                <img class="card-img-top" src="{{ url("/images/blog/saignement.jpg") }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Symptômes menstruels</h5>
                    <h5 class="card-title-category">Les saignements abondants pendant les règles : que faire ?</h5>
                    <p class="card-text-category">Les saignements abondants pendant les règles peuvent être un
                        véritable casse-tête pour les personnes qui en souffrent. Comment faire face à ces pertes de
                        sang importantes et répétitives ? Dans cet article, nous allons exmplorer les différentes causes
                        de saignements abondants, les symptômes à surveiller et les options de traitement disponible. Si
                        vous êtes concerné(e)s, ne manquez pas ces conseils pratique pour mieux vivre vos menstruations
                        !</p>
                    <div class="card-date">Le 05 décembre 2022</div>
                </div>
            </div>
        </a>

        <a href="/blog/article/3">
            <div class="cat-row">
                <div class="cat-col-2 cat-article-img-saut-humeur cat-article-img"></div>
                <div class="cat-col-8">
                    <div class="cat-categorie-article-title">Symptômes menstruels</div>
                    <div class="cat-article-title">
                        <strong>Comment prévenir et gérer les sauts d'humeur pendant les règles ?</strong>
                    </div>
                    <div class="cat-article-description">Les sauts d'humeur pendant les règles peuvent être difficiles à
                        gérer, mais il existe des moyens efficaces de prévenir ett de gérer ces changements émotionnels.
                        Dans cet article, nous allons explorer les différentes causes des sautes d'humeur pendant les
                        règles et comment les prévenir. Vous découvrirez également des trechniques pour mieux gérer vos
                        émotions, comme la pratique de la méditation, l'exercice physique, l'alimentation saine et les
                        techniques de relaxation. Que vous ayez des sautes d'humeur légères ou sévères, vous trouverez
                        des conseils pratiques pour vous aider à gérer vos émotions et à vivre vos règles plus
                        sereinement.
                    </div>
                    <div class="cat-article-date">Le 05 décembre 2022</div>
                </div>
            </div>

            <div class="card category-card" style="width: 18rem;">
                <img class="card-img-top" src="{{ url("/images/blog/saut_humeur.jpg") }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Symptômes menstruels</h5>
                    <h5 class="card-title-category">Comment prévenir et gérer les sauts d'humeur pendant les règles
                        ?</h5>
                    <p class="card-text-category">Les sauts d'humeur pendant les règles peuvent être difficiles à
                        gérer, mais il existe des moyens efficaces de prévenir ett de gérer ces changements émotionnels.
                        Dans cet article, nous allons explorer les différentes causes des sautes d'humeur pendant les
                        règles et comment les prévenir. Vous découvrirez également des trechniques pour mieux gérer vos
                        émotions, comme la pratique de la méditation, l'exercice physique, l'alimentation saine et les
                        techniques de relaxation. Que vous ayez des sautes d'humeur légères ou sévères, vous trouverez
                        des conseils pratiques pour vous aider à gérer vos émotions et à vivre vos règles plus
                        sereinement.</p>
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

