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
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <img src="{{url("/images/logo/logo-chi.svg")}}" alt="logo chi" id="menu_logo">
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
        {{-- SUB MENU FOOTER --}}
        <div class="menu_footer_3">
            <div class="text-center"><a href="#" class="link_menu_footer">Mention légales</a></div>
            <div class="text-center"><a href="#" class="link_menu_footer">Condition générales d'utilisation</a></div>
            <div class="text-center"><a href="#" class="link_menu_footer">Données personnelles</a></div>
        </div>

    @show
</footer>
</html>
