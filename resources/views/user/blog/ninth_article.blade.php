@extends("layouts.admin")

@section('title', "Blog article")

@section('navbar')
    @parent
@stop

@section('content')
    <div class="art-category-title">Vivre avec ces règles</div>
    <div class="cat-texte-mobile" style="margin-right: 10%">
        <strong>Les règles et le travail : comment mieux gérer son cycle menstruel au bureau</strong>
    </div>
    <div class="cat-img" style="background-image: url('/images/blog/regles_travail.jpg')"></div>

    <div class="article-content">
        <div class="art-first-part">
            <div class="art-user">
                <div class="art-user-picture"></div>
                <div class="art-user-name">Sarah DUPOND</div>
            </div>
            <div class="art-first-description">
                <p>
                    Gérer son cycle menstruel au travail peut être un défi pour de nombreuses femmes. Entre les
                    douleurs, la fatigue et les contraintes professionnelles, il n'est pas toujours facile de concilier
                    les deux. Dans cet article, vous découvrirez des astuces pour mieux vivre cette période au bureau.
                    Apprenez comment adapter votre emploi du temps, choisir les bonnes protections et gérer les
                    éventuels désagréments de manière discrète.
                </p>
            </div>
        </div>
        <div class="art-second-part">
            <div class="art-second-part-description">
                <div class="art-second-part-title">Comment mieux gérer son cycle menstruel au travail ?</div>
                <div class="art-second-part-content">Voici quelques conseils pratiques pour mieux gérer votre cycle
                    menstruel au bureau :

                    <ul>
                        <li>
                            <div class="art-second-part-title">
                                Planifiez votre emploi du temps :
                            </div>
                            <div class="art-second-part-content">
                                Essayez de planifier vos tâches les plus importantes et les plus complexes en dehors des
                                jours où vous avez vos règles. Évitez de surcharger votre emploi du temps pendant cette
                                période et autorisez-vous des pauses supplémentaires si nécessaire pour soulager les
                                symptômes menstruels.
                            </div>
                        </li>

                        <li>
                            <div class="art-second-part-title">
                                Communiquez avec votre employeur ou vos collègues :
                            </div>
                            <div class="art-second-part-content">
                                Si vous avez des symptômes menstruels sévères qui peuvent affecter votre travail,
                                n'hésitez pas à communiquer avec votre employeur ou vos collègues de confiance. Ils
                                peuvent être compréhensifs et vous proposer des solutions pour mieux gérer votre cycle
                                menstruel au travail, comme des horaires flexibles ou des aménagements spécifiques.
                            </div>
                        </li>

                        <li>
                            <div class="art-second-part-title">
                                Choisissez les bonnes protections hygiéniques :
                            </div>
                            <div class="art-second-part-content">
                                Optez pour les protections hygiéniques qui sont les plus confortables pour vous pendant
                                votre journée de travail. Que ce soit des tampons, des serviettes hygiéniques ou des
                                coupes menstruelles, choisissez celles qui vous conviennent le mieux pour éviter les
                                fuites et vous sentir à l'aise tout au long de la journée.
                            </div>
                        </li>

                        <li>
                            <div class="art-second-part-title">
                                Prévoyez des médicaments et des remèdes :
                            </div>
                            <div class="art-second-part-content">
                                Si vous avez des symptômes menstruels tels que des crampes ou des maux de tête, prévoyez
                                des médicaments ou des remèdes appropriés pour les soulager. Assurez-vous de les avoir à
                                portée de main dans votre sac ou dans votre tiroir de bureau.
                            </div>
                        </li>

                        <li>
                            <div class="art-second-part-title">
                                Gérez les éventuels désagréments de manière discrète :
                            </div>
                            <div class="art-second-part-content">
                                Si vous avez besoin de vous rendre aux toilettes fréquemment ou si vous avez des fuites,
                                essayez de gérer ces situations de manière discrète. Vous pouvez prévoir des vêtements
                                de rechange, des lingettes humides et des sacs imperméables pour vous aider à gérer les
                                éventuels désagréments de manière discrète et professionnelle.
                            </div>
                        </li>

                        <li>
                            <div class="art-second-part-title">
                                Prenez soin de vous :
                            </div>
                            <div class="art-second-part-content">
                                Il est important de prendre soin de vous pendant votre cycle menstruel au travail.
                                Essayez de vous reposer suffisamment, de rester hydratée, de manger sainement et de
                                prendre des pauses si nécessaire pour prendre soin de votre bien-être physique et
                                mental.
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="art-second-part-content">
                    En conclusion, gérer son cycle menstruel au travail peut être un défi, mais avec une planification
                    préalable, une communication ouverte avec votre employeur ou vos collègues, le choix des bonnes
                    protections hygiéniques et la gestion discrète des éventuels désagréments, vous pouvez mieux vivre
                    cette période au bureau. Prenez soin de vous et n'hésitez pas à demander
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

