@extends("layouts.admin")

@section('title','Gestion des utilisateurs')

@section('navbar')
    @parent
@stop

@section('content')
    <div id="remover">
        <div class="modal fade" id="modale_supp" tabindex="-1" aria-labelledby="modale_supp" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <form action="/admin/newsletter/delete/" method="post">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modal_supp">Suppression des information du contact</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>La suppression est definitive mercie de bien vouloir confirmé.</p>
                            @csrf
                            <input v-bind:value="remove_id" type="hidden" id="supp_item" name="data_remove_id" value="">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                            <button type="submit" class="btn btn-danger" id="supp_conf">Confirmer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="container p-5">
            <div class="mb-3 d-flex justify-content-between flex-column flex-md-row">
                <div>
                    <h1>Carnet d'adresses</h1>
                </div>
                <div class="mt-3 d-flex justify-content-between">
                    <a href="/admin" class="btn btn-primary back_btn">
                        <span><i class="bi bi-box-arrow-left"></i></span>
                        Retour
                    </a>
                    <a href="/admin/newsletter/export" class="mx-3 btn btn-primary back_btn">
                        <span><i class="bi bi-download"></i></span>
                        Exporter
                    </a>
                </div>
            </div>
            <div class="overflow-auto">
                {{-- affiche un message de réussite de la supprsion --}}
                @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Suppression réussie!</strong> {{session()->get('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @elseif(session()->has('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Suppression échouée!</strong> {{session()->get('error')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <form method="post" action="/admin/newsletter/search">
                    @csrf
                    <div class="search-form col-12 d-flex flex-wrap flex-md-nowrap flex-md-row justify-content-center">
                        <div class="col-auto col-md-4 m-3">
                            <label for="search_name">Nom :</label>
                            <input class="form-control" type="text" value="{{old('name')}}" name="name" id="search_name"
                                   placeholder="nom">
                        </div>

                        <div class="col-auto col-md-4 m-3">
                            <label for="search_email">E-mail :</label>
                            <input class="form-control" type="email" value="{{old('email')}}" name="email"
                                   id="search_email"
                                   placeholder="email">
                        </div>
                        <div class="pt-4 m-3">
                            <button class="btn btn-primary back_btn" id="search_btn" type="submit">Rechercher <i
                                    class="bi bi-search ms-2"></i></button>
                        </div>
                    </div>
                </form>

                <table class="table">
                    <thead class="" id="user_table">
                    <tr>
                        <th scope="col">Nom</th>
                        <th scope="col"></th>
                        <th scope="col">Email</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($newsletters)<1)
                        <td></td>
                        <td></td>
                        <td class=" col text-center">
                            <p class="fw-bold">La liste est vide</p>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    @endif
                    @foreach($newsletters as $newsletter)
                        <tr>
                            <td>{{$newsletter->name}}</td>
                            <td></td>
                            <td>{{$newsletter->email}}</td>
                            <td>
                                <div class="d-flex justify-content-end">
                                    <div>
                                        <a href="#" @click="setId" class="remove_user" data-bs-toggle="modal"
                                           data-bs-target="#modale_supp">
                                            <i class="bi bi-eraser-fill" data-user_id="{{$newsletter->id}}"></i>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center justify-content-md-end mt-3 me-md-5">
                {{ $newsletters->links() }}
            </div>

        </div>
    </div>
@stop
