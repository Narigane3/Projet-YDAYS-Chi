<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi - @yield('title')</title>
    <link rel="stylesheet" href="https://use.typekit.net/rzo4cyf.css">
    @vite('resources/js/app.js')
    @section('head')
    @show
</head>
<body>

@section('navbar')
    <nav class="navbar navbar-expand-lg navbar-light position-absolute top-0 start-0" id="master_nav">
        <div class="container-fluid flex-nowrap">
            <div id="logo_master_nav_content">
                <img src="{{url("/images/logo/logo-chi.svg")}}" alt="logo chi" id="menu_logo">
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </div>
            </div>
        </div>
    </nav>
@show

@yield('content')

</body>
<footer>
    @section('footer')
        {{-- REINSURANCE FOOTER --}}
        <div class="reinsurance">
            <div class="reinsurance-item">
                <h4>Service client <i class="bi bi-telephone-fill"></i></h4>
            </div>
            <div class="reinsurance-item">
                <h4>Expedition 48h <i class="bi bi-send-fill"></i></h4>
            </div>
            <div class="reinsurance-item">
                <h4>Charte qualité <i class="bi bi-hand-thumbs-up-fill"></i></h4>
            </div>
            <div class="reinsurance-item">
                <h4> Paiement sécuriser <i class="bi bi-lock-fill"></i></h4>
            </div>
        </div>
        {{-- NETWORK MENU FOOTER --}}
        <div class="network_footer">
            <h4>Rester en contact !</h4>
            <div class="link_network">
                <div>
                    <a href="https://www.instagram.com/chi.lecalendriermenstruel/" target="_blank">
                        <img src="{{url('images/illustration/layout/footer/logo-network/instagram.svg')}}"
                             alt="logo-Instagram-chi">
                    </a>
                </div>
                <div>
                    <a href="https://www.facebook.com/chilecalendriermenstruel/" target="_blank">
                        <img src="{{url('/images/illustration/layout/footer/logo-network/facebook.svg')}}"
                             alt="logo-facebook-chi">
                    </a>
                </div>
                <div>
                    <a href="#" target="_blank">
                        <img src="{{url('/images/illustration/layout/footer/logo-network/tiktok.svg')}}"
                             alt="logo-tiktok-chi">
                    </a>
                </div>

            </div>
        </div>
        {{-- ACCORDION MENU FOOTER --}}
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        Calendrier
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                     data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Lorem ipsum dolor sit
                        amet, consectetur
                        adipiscing elit, sed do
                        eiusmod tempor
                        incididunt ut labore et
                        dolore magna aliqua. Ut
                        enim ad minim veniam,
                        quis nostrud exercitation
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Articles
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                     data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Voir +
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Faq
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                     data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul class="list-unstyled">
                            <li><a href="#">Catégorie 1</a></li>
                            <li><a href="#">Catégorie 2</a></li>
                            <li><a href="#">Catégorie 3</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        {{--CONTENT DESKTOP--}}
        <div class="desktop_footer d-lg-flex flex-row">

            {{--DIV LOGO--}}
            <div class="logo_footer col-3">
                <a href="/">
                    <img src="{{url('/images/logo/logo-chi.svg')}}" alt="logo Chi">
                </a>
            </div>

            {{-- DIV CONTENT --}}
            <div class="content_desktop_footer d-flex justify-content-between col-9">
                {{-- COLUMUN 1--}}
                <div class="col sub_content">
                    <h4>Qui est chi ?</h4>
                    <p> Lorem ipsum dolor sit
                        amet, consectetur
                        adipiscing elit, sed do
                        eiusmod tempor
                        incididunt ut labore et
                        dolore magna aliqua. Ut
                        enim ad minim veniam,
                        quis nostrud exercitation</p>
                </div>

                {{--COLUMUN 2--}}
                <div class="col">
                    <div class="content_col">
                        <div class="col sub_content">
                            <h4>Calendrier</h4>
                            <p>Voir +</p>
                        </div>
                    </div>
                    <div class="network_desktop_footer sub_content">
                        <h4>Rester en contact !</h4>
                        <div class="link_network">
                            <div>
                                <a href="https://www.instagram.com/chi.lecalendriermenstruel/" target="_blank">
                                    <img src="{{url('images/illustration/layout/footer/logo-network/instagram.svg')}}"
                                         alt="logo-Instagram-chi">
                                </a>
                            </div>
                            <div>
                                <a href="https://www.facebook.com/chilecalendriermenstruel/" target="_blank">
                                    <img src="{{url('/images/illustration/layout/footer/logo-network/facebook.svg')}}"
                                         alt="logo-facebook-chi">
                                </a>
                            </div>
                            <div>
                                <a href="#" target="_blank">
                                    <img src="{{url('/images/illustration/layout/footer/logo-network/tiktok.svg')}}"
                                         alt="logo-tiktok-chi">
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

                {{--COLUMUN 3--}}
                <div class="col">
                    <div class="content_col">
                        <div class="col sub_content">
                            <h4>Article</h4>
                            <ul class="list-unstyled">
                                <li><p>catégorie 1</p></li>
                                <li><p>catégorie 2</p></li>
                                <li><p>catégorie 3</p></li>
                            </ul>
                        </div>
                    </div>
                    <div class="content_bottom sub_content">
                        <h4>Faq</h4>
                        <p>Voir +</p>
                    </div>
                </div>
            </div>
        </div>



        {{-- SUB MENU FOOTER --}}
        <div class="menu_footer_3">
            <div class="text-center"><a href="#" class="link_menu_footer">Mention légales</a></div>
            <div class="text-center"><a href="#" class="link_menu_footer">Condition générales d'utilisation</a></div>
            <div class="text-center"><a href="#" class="link_menu_footer">Données personnelles</a></div>
        </div>

    @show
</footer>
</html>
