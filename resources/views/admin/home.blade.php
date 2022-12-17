@extends("layouts.admin")

@section('navbar')
    @parent
@stop

@section('content')
    <div class="container">
        <div class="d-flex justify-content-center justify-content-md-start mt-3">
            <h1>Accueil admin</h1>
            <hr>
        </div>

        <div class="d-flex align-items-center gap-3 flex-wrap flex-column flex-md-row mt-4 p-2">
            <!-- Menu Items -->
            <div>
                <a href="#" class="btn p-0 m-0">
                    <div
                        class="card menu_tuile d-flex justify-content-center text-white flex-column align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                             class="bi bi-image" viewBox="0 0 16 16">
                            <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                            <path
                                d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z"/>
                        </svg>
                        <h5 class="">Médiathèque</h5>
                    </div>
                </a>
            </div>

            <div>
                <a href="#" class="btn p-0 m-0">
                    <div
                        class="card menu_tuile d-flex justify-content-center text-white flex-column align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </svg>
                        <h5 class="">Gestion des produits</h5>
                    </div>
                </a>
            </div>

            <div>
                <a href="#" class="btn p-0 m-0">
                    <div
                        class="card menu_tuile d-flex justify-content-center text-white flex-column align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                        </svg>
                        <h5>Gestion des utilisateurs</h5>
                    </div>
                </a>
            </div>
        </div>
    </div>
@stop

