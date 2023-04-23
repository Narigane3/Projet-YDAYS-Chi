@extends("layouts.master")

@section('title', "Blog article")

@section('navbar')
    @parent
@stop

@section('content')
    <div class="art-category-title">Symptômes menstruels</div>
    <div class="cat-texte-mobile" style="margin-right: 10%"><strong>Comment prévenir et gérer les sauts d’humeur pendant
            les règles ?</strong></div>
    <div class="cat-img" style="background-image: url('/images/blog/saut_humeur.jpg')"></div>

    <div class="article-content">
        <div class="art-first-part">
            <div class="art-user">
                <div class="art-user-picture"></div>
                <div class="art-user-name">Sarah DUPOND</div>
            </div>
            <div class="art-first-description">
                <p>
                    Les sautes d’humeur pendant les règles peuvent être difficiles à gérer, mais il existe des moyens
                    efficaces de prévenir et de gérer ces changements émotionnels. Dans cet article, nous allons
                    explorer les différentes causes des sautes d’humeur pendant les règles et comment les prévenir. Vous
                    découvrirez également des techniques pour mieux gérer vos émotions, comme la pratique de la
                    méditation, l’exercice physique, l’alimentation saine et les techniques de relaxation. Que vous ayez
                    des sautes d’humeur légères ou sévères, vous trouverez des conseils pratiques pour vous aider à
                    gérer vos émotions et à vivre vos règles plus sereinement.
                </p>
            </div>
        </div>
        <div class="art-second-part">
            <div class="art-second-part-description">
                <div class="art-second-part-title">Causes des sautes d’humeur pendant les règles</div>
                <div class="art-second-part-content">Les sautes d’humeur pendant les règles sont causées par des
                    changements hormonaux dans le corps. Les hormones œstrogènes et progestérone fluctuent tout au long
                    du cycle menstruel et atteignent leur niveau le plus bas juste avant les règles. Cela peut entraîner
                    une baisse de la sérotonine, une substance chimique du cerveau qui régule l'humeur, ce qui peut
                    provoquer des sautes d'humeur et de l'anxiété.
                </div>

                <div class="art-second-part-title">Prévention des sautes d’humeur pendant les règles</div>
                <div class="art-second-part-content">Bien que les sautes d’humeur pendant les règles soient causées par
                    des changements hormonaux naturels, il est possible de les prévenir. L'exercice régulier peut aider
                    à réguler les niveaux d'hormones et à améliorer l'humeur. Une alimentation saine et équilibrée,
                    riche en nutriments, peut également aider à maintenir des niveaux d'hormones stables et à réduire
                    les sautes d'humeur. Éviter les aliments riches en sucre et en gras peut également aider.
                </div>

                <div class="art-second-part-title">Gestion des sautes d’humeur pendant les règles</div>
                <div class="art-second-part-content">Si vous avez des sautes d'humeur pendant vos règles, il existe des
                    techniques efficaces pour les gérer. La méditation et la pratique de la pleine conscience peuvent
                    aider à réduire le stress et l'anxiété, tout en améliorant l'humeur. L'exercice physique, en
                    particulier les activités relaxantes comme le yoga et la natation, peut également aider à gérer les
                    sautes d'humeur. Les techniques de relaxation, comme la respiration profonde et la visualisation,
                    peuvent également aider à réduire le stress et à améliorer l'humeur.
                </div>

                <div class="art-second-part-title">Conclusion</div>
                <div class="art-second-part-content">Les sautes d'humeur pendant les règles peuvent être difficiles à
                    gérer, mais il est possible de prévenir et de gérer ces changements émotionnels. En faisant de
                    l'exercice régulièrement, en adoptant une alimentation saine et équilibrée, en pratiquant la
                    méditation et les techniques de relaxation, vous pouvez réduire les sautes d'humeur et améliorer
                    votre qualité de vie pendant les règles. Que vous ayez des sautes d'humeur légères ou sévères, il
                    est important de prendre soin de vous et de chercher de l'aide si vous en avez besoin.
                </div>
            </div>
            <div
                style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
                <div class="art-second-part-img"></div>
            </div>
        </div>
    </div>

    <div class="art-comments">
        Pas de réfléxion au sujet de "Comment soulager les crampes menstruelles : astuces et remèdes naturels"
    </div>

    <form class="art-form" method="post">
        <div class="art-form-title">Laisser un commentaire au sujet de "Comment soulager les crampes menstruelles :
            astuces et remèdes naturels"
        </div>
        <div class="art-add">
            <textarea class="art-add-content" rows="5" cols="50"></textarea>

            <input type="text" placeholder="Nom*" class="inputed art-add-width-60">
            <input type="email" placeholder="Email*" class="inputed art-add-width-60">

            <div style="display: flex; flex-direction: row; margin: 20px 0">
                <input type="checkbox" id="register_mail-and_name" class="art-add-check">
                <label for="register_mail-and_name">Enregistrer mon nom, mon e-mail pour mon prochain
                    commentaire.</label>
            </div>

            <button type="button" class="btn art-add-btn art-add-width-60">Publier le commentaire</button>
        </div>
    </form>

    <div class="articles-content">
        <h2 class="articles-title"><strong>Nos derniers articles</strong></h2>

        <div class="articles">
            <a href="/blog/article/1">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ url("/images/blog/crampe_menstruelle.jpg") }}"
                         alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Symptômes menstruels</h5>
                        <p class="card-text" style="color: black">Comment soulager les crampes menstruelles : astuces et
                            remèdes naturels</p>
                        <div class="card-date">Le 05 décembre 2022</div>
                    </div>
                </div>
            </a>

            <a href="/blog/article/4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ url("/images/blog/coupe_menstruelle.jpg") }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Les protections</h5>
                        <p class="card-text">Les protections menstruelles : lesquelles choisir  ?</p>
                        <div class="card-date">Le 05 décembre 2022</div>
                    </div>
                </div>
            </a>


            <a href="/blog/article/7">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ url("/images/blog/sport.jpg") }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Vivre avec ces règles</h5>
                        <p class="card-text">Le sport et les règles : comment bien s’entraîner pendant cette période ?</p>
                        <div class="card-date">Le 05 décembre 2022</div>
                    </div>
                </div>
            </a>
        </div>
    </div>
@stop

