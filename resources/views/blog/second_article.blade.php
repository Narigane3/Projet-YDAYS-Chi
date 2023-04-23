@extends("layouts.master")

@section('title', "Blog article")

@section('navbar')
    @parent
@stop

@section('content')
    <div class="art-category-title">Symptômes menstruels</div>
    <div class="cat-texte-mobile" style="margin-right: 10%"><strong>Les saignements abondants pendant les règles : que
            faire ?</strong></div>
    <div class="cat-img" style="background-image: url('/images/blog/saignement.jpg')"></div>

    <div class="article-content">
        <div class="art-first-part">
            <div class="art-user">
                <div class="art-user-picture"></div>
                <div class="art-user-name">Sarah DUPOND</div>
            </div>
            <div class="art-first-description">
                <p>
                    Les saignements abondants pendant les règles peuvent être un véritable casse-tête pour les personnes
                    qui en souffrent. Comment faire face à ces pertes de sang importantes et répétitives ? Dans cet
                    article, nous allons tout vous dire sur le saignement abondant.
                </p>
                <p>
                    <span class="art-second-part-title">Qu'est-ce que le saignement abondant pendant les règles ?</span>
                    Le saignement abondant pendant les règles est également connu sous le nom de ménorragie. Il s'agit
                    d'une affection courante chez les femmes qui se caractérisent par des règles prolongées et
                    abondantes. Les femmes qui souffrent de ménorragie peuvent perdre jusqu'à 80 ml de sang par cycle
                    menstruel. Cela peut entraîner une fatigue, une anémie, des douleurs abdominales, des nausées et des
                    maux de tête.

                </p>
            </div>
        </div>
        <div class="art-second-part">
            <div class="art-second-part-description">
                <div class="art-second-part-title">Quelles sont les causes du saignement abondant pendant les règles ?
                </div>
                <div class="art-second-part-content">Plusieurs facteurs peuvent causer un saignement abondant pendant
                    les règles. Les plus courants sont les déséquilibres hormonaux, les fibromes utérins, les polypes
                    utérins, les kystes ovariens, les infections, les troubles de la coagulation sanguine, les maladies
                    thyroïdiennes et les troubles de l'alimentation.
                </div>

                <div class="art-second-part-title">Comment diagnostiquer la ménorragie ?</div>
                <div class="art-second-part-content">Le diagnostic de la ménorragie peut être effectué par un médecin en
                    effectuant un examen physique et en réalisant des analyses sanguines. Des examens complémentaires
                    tels qu'une échographie pelvienne ou une biopsie endométriale peuvent également être nécessaires.
                </div>

                <div class="art-second-part-title">Comment traiter le saignement abondant pendant les règles ?</div>
                <div class="art-second-part-content">Le traitement de la ménorragie dépend de la cause sous-jacente du
                    saignement. Les traitements médicaux courants incluent les anti-inflammatoires non stéroïdiens, les
                    contraceptifs oraux, les dispositifs intra-utérins (DIU), les traitements hormonaux, les médicaments
                    de la coagulation sanguine et les interventions chirurgicales.
                </div>

                <div class="art-second-part-title">Conseils pour faire face au saignement abondant pendant les règles
                </div>
                <div class="art-second-part-content">En plus des traitements médicaux, il existe des mesures que les
                    femmes peuvent prendre pour faire face au saignement abondant pendant les règles. Voici quelques
                    conseils :
                    Utiliser des tampons ou des serviettes hygiéniques absorbants pour éviter les fuites.
                    Changer régulièrement les tampons et les serviettes hygiéniques pour maintenir une bonne hygiène.
                    <ul>
                        <li>Éviter les bains chauds et les saunas qui peuvent aggraver le saignement.</li>
                        <li>Éviter l'alcool, le tabac et la caféine, qui peuvent aggraver les symptômes de la
                            ménorragie.
                        </li>
                        <li>Faire de l'exercice régulièrement pour aider à réduire le stress et à améliorer la
                            circulation sanguine.
                        </li>
                    </ul>
                </div>

                <div class="art-second-part-title">Conclusion :</div>
                <div class="art-second-part-content">Les saignements abondants pendant les règles peuvent être un
                    véritable problème pour les femmes qui en souffrent. Si vous pensez que vous pourriez avoir une
                    ménorragie, il est important de consulter votre médecin pour un diagnostic et un traitement
                    appropriés. En suivant les conseils ci-dessus
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

