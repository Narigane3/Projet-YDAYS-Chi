@extends("layouts.admin")

@section('title','Gestion des utilisateurs')

@section('navbar')
    @parent
@stop

@section('content')
    <div id="remover">
        <div class="modal fade" id="modale_supp" tabindex="-1" aria-labelledby="modale_supp" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <form action="admin/users/delete" method="post">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modal_supp">Suppression de l'utilisateur</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>La suppression est definitive mercie de bien vouloir confirmé.</p>
                            <input v-bind:value="remove_id" type="hidden" id="supp_item" name="data_remove" value="">
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
                    <h1>Gestion des utilisateurs</h1>
                </div>
                <div class="mt-3">
                    <a href="/admin" class="btn btn-primary back_btn">
                        <span><i class="bi bi-box-arrow-left"></i></span>
                        Retour
                    </a>
                    <a class="btn btn-outline-primary" href="/admin/users/create" id="add_user">Ajouter
                        <i class="bi bi-person-add"></i>
                    </a>
                </div>
            </div>
            <div class="overflow-scroll">
                <table class="table">
                    <thead class="" id="user_table">
                    <tr>
                        <th scope="col">Nom</th>
                        <th scope="col">Prénom</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Rôle</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->firstname}}</td>
                            <td>{{$user->lastname}}</td>
                            <td>{{$user->username}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->libelle}}</td>

                            <td>
                                <div class="d-flex justify-content-end">

                                    <div class="px-3">
                                        <a href="/admin/users/edit/{{$user->id}}" class="edite_user">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="#" @click="setId" class="remove_user" data-bs-toggle="modal"
                                           data-bs-target="#modale_supp">
                                            <i class="bi bi-trash" data-user_id="{{$user->id}}"></i>
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
                {{ $users->links() }}
            </div>

        </div>
    </div>
@stop
