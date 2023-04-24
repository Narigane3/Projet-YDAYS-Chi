{{-- Callback layout master  --}}
@extends('layouts.master')

@section('head')
    {{-- Give more info into head --}}
    {{-- Not index this page form Google --}}
    <meta name="robot" content="noindex">
@stop

@section('title', 'Politique de confidentialité des calandriez')

@section('navbar')
    @parent
    {{-- call nav bar on this page --}}
@stop

@section('content')
    <div class="master_content mt-5 pt-5 mb-5" id="privacy_policy">
        <div class="container">
            <h1>Politique de confidentialité</h1>
        </div>
        <div class="container">
            <p>Politique de confidentialité
                La protection de votre vie privée est importante pour nous. Cette politique de confidentialité explique
                comment nous collectons, utilisons, stockons et divulguons les informations que nous recueillons à votre
                sujet lorsque vous utilisez notre site web [nom de votre site].
                Collecte de l'information
            </p>
            <p>Nous collectons des informations lorsque vous vous inscrivez sur notre site, lorsque vous passez une
                commande, lorsque vous vous abonnez à notre newsletter, lorsque vous remplissez un formulaire ou lorsque
                vous nous contactez par e-mail. Les informations collectées incluent votre nom, votre adresse e-mail,
                votre adresse postale et votre numéro de téléphone.</p>

            <p>En outre, nous recevons et enregistrons automatiquement des informations à partir de votre ordinateur et
                navigateur, y compris votre adresse IP, vos logiciels et votre matériel, ainsi que la page que vous
                demandez.</p>

            <p>Utilisation des informations
                Toutes les informations que nous recueillons auprès de vous peuvent être utilisées pour :</p>

            <p>Personnaliser votre expérience et répondre à vos besoins individuels
                Fournir un contenu publicitaire personnalisé
                Améliorer notre site web
                Améliorer le service client et vos besoins de support
                Vous contacter par e-mail
                Administrer un concours, une promotion, une enquête ou d'autres fonctionnalités du site
                Divulgation à des tiers</p>

            <p>Nous ne vendons, n'échangeons et ne transférons pas vos informations personnelles identifiables à des
                tiers. Cela ne comprend pas les tierces parties de confiance qui nous aident à exploiter notre site web
                ou à mener nos affaires, tant que ces parties conviennent de garder ces informations
                confidentielles.</p>

            <p>Nous croyons qu'il est nécessaire de partager des informations afin d'enquêter, de prévenir ou de prendre
                des mesures concernant des activités illégales, fraudes présumées, situations impliquant des menaces
                potentielles à la sécurité physique de toute personne, violations de nos conditions d'utilisation, ou
                quand la loi nous y oblige.</p>

            <p>Protection des informations
                Nous mettons en œuvre une variété de mesures de sécurité pour préserver la sécurité de vos informations
                personnelles. Nous utilisons un cryptage à la pointe de la technologie pour protéger les informations
                sensibles transmises en ligne. Nous protégeons également vos informations hors ligne.</p>

            <p>Seuls les employés qui ont besoin d'effectuer un travail spécifique (par exemple, la facturation ou le
                service à la clientèle) ont accès aux informations personnelles identifiables. Les ordinateurs et
                serveurs utilisés pour stocker des informations personnelles identifiables sont conservés dans un
                environnement sécurisé.</p>

            <p>Utilisation de cookies
                Nous utilisons des cookies pour comprendre et enregistrer vos préférences pour des visites ultérieures,
                tenir compte des publicités et compiler des données agrégées sur le trafic du site et l'interaction du
                site afin de proposer de meilleures expériences et outils du site à l'avenir.</p>

            <p>Révocation de votre consentement
                Si vous souhaitez révoquer votre consentement à la collecte, l'utilisation ou la divulgation de vos
                informations personnelles, veuillez nous contacter à l'adresse e-mail fournie ci-dessous.</p>

            <a href="mailto:projet.chi.contact@gmail.com">projet.chi.contact@gmail.com</a>

        </div>
    </div>
@stop
