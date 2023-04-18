@extends("layouts.admin")

@section('title', "Blog article")

@section('navbar')
    @parent
@stop

@section('content')
    <div class="art-category-title">Les protections</div>
    <div class="cat-texte-mobile" style="margin-right: 10%">
        <strong>Les serviettes hygiéniques lavables : une alternative écologique et économique</strong>
    </div>
    <div class="cat-img" style="background-image: url('/images/blog/serviette.jpg')"></div>

    <div class="article-content">
        <div class="art-first-part">
            <div class="art-user">
                <div class="art-user-picture"></div>
                <div class="art-user-name">Sarah DUPOND</div>
            </div>
            <div class="art-first-description">
                <p>
                    Les serviettes hygiéniques lavables sont de plus en plus populaires auprès des femmes qui cherchent
                    une option écologique et confortable pour gérer leurs menstruations. Contrairement aux serviettes
                    jetables, les serviettes hygiéniques réutilisables sont fabriquées à partir de tissus lavables et
                    durables, ce qui permet de réduire la quantité de déchets générés et de minimiser leur impact sur
                    l'environnement. Dans cet article, nous vous expliquerons ce qu'elles sont, comment les utiliser et
                    les entretenir, ainsi que les avantages écologiques et financiers de cette option.
                </p>
            </div>
        </div>
        <div class="art-second-part">
            <div class="art-second-part-description">
                <div class="art-second-part-title">Qu'est-ce que sont les serviettes hygiéniques lavables ?</div>
                <div class="art-second-part-content">Les serviettes hygiéniques lavables sont des protections
                    menstruelles réutilisables fabriquées à partir de tissus absorbants, tels que le coton biologique,
                    le bambou ou le chanvre, et d'une couche imperméable à base de polyuréthane laminé (PUL) pour éviter
                    les fuites. Elles sont conçues pour être portées à l'intérieur de la culotte, et sont généralement
                    fixées en place à l'aide de boutons pression ou de clips.
                </div>

                <div class="art-second-part-title">Comment les utiliser et les entretenir ?</div>
                <div class="art-second-part-content">
                    Pour utiliser les serviettes hygiéniques lavables, il suffit de les placer à l'intérieur de la
                    culotte, avec la face absorbante contre la peau, et de les fixer en place à l'aide des boutons
                    pression ou des clips. Elles doivent être changées régulièrement, en fonction de votre flux
                    menstruel, et peuvent être lavées à la main ou en machine après utilisation.
                </div>
                <div class="art-second-part-content">
                    Pour les entretenir, il est recommandé de les rincer à l'eau froide immédiatement après utilisation
                    pour éliminer le sang, puis de les laver à l'eau tiède avec un savon doux. Il est important de
                    suivre les instructions de lavage du fabricant pour préserver leur qualité et leur durabilité. Les
                    serviettes hygiéniques lavables peuvent être séchées à l'air libre ou en machine à basse
                    température.
                </div>

                <div class="art-second-part-title">Les avantages écologiques et financiers des serviettes hygiéniques
                    lavables
                </div>
                <div class="art-second-part-content">
                    L'un des principaux avantages des serviettes hygiéniques lavables est leur impact positif sur
                    l'environnement. Contrairement aux serviettes jetables qui sont souvent fabriquées à partir de
                    matériaux non biodégradables et génèrent une quantité importante de déchets, les serviettes
                    hygiéniques réutilisables permettent de réduire la quantité de déchets envoyés dans les décharges.
                    De plus, elles sont souvent fabriquées à partir de matériaux durables et naturels, ce qui les rend
                    plus écologiques.
                </div>
                <div class="art-second-part-content">
                    En ce qui concerne les avantages financiers, bien que le coût initial des serviettes hygiéniques
                    lavables puisse être plus élevé que celui des serviettes jetables, à long terme, elles peuvent être
                    plus économiques. En effet, les serviettes lavables sont réutilisables pendant plusieurs années, ce
                    qui permet de réaliser des économies sur le long terme en évitant d'acheter régulièrement des
                    serviettes jetables.
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
                        <p class="card-text">Comment soulager les crampes menstruelles : astuces et
                            remèdes naturels</p>
                        <div class="card-date">Le 05 décembre 2022</div>
                    </div>
                </div>
            </a>

            <a href="/blog/article/4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ url("/images/blog/coupe_menstruelle.jpg") }}"
                         alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Les protections</h5>
                        <p class="card-text">Les protections menstruelles : lesquelles choisir ?</p>
                        <div class="card-date">Le 05 décembre 2022</div>
                    </div>
                </div>
            </a>


            <a href="/blog/article/7">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ url("/images/blog/sport.jpg") }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Vivre avec ces règles</h5>
                        <p class="card-text">Le sport et les règles : comment bien s’entraîner pendant cette période
                            ?</p>
                        <div class="card-date">Le 05 décembre 2022</div>
                    </div>
                </div>
            </a>
        </div>
    </div>
@stop

