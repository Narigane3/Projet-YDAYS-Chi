{{-- Callback layout master  --}}
@extends('layouts.master')

@section('head')
    {{-- Give more info into head --}}
    {{-- Not index this page form Google --}}
@stop

@section('title', 'Page d\'accueil')

@section('navbar')
    @parent
    {{-- call nav bar on this page --}}
@stop

@section('content')
    <div class="master_content">

        <section id="home_header">
            <div class="home_space">
            </div>
            <div class="home_header_content">
                <div id="home_header_title">
                    <h1>Calendrier<span class="second_part_title">Menstruel</span></h1>
                </div>
                <div class="header_cta">
                    <a class="btn" href="/blog">Je découvre le blog <i class="bi bi-chevron-double-right"></i></a>
                </div>
            </div>
        </section>

        <section id="home_about">
            <div class="about_content">
                <div class="about_title" id="qui-est-chi">
                    <h2>Qui est chi ?</h2>
                </div>
                <div class="d-lg-flex">
                    <div class="about_picture col-lg-6">
                        <img src="{{url('images/illustration/home/grouped_woman.jpg')}}"
                             alt="illustration d'un groupe de femme">
                    </div>

                    <div class="about_text col-lg-6">
                        <p>Hey toi, oui toi qui te tapes des migraines et des douleurs pendant tes règles, nous avons la
                            solution pour rendre ton cycle menstruel plus fun !</p>

                        <p>Avec Chi, tu recevras un calendrier menstruel physique avec abonnement rempli de surprises
                            pour
                            chaque jour de tes règles. Tu pourras ouvrir une pochette chaque jour et découvrir des
                            accessoires qui t’aideront à soulager tes douleurs et tes tracas.</p>

                        <p> Mais ce n’est pas tout, chez Chi, nous sommes éco-responsables et nous choisissons des
                            produits
                            biologiques pour notre calendrier. En plus, dans ton premier calendrier, tu recevras une
                            culotte
                            de règles et une serviette réutilisables pour être une guerrière zéro déchet !</p>

                        <p>Alors rejoins notre communauté pour un cycle menstruel plus funky et plus durable, et dit
                            adieu
                            aux règles ennuyeuses !</p>

                    </div>
                </div>
                <a href="#" class="btn about_cta d-none">En savoir +</a>

            </div>
        </section>

        <section class="partenariat">
            <div class="partenariat_title">
                <h2>Partenaires</h2>
            </div>
            <div class="partenariat_carousel">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="d-block d-md-none">
                                <img src="{{url('/images/partenaire/coca-cola-logo-svgrepo-com.svg')}}"
                                     class="d-block w-50"
                                     alt="Partner">
                            </div>
                            <div class="d-none d-md-block d-lg-none">
                                <div class="row">
                                    <div class="col-6">
                                        <img src="{{url('/images/partenaire/coca-cola-logo-svgrepo-com.svg')}}"
                                             class="d-block w-50"
                                             alt="Partner">
                                    </div>
                                    <div class="col-6">
                                        <img src="{{url('/images/partenaire/coca-cola-logo-svgrepo-com.svg')}}"
                                             class="d-block w-50"
                                             alt="Partner">
                                    </div>
                                </div>
                            </div>
                            <div class="d-none d-lg-block">
                                <div class="row">
                                    <div class="col-3">
                                        <img src="{{url('/images/partenaire/coca-cola-logo-svgrepo-com.svg')}}"
                                             class="d-block w-50"
                                             alt="Partner">
                                    </div>
                                    <div class="col-3">
                                        <img src="{{url('/images/partenaire/coca-cola-logo-svgrepo-com.svg')}}"
                                             class="d-block w-50"
                                             alt="Partner">
                                    </div>
                                    <div class="col-3">
                                        <img src="{{url('/images/partenaire/coca-cola-logo-svgrepo-com.svg')}}"
                                             class="d-block w-50"
                                             alt="Partner">
                                    </div>
                                    <div class="col-3">
                                        <img src="{{url('/images/partenaire/coca-cola-logo-svgrepo-com.svg')}}"
                                             class="d-block w-50"
                                             alt="Partner">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="carousel-item">
                            <div class="d-block d-md-none">
                                <img src="{{url('/images/partenaire/ethereum-logo-svgrepo-com.svg')}}"
                                     class="d-block w-50"
                                     alt="Partner">
                            </div>
                            <div class="d-none d-md-block d-lg-none">
                                <div class="row">
                                    <div class="col-6">
                                        <img src="{{url('/images/partenaire/ethereum-logo-svgrepo-com.svg')}}"
                                             class="d-block w-50"
                                             alt="Partner">
                                    </div>
                                    <div class="col-6">
                                        <img src="{{url('/images/partenaire/ethereum-logo-svgrepo-com.svg')}}"
                                             class="d-block w-50"
                                             alt="Partner">
                                    </div>
                                </div>
                            </div>
                            <div class="d-none  d-lg-block">
                                <div class="row">
                                    <div class="col-3">
                                        <img src="{{url('/images/partenaire/ethereum-logo-svgrepo-com.svg')}}"
                                             class="d-block w-50"
                                             alt="Partner">
                                    </div>
                                    <div class="col-3">
                                        <img src="{{url('/images/partenaire/ethereum-logo-svgrepo-com.svg')}}"
                                             class="d-block w-50"
                                             alt="Partner">
                                    </div>
                                    <div class="col-3">
                                        <img src="{{url('/images/partenaire/ethereum-logo-svgrepo-com.svg')}}"
                                             class="d-block w-50"
                                             alt="Partner">
                                    </div>
                                    <div class="col-3">
                                        <img src="{{url('/images/partenaire/ethereum-logo-svgrepo-com.svg')}}"
                                             class="d-block w-50"
                                             alt="Partner">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="d-block d-md-none">
                                <img src="{{url('/images/partenaire/bmw-logo-svgrepo-com.svg')}}" class="d-block w-50"
                                     alt="Partner">
                            </div>
                            <div class="d-none d-md-block d-lg-none">
                                <div class="row">
                                    <div class="col-6">
                                        <img src="{{url('/images/partenaire/bmw-logo-svgrepo-com.svg')}}"
                                             class="d-block w-50"
                                             alt="Partner">
                                    </div>
                                    <div class="col-6">
                                        <img src="{{url('/images/partenaire/bmw-logo-svgrepo-com.svg')}}"
                                             class="d-block w-50"
                                             alt="Partner">
                                    </div>
                                </div>
                            </div>
                            <div class="d-none d-lg-block">
                                <div class="row">
                                    <div class="col-3">
                                        <img src="{{url('/images/partenaire/bmw-logo-svgrepo-com.svg')}}"
                                             class="d-block w-50"
                                             alt="Partner">
                                    </div>
                                    <div class="col-3">
                                        <img src="{{url('/images/partenaire/bmw-logo-svgrepo-com.svg')}}"
                                             class="d-block w-50"
                                             alt="Partner">
                                    </div>
                                    <div class="col-3">
                                        <img src="{{url('/images/partenaire/bmw-logo-svgrepo-com.svg')}}"
                                             class="d-block w-50"
                                             alt="Partner">
                                    </div>
                                    <div class="col-3">
                                        <img src="{{url('/images/partenaire/bmw-logo-svgrepo-com.svg')}}"
                                             class="d-block w-50"
                                             alt="Partner">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                            data-bs-slide="prev">
                        <span class="carousel-prev-icon" aria-hidden="true"><i
                                class="bi bi-chevron-double-left"></i></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                            data-bs-slide="next">
                        <span class="carousel-next-icon" aria-hidden="true"><i
                                class="bi bi-chevron-double-right"></i></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>

        <section class="join_now">
            <div class="d-md-flex flex-row">
                <div class="join_now_picture col-md-6">
                    <img src="{{url('images/illustration/home/accueil_calendrier.svg')}}" alt="Calendrier">
                </div>

                <div class="join_now_form col-md-6">
                    <div class="join_now_title text-center">
                        <h2>Rejoignez nous !</h2>
                    </div>
                    <form>
                        <div class="mb-3">
                            <input type="password" class="form-control input_prenom" placeholder="Prénom">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control input_email" placeholder="@">
                        </div>
                        <div class="mb-3">
                            <div class="form-check join_now_rpg_content">
                                <input type="checkbox" class="form-check-input rgpd_acceptation">
                                <label class="form-check-label join_now_rpg" for="rgpd_acceptation">j'accepte
                                    l'utilisation
                                    des données conformément à notre
                                    <a href="/politique-de-confidentialite" class="d-inline-block"
                                       target="_blank">politique de confidentialité</a>
                                </label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn_join_now">Ma abonnée à la news</button>
                    </form>
                </div>
            </div>
        </section>

        <section class="actu d-flex align-items-center flex-column">
            <div class="actu_title text-center m-5">
                <h2>Nos derniers <span class="d-block">articles</span></h2>
            </div>
            <div
                class="actu_content container d-flex flex-column flex-md-row flex-wrap align-items-center justify-content-md-between">
                @php
                    $titres =["Symptômes menstruels","Les protections","Vivre avec ses règle"];
                    $date =["05 décembre 2022","05 décembre 2022","05 décembre 2022",];
                    $content = ["Comment soulager les crampes menstruelles : astuces et remèdes naturels",
                    "Les protections menstruelles : lesquelles choisir ?","Le sport et les règles : comment bien s’entraîner pendant cette période ?"];
                    $link= ["/blog/article/1","/blog/article/4","/blog/article/7"];
                    $images = ['/images/blog/crampe_menstruelle.jpg', '/images/home/actu/coupe_menstruelle.jpg', '/images/home/actu/sport.jpg',]
                @endphp
                @foreach($titres as $key => $titre )
                    <div class="card actu-items col">
                        <div class="img-fluid">
                            <img src="{{url($images[$key])}}" class="card-img-top" alt="article image">
                        </div>
                        <div class="card-body">
                            <div class="actu_body_content">
                                <h5 class="card-title">{{$titre}}</h5>
                                <p class="card-text">{{$content[$key]}}</p>
                            </div>
                            <span class="card-date">Le {{$date[$key]}}</span>
                            <div class="d-flex flex-row align-items-center">
                                <a href="{{url($link[$key])}}" class="btn btn-primary btn-custom btn-actu">En
                                    savoir +</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            <div class="text-center mb-5 col-12">
                <a class="btn btn-primary btn-custom btn-actu btn-more-actu" href="/blog">Voire d'autre articles</a>
            </div>

        </section>


    </div>
@stop
