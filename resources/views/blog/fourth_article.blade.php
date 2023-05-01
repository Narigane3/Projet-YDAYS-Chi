@extends("layouts.master")

@section('title', "Blog Les protections menstruelles : lesquelles choisir ?")

@section('navbar')
    @parent
@stop

@section('content')
    <div class="art-category-title">Les protections</div>
    <div class="cat-texte-mobile" style="margin-right: 10%">
        <strong>Les protections menstruelles : lesquelles choisir ?</strong>
    </div>
    <div class="cat-img" style="background-image: url('/images/blog/coupe_menstruelle.jpg')"></div>

    <div class="article-content">
        <div class="art-first-part">
            <div class="art-user">
                <div class="art-user-picture"></div>
                <div class="art-user-name">Sarah DUPOND</div>
            </div>
            <div class="art-first-description">
                <p>
                    Les menstruations sont une partie normale de la vie de nombreuses femmes, et choisir la protection
                    hygiénique qui convient le mieux peut être une décision importante. Avec une variété d'options
                    disponibles sur le marché, il peut être déroutant de savoir laquelle choisir. Nous allons vous
                    donner des conseils pour vous aider à choisir les différentes protections menstruelles qui convient
                    le mieux à votre corps et à votre style de vie.
                </p>
            </div>
        </div>
        <div class="art-second-part">
            <div class="art-second-part-description">
                <div class="art-second-part-title">1°Tampons :</div>
                <div class="art-second-part-content">Les tampons sont généralement faits de coton et sont disponibles
                    dans différentes tailles, niveaux d'absorption et styles, tels que les tampons avec ou sans
                    applicateur. Les tampons sont pratiques pour une utilisation discrète et active, comme la natation
                    ou le sport.
                </div>

                <div class="art-second-part-title">2°Serviettes hygiéniques :</div>
                <div class="art-second-part-content">Les serviettes hygiéniques sont des protections menstruelles qui se
                    fixent à l'intérieur de la culotte. Elles sont généralement fabriquées à partir de matériaux
                    absorbants et sont disponibles dans différents niveaux d'absorption et de tailles. Les serviettes
                    hygiéniques sont faciles à utiliser et conviennent à celles qui préfèrent ne pas insérer de tampons.
                </div>

                <div class="art-second-part-title">3°Coupes menstruelles :</div>
                <div class="art-second-part-content">Les coupes menstruelles sont des protections réutilisables en forme
                    de coupe qui sont insérées dans le vagin. Elles sont généralement en silicone médical et peuvent
                    être utilisées pendant de nombreuses années, ce qui en fait une option écologique et économique. Les
                    coupes menstruelles nécessitent une certaine familiarisation pour une insertion et une utilisation
                    appropriées, mais offrent une protection fiable et sans fuite.
                </div>

                <div class="art-second-part-title">4°Protections périodiques en tissu :</div>
                <div class="art-second-part-content">
                    Les protections périodiques en tissu, comme les culottes menstruelles en tissu ou les serviettes
                    hygiéniques en tissu, sont des options lavables et réutilisables pour gérer le flux menstruel. Elles
                    sont fabriquées à partir de tissus absorbants et peuvent être portées comme des sous-vêtements ou se
                    fixer à l'intérieur de la culotte. Les protections périodiques en tissu sont respectueuses de
                    l'environnement et peuvent être une option confortable et économique pour certaines personnes.
                </div>

                <div class="art-second-part-title">Attention :</div>
                <div class="art-second-part-content">
                    Il est important de se rappeler que chaque femme est différente, et ce qui fonctionne pour l'une
                    peut ne pas fonctionner pour une autre. Il n'y a pas de solution unique pour tout le monde en
                    matière de protections menstruelles, il s'agit de trouver celle qui convient le mieux à votre corps,
                    à votre mode de vie et à vos préférences personnelles.
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
                        <h5 class="card-title">Vivre avec ses règles</h5>
                        <p class="card-text">Le sport et les règles : comment bien s’entraîner pendant cette période
                            ?</p>
                        <div class="card-date">Le 05 décembre 2022</div>
                    </div>
                </div>
            </a>
        </div>
    </div>
@stop

