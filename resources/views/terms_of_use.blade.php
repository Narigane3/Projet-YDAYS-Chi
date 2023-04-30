{{-- Callback layout master  --}}
@extends('layouts.master')

@section('head')
    {{-- Give more info into head --}}
    {{-- Not index this page form Google --}}
    <meta name="robot" content="noindex">
@stop

@section('title', 'mention légale')

@section('navbar')
    @parent
    {{-- call nav bar on this page --}}
@stop

@section('content')
    <div class="master_content mt-5 pt-5 mb-5" id="terms_of_use">
        <div class="container">
            <h1>Mention légale</h1>
        </div>
        <div class="container">
            <ul class="list-unstyled">
                <li><p><span class="fw-bold">Nom de l'entreprise :</span> calendrier-chi</p></li>
                <li><p><span class="fw-bold">Adresse :</span> 1 rue de la paix, 75000 Paris</p></li>
                <li><p><span class="fw-bold">Téléphone :</span> 01 23 45 67 89</p></li>
                <li><p><span class="fw-bold">E-mail :</span><a href="mailto:projet.chi.contact@gmail.com">projet.chi.contact@gmail.com</a></p></li>
                <li><p><span class="fw-bold">Capital social :</span> 1000€</p></li>
                <li><p><span class="fw-bold" id="Conditions_utilisation">Numéro d'identification TVA :</span> FR 00 000000000</p></li>
                <li><p><span class="fw-bold">Numéro d'inscription au registre du commerce et des sociétés (RCS) :</span>
                        000 000 000 00000</p></li>
                <li><p><span class="fw-bold">Nom du responsable de la publication :</span>Laura Puig Mégais</p></li>
                <li><p><span class="fw-bold">Hébergeur du site :</span>Ynov Lyon</p></li>
            </ul>

            <h2>Conditions d'utilisation :</h2>
            <h3>Acceptation des conditions d'utilisation</h3>
            <p>L'utilisation du site web calendrier-chi est soumise à l'acceptation des présentes conditions
                d'utilisation. En accédant au site web, vous acceptez les termes et conditions énoncés dans les
                présentes conditions d'utilisation.</p>

            <h3>Propriété intellectuelle</h3>
            <p>Le contenu du site web calendrier-chi, y compris, mais sans s'y limiter, les textes, graphiques, images,
                vidéos, logos, icônes et logiciels, est la propriété de calendrier-chi ou de ses fournisseurs de contenu
                et est protégé par les lois françaises et internationales sur le droit d'auteur.</p>

            <h3>Utilisation du site web</h3>
            <p>Vous êtes autorisé à accéder et à utiliser le site web calendrier-chi uniquement à des fins personnelles
                et non commerciales. Vous ne pouvez pas copier, reproduire, distribuer, afficher publiquement, modifier
                ou créer des œuvres dérivées du contenu du site web, à moins que cela ne soit expressément autorisé par
                calendrier-chi.</p>


            <h3>Limitation de responsabilité</h3>
            <p>Le site web calendrier-chi est fourni "tel quel", sans garantie d'aucune sorte, expresse ou implicite.
                Calendrier-chi ne garantit pas que le site web sera exempt d'erreurs ou d'interruptions, ni que le site
                web sera disponible à tout moment ou à tout endroit.</p>

            <h3>Liens vers des sites tiers</h3>
            <p>Le site web calendrier-chi peut contenir des liens vers des sites web tiers. Ces liens sont fournis
                uniquement pour votre commodité. Calendrier-chi n'a aucun contrôle sur le contenu de ces sites web tiers
                et décline toute responsabilité quant à leur contenu ou à leur utilisation.</p>

            <h3>Modification des conditions d'utilisation</h3>
            <p>Calendrier-chi se réserve le droit de modifier les présentes conditions d'utilisation à tout moment et
                sans préavis. Il vous incombe de consulter régulièrement les conditions d'utilisation pour être informé
                de tout changement.</p>

            <h3>Droit applicable et juridiction compétente</h3>
            <p>Les présentes conditions d'utilisation sont régies et interprétées conformément aux lois françaises.
                Tout litige découlant des présentes conditions d'utilisation sera soumis à la juridiction exclusive des
                tribunaux français.</p>

            <p>En utilisant le site web calendrier-chi, vous reconnaissez avoir lu, compris et accepté les présentes
                conditions d'utilisation.</p>

        </div>
    </div>
@stop
