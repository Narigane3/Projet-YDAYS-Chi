@extends("layouts.admin")

@section('title', "Blog article")

@section('navbar')
    @parent
@stop

@section('content')
    <div class="art-category-title">Les protections</div>
    <div class="cat-texte-mobile" style="margin-right: 10%"><strong>Les tampons bio sont-ils vraiment meilleurs pour la
            santé ?</strong></div>
    <div class="cat-img" style="background-image: url('/images/blog/tampon_bio.jpg')"></div>

    <div class="article-content">
        <div class="art-first-part">
            <div class="art-user">
                <div class="art-user-picture"></div>
                <div class="art-user-name">Sarah DUPOND</div>
            </div>
            <div class="art-first-description">
                <p>
                    Les femmes recherchent de plus en plus des options de protection menstruelle qui sont à la fois
                    écologiques et bénéfiques pour leur santé. Les tampons bio sont devenus une alternative populaire
                    aux tampons traditionnels, car ils sont fabriqués à partir de matériaux biologiques et sont
                    considérés comme plus respectueux de l'environnement. Mais sont-ils réellement meilleurs pour la
                    santé des femmes ? Dans cet article, nous allons examiner les avantages et les inconvénients des
                    tampons bio, et aborder les questions de sécurité, d'efficacité et de durabilité pour vous aider à
                    prendre une décision éclairée sur leur utilisation pendant vos règles.
                </p>
            </div>
        </div>
        <div class="art-second-part">
            <div class="art-second-part-description">
                <div class="art-second-part-title">Qu'est-ce qu'un tampon bio ?</div>
                <div class="art-second-part-content">Un tampon bio est fabriqué à partir de coton biologique, qui est
                    cultivé sans l'utilisation de pesticides ou d'autres produits chimiques. Contrairement aux tampons
                    conventionnels, qui peuvent contenir des traces de résidus de pesticides, de blanchisseurs chimiques
                    et d'autres substances potentiellement nocives, les tampons bio sont fabriqués à partir de coton
                    cultivé de manière biologique, ce qui en fait une option plus naturelle.
                </div>

                <div class="art-second-part-title">Avantages des tampons bio pour la santé</div>
                <div class="art-second-part-content">
                    L'un des principaux avantages des tampons bio est qu'ils sont considérés comme moins irritants pour
                    la peau. Les tampons conventionnels peuvent contenir des produits chimiques et des irritants qui
                    peuvent causer des démangeaisons, des rougeurs et des irritations chez certaines femmes. Les tampons
                    bio, en revanche, sont fabriqués à partir de coton biologique non blanchi et sans produits chimiques
                    ajoutés, ce qui peut réduire le risque d'irritation cutanée.
                </div>
                <div class="art-second-part-content">
                    De plus, les tampons bio sont souvent hypoallergéniques, ce qui les rend adaptés aux femmes ayant
                    des sensibilités ou des allergies cutanées. Ils sont également biodégradables et compostables, ce
                    qui les rend plus respectueux de l'environnement et contribue à réduire la pollution plastique
                    associée aux produits menstruels.
                </div>

                <div class="art-second-part-title">Inconvénients potentiels des tampons bio</div>
                <div class="art-second-part-content">
                    Bien que les tampons bio aient des avantages, il y a également quelques inconvénients potentiels à
                    prendre en compte. Tout d'abord, ils peuvent être plus chers que les tampons conventionnels, ce qui
                    peut être un facteur à prendre en compte pour certaines femmes. De plus, étant donné que les tampons
                    bio sont fabriqués à partir de coton non blanchi, ils peuvent avoir une apparence plus terne et une
                    texture différente par rapport aux tampons conventionnels, ce qui peut ne pas être aussi attrayant
                    pour certaines femmes.
                </div>
                <div class="art-second-part-content">
                    En outre, bien que les tampons bio soient considérés comme plus respectueux de l'environnement, ils
                    ne sont pas entièrement exempts d'impact environnemental. La culture du coton biologique nécessite
                    également des ressources naturelles telles que l'eau et l'énergie, bien que dans des quantités
                    moindres que la culture conventionnelle du coton. De plus, l'élimination des tampons bio doit
                    également être gérée de manière appropriée, en les composant ou en les jetant dans les bacs de
                    déchets organiques, ce qui peut ne pas être possible dans toutes les régions.
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

