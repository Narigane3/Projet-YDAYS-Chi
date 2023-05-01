@extends("layouts.master")

@section('title', "Blog Vivre avec ses règles")

@section('navbar')
    @parent
@stop

@section('content')
    <div class="art-category-title">Vivre avec ses règles</div>
    <div class="cat-texte-mobile" style="margin-right: 10%">
        <strong>Voyager pendant les règles : comment s’organiser pour un voyage serein</strong>
    </div>
    <div class="cat-img" style="background-image: url('/images/blog/voyage.jpg')"></div>

    <div class="article-content">
        <div class="art-first-part">
            <div class="art-user">
                <div class="art-user-picture"></div>
                <div class="art-user-name">Sarah DUPOND</div>
            </div>
            <div class="art-first-description">
                <p>
                    Les voyages peuvent être source de stress, d'autant plus lorsqu'on doit gérer ses règles en même
                    temps. Cet article vous fournira des conseils pratiques pour vous permettre de voyager sereinement
                    pendant cette période. Que vous partiez en avion, en train ou en voiture, découvrez comment vous
                    préparer au mieux pour éviter tout désagrément.
                </p>
            </div>
        </div>
        <div class="art-second-part">
            <div class="art-second-part-description">
                <div class="art-second-part-title">Comment s'organiser pour un voyage serein pendant les règles ?</div>
                <div class="art-second-part-content">Les règles peuvent être gênantes à gérer en voyage, mais avec une
                    bonne organisation, vous pouvez minimiser les impacts sur votre voyage. Voici quelques conseils pour
                    vous aider à vous organiser :

                    <ul>
                        <li>
                            <div class="art-second-part-title">
                                Planifiez à l'avance :
                            </div>
                            <div class="art-second-part-content">
                                Vérifiez les dates de vos règles avant de partir en voyage et assurez-vous d'avoir
                                suffisamment de protections hygiéniques pour la durée de votre voyage. Si vous utilisez
                                des tampons ou des coupes menstruelles, assurez-vous d'avoir également accès à des
                                toilettes propres pour les changer.
                            </div>
                        </li>

                        <li>
                            <div class="art-second-part-title">
                                Choisissez les bonnes protections hygiéniques :
                            </div>
                            <div class="art-second-part-content">
                                Optez pour les protections hygiéniques qui sont les plus confortables pour vous pendant
                                vos déplacements. Les tampons ou les coupes menstruelles peuvent être plus pratiques
                                lors de voyages en avion ou en train, car ils sont discrets et ne nécessitent pas de
                                changer fréquemment. Si vous préférez les serviettes hygiéniques, assurez-vous d'en
                                avoir suffisamment et de les emballer dans un sac imperméable pour éviter les fuites.
                            </div>
                        </li>

                        <li>
                            <div class="art-second-part-title">
                                Prévoyez des médicaments et des remèdes :
                            </div>
                            <div class="art-second-part-content">
                                Les voyages peuvent aggraver les symptômes menstruels, tels que les crampes ou les maux
                                de tête. Prévoyez des médicaments et des remèdes appropriés pour soulager ces symptômes,
                                et gardez-les facilement accessibles dans votre sac de voyage.
                            </div>
                        </li>

                        <li>
                            <div class="art-second-part-title">
                                Soyez préparée en cas d'imprévus :
                            </div>
                            <div class="art-second-part-content">
                                Les règles peuvent être imprévisibles, donc prévoyez des vêtements de rechange et des
                                protections hygiéniques supplémentaires au cas où. Vous pouvez également apporter des
                                lingettes humides pour vous rafraîchir et vous sentir plus à l'aise pendant le voyage.
                            </div>
                        </li>

                        <li>
                            <div class="art-second-part-title">
                                Recherchez les installations sanitaires :
                            </div>
                            <div class="art-second-part-content">
                                Renseignez-vous à l'avance sur les installations sanitaires disponibles pendant votre
                                voyage, que ce soit dans les avions, les trains, les stations-service ou les aires de
                                repos. Savoir où vous pouvez trouver des toilettes propres et accessibles peut vous
                                aider à mieux vous organiser pendant vos déplacements.
                            </div>
                        </li>

                        <li>
                            <div class="art-second-part-title">
                                Restez hydratée et mangez sainement :
                            </div>
                            <div class="art-second-part-content">
                                Voyager peut être épuisant pour le corps, il est donc important de rester hydratée en
                                buvant suffisamment d'eau et de manger des repas équilibrés pour maintenir votre énergie
                                et minimiser les symptômes menstruels.
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="art-second-part-content">
                    En conclusion, voyager pendant les règles peut nécessiter une organisation supplémentaire, mais avec
                    une planification préalable et quelques astuces pratiques, vous pouvez vous assurer un voyage plus
                    serein.
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

