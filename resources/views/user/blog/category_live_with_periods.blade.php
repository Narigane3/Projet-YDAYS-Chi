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
        <a href="/blog/articles">
            <div class="cat-row">
                <div class="cat-col-2 cat-article-img-sport cat-article-img"></div>
                <div class="cat-col-8">
                    <div class="cat-categorie-article-title">Vivre avec ces règles</div>
                    <div class="cat-article-title">
                        <strong>La coupe menstruelle : comment l'utiliser et en prendre soin ?</strong>
                    </div>
                    <div class="cat-article-description">Choisir la protections hygiénique qui convient le mieux peut
                        être déroutant, surtout si vous êtes nouveau dans le monde des menstruations. Il y a tellement
                        de choix, des tampons aux coupes menstruelles en passant par les serviettes hygiéniques. Dans
                        cet article, nous vous guiderons à travers les différents options et vous donnerons des conseils
                        pour vous aider à choisir clle qui convient le meiu pour votre corpset à votre style de
                        vie.
                    </div>
                    <div class="cat-article-date">Le 05 décembre 2022</div>
                </div>
            </div>

            <div class="card category-card" style="width: 18rem;">
                <img class="card-img-top" src="{{ url("/images/blog/sport.jpg") }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Vivre avec ces règles</h5>
                    <h5 class="card-title-category">La coupe menstruelle : comment l'utiliser et en prendre soin ?</h5>
                    <p class="card-text-category">Choisir la protections hygiénique qui convient le mieux peut
                        être déroutant, surtout si vous êtes nouveau dans le monde des menstruations. Il y a tellement
                        de choix, des tampons aux coupes menstruelles en passant par les serviettes hygiéniques. Dans
                        cet article, nous vous guiderons à travers les différents options et vous donnerons des conseils
                        pour vous aider à choisir clle qui convient le meiu pour votre corpset à votre style de
                        vie.</p>
                    <div class="card-date">Le 05 décembre 2022</div>
                </div>
            </div>
        </a>

        <a href="/blog/articles">
            <div class="cat-row">
                <div class="cat-col-2 cat-article-img-sport cat-article-img"></div>
                <div class="cat-col-8">
                    <div class="cat-categorie-article-title">Vivre avec ces règles</div>
                    <div class="cat-article-title">
                        <strong>Les tampons bio : sont-ils vraiment meilleurs pour la santé ?</strong>
                    </div>
                    <div class="cat-article-description">Les coupes menstruelles sont de plus en plus populaires auprès
                        des personnes qui cherchent une alternative plus écologique et économique aux tampons et aux
                        serviettes hygiènique. Mais qu'est-ce qu'un coupe menstruelle exactement ? Comment l'utiliser et
                        l'entretenir ? Dans cet article, nous répondrons à toutes les questions que vous pourriez avoir
                        sur les coupes menstruelles, afin que vous puissiez décider si elles sont faites pour vous.
                    </div>
                    <div class="cat-article-date">Le 05 décembre 2022</div>
                </div>
            </div>

            <div class="card category-card" style="width: 18rem;">
                <img class="card-img-top" src="{{ url("/images/blog/sport.jpg") }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Vivre avec ces règles</h5>
                    <h5 class="card-title-category">Les tampons bio : sont-ils vraiment meilleurs pour la santé ??</h5>
                    <p class="card-text-category">Les coupes menstruelles sont de plus en plus populaires auprès
                        des personnes qui cherchent une alternative plus écologique et économique aux tampons et aux
                        serviettes hygiènique. Mais qu'est-ce qu'un coupe menstruelle exactement ? Comment l'utiliser et
                        l'entretenir ? Dans cet article, nous répondrons à toutes les questions que vous pourriez avoir
                        sur les coupes menstruelles, afin que vous puissiez décider si elles sont faites pour vous.</p>
                    <div class="card-date">Le 05 décembre 2022</div>
                </div>
            </div>
        </a>

        <a href="/blog/articles">
            <div class="cat-row">
                <div class="cat-col-2 cat-article-img-sport cat-article-img"></div>
                <div class="cat-col-8">
                    <div class="cat-categorie-article-title">Vivre avec ces règles</div>
                    <div class="cat-article-title">
                        <strong>Les serviettes hygiéniques lavables : une alternative écologique et économique</strong>
                    </div>
                    <div class="cat-article-description">Si vous cherchez une alternative écologique et confortable aux
                        serviettes hygiéniques jetables, les serviettes hygiéniques réutilisable pourraient être la
                        solution. Dans cet article, nous vous expliquerons ce qu'elles sont, comment les entretenir,
                        ainsi que les avantages écologiques et financiers de cette option. Nous espérons que cet article
                        vous donnera une idée de cette alternative et vous encouragera à essayer les serviettes
                        hygiéniques réutilisables.
                    </div>
                    <div class="cat-article-date">Le 05 décembre 2022</div>
                </div>
            </div>

            <div class="card category-card" style="width: 18rem;">
                <img class="card-img-top" src="{{ url("/images/blog/sport.jpg") }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Vivre avec ces règles</h5>
                    <h5 class="card-title-category">Les serviettes hygiéniques lavables : une alternative écologique et
                        économique</h5>
                    <p class="card-text-category">Si vous cherchez une alternative écologique et confortable aux
                        serviettes hygiéniques jetables, les serviettes hygiéniques réutilisable pourraient être la
                        solution. Dans cet article, nous vous expliquerons ce qu'elles sont, comment les entretenir,
                        ainsi que les avantages écologiques et financiers de cette option. Nous espérons que cet article
                        vous donnera une idée de cette alternative et vous encouragera à essayer les serviettes
                        hygiéniques réutilisables.</p>
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

