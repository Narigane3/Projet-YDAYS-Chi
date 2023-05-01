@extends("layouts.master")

@section('title', "Le sport et les règles : comment bien s’entraîner pendant cette période ?")

@section('navbar')
    @parent
@stop

@section('content')
    <div class="art-category-title">Vivre avec ses règles</div>
    <div class="cat-texte-mobile" style="margin-right: 10%">
        <strong>Le sport et les règles : comment bien s’entraîner pendant cette période ?</strong>
    </div>
    <div class="cat-img" style="background-image: url('/images/blog/sport.jpg')"></div>

    <div class="article-content">
        <div class="art-first-part">
            <div class="art-user">
                <div class="art-user-picture"></div>
                <div class="art-user-name">Sarah DUPOND</div>
            </div>
            <div class="art-first-description">
                <p>
                    Pratiquer une activité sportive régulière est bénéfique pour la santé et le bien-être, mais comment
                    gérer son entraînement pendant la période des règles ? On vous fournit des astuces pour continuer à
                    pratiquer votre sport préféré tout en gérant au mieux vos règles.
                </p>
            </div>
        </div>
        <div class="art-second-part">
            <div class="art-second-part-description">
                <div class="art-second-part-title">Comment bien s'entraîner pendant les règles ?</div>
                <div class="art-second-part-content">Les règles peuvent parfois entraîner des symptômes gênants, tels
                    que des crampes, de la fatigue ou des sautes d'humeur. Cependant, cela ne signifie pas que vous
                    devez arrêter de vous entraîner pendant cette période. Voici quelques astuces pour bien gérer votre
                    entraînement pendant les règles :

                    <ul>
                        <li>
                            <div class="art-second-part-title">
                                Écoutez votre corps :
                            </div>
                            <div class="art-second-part-content">
                                Il est important d'écouter votre corps et de respecter ses signaux pendant les règles.
                                Si vous vous sentez fatiguée ou si vous avez des crampes intenses, il est peut-être
                                préférable de diminuer l'intensité de votre entraînement ou de prendre une journée de
                                repos si nécessaire.
                            </div>
                        </li>

                        <li>
                            <div class="art-second-part-title">
                                Optez pour des exercices adaptés :
                            </div>
                            <div class="art-second-part-content">
                                Certaines activités peuvent être plus appropriées pendant les règles. Par exemple, le
                                yoga ou les exercices de renforcement musculaire peuvent être moins intensifs et aider à
                                soulager les crampes. La marche ou le stretching sont également de bonnes options pour
                                rester actif tout en ménageant votre corps.
                            </div>
                        </li>

                        <li>
                            <div class="art-second-part-title">
                                Utilisez des protections adaptées :
                            </div>
                            <div class="art-second-part-content">
                                Choisir des protections hygiéniques adaptées à votre activité sportive est essentiel.
                                Les tampons ou les coupes menstruelles peuvent être plus confortables pendant
                                l'exercice, tandis que les serviettes hygiéniques peuvent causer des irritations.
                                N'hésitez pas à tester différentes options pour trouver celle qui vous convient le
                                mieux.
                            </div>
                        </li>

                        <li>
                            <div class="art-second-part-title">
                                Hydratez-vous et mangez sainement :
                            </div>
                            <div class="art-second-part-content">
                                Boire suffisamment d'eau et manger une alimentation équilibrée peut aider à réduire les
                                symptômes menstruels et à maintenir votre énergie pendant l'entraînement. Évitez les
                                aliments gras et sucrés qui peuvent aggraver les symptômes et privilégiez les aliments
                                riches en nutriments.
                            </div>
                        </li>

                        <li>
                            <div class="art-second-part-title">
                                Prenez soin de vous :
                            </div>
                            <div class="art-second-part-content">
                                Les règles peuvent être éprouvantes pour le corps et l'esprit, il est donc important de
                                prendre soin de vous pendant cette période. Assurez-vous de bien dormir, de vous reposer
                                suffisamment et de gérer votre stress pour optimiser vos performances sportives.
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="art-second-part-content">
                    En conclusion, il est tout à fait possible de continuer à s'entraîner pendant la période des règles
                    en adaptant son entraînement à son corps et à ses besoins.
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

