@extends("layouts.master")

@section('title', "Blog article")

@section('navbar')
    @parent
@stop

@section('content')
    <div class="art-category-title">Symptômes menstruels</div>
    <div class="cat-texte-mobile" style="margin-right: 10%"><strong>Comment soulager les crampes menstruelles : astuces
            et remèdes naturels</strong></div>
    <div class="cat-img" style="background-image: url('/images/blog/crampe_menstruelle.jpg')"></div>

    <div class="article-content">
        <div class="art-first-part">
            <div class="art-user">
                <div class="art-user-picture"></div>
                <div class="art-user-name">Sarah DUPOND</div>
            </div>
            <div class="art-first-description">
                <p>
                    Les crampes menstruelles sont l’un des symptômes les plus courants du cycle menstruel. Elles peuvent
                    varier en intensité et affecter considérablement la qualité de vie pendant cette période. Cependant,
                    il
                    existe des astuces et des remèdes naturels qui peuvent aider à soulager ces douleurs. Dans cet
                    article,
                    nous allons explorer les différentes options disponibles pour soulager les crampes menstruelles.
                </p>
                <p>
                    Tout d’abord, il est important de comprendre ce qui cause les crampes menstruelles. Les crampes sont
                    généralement causées par les contractions de l’utérus, qui sont nécessaires pour expulser le sang
                    menstruel. Ces contractions peuvent causer une douleur qui peut varier en intensité. Cependant,
                    certaines femmes peuvent avoir des crampes plus intenses que d’autres, ce qui peut affecter
                    considérablement leur qualité de vie pendant cette période.
                </p>
            </div>
        </div>
        <div class="art-second-part">
            <div class="art-second-part-description">
                <div class="art-second-part-title">1- Appliquez de la chaleur</div>
                <div class="art-second-part-content">La chaleur peut aider à détendre les muscles et à soulager la
                    douleur. Essayez de placer une bouillotte ou un coussin chauffant sur votre ventre pendant quelques
                    minutes. Vous pouvez également prendre un bain chaud pour vous détendre.
                </div>

                <div class="art-second-part-title">2- Faites de l’exercice</div>
                <div class="art-second-part-content">L’exercice peut aider à libérer des endorphines, qui sont des
                    hormones naturelles qui peuvent aider à soulager la douleur. Essayez de faire une activité physique
                    légère, comme une marche rapide ou du yoga. Cependant, évitez les exercices intenses qui pourraient
                    aggraver vos crampes.
                </div>

                <div class="art-second-part-title">3- Essayez des herbes naturelles</div>
                <div class="art-second-part-content">Certaines herbes, comme le gingembre et la camomille, peuvent avoir
                    des propriétés anti-inflammatoires et analgésiques naturelles. Essayez de boire une tisane à base de
                    ces herbes. Vous pouvez également prendre des compléments alimentaires contenant des extraits
                    d’herbes pour soulager la douleur.
                </div>

                <div class="art-second-part-title">4- Utilisez des huiles essentielles</div>
                <div class="art-second-part-content">Certaines huiles essentielles, comme la lavande et la menthe
                    poivrée, peuvent aider à soulager les douleurs menstruelles. Essayez de les appliquer sur votre
                    ventre avec une huile de support, comme de l’huile de coco. Vous pouvez également ajouter quelques
                    gouttes d’huile essentielle dans votre bain pour vous détendre.
                </div>

                <div class="art-second-part-title">5- Utilisez des produits naturels</div>
                <div class="art-second-part-content">De nombreux produits naturels peuvent aider à soulager les crampes
                    menstruelles, comme les compresses thermiques à base de graines de lin ou de riz. Vous pouvez
                    également utiliser des baumes naturels à base d’ingrédients comme l’arnica et la menthe poivrée pour
                    soulager la douleur.
                </div>

                <div class="art-second-part-content">En utilisant ces astuces et remèdes naturels, vous pouvez réduire
                    considérablement les douleurs menstruelles et améliorer votre bien-être pendant cette période.
                    N’oubliez pas de consulter votre médecin si vos crampes menstruelles sont très intenses ou si elles
                    affectent considérablement votre qualité de vie.
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

