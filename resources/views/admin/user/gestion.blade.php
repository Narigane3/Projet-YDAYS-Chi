@extends("layouts.admin")

@section('title','Gestion des utilisateurs')

@section('navbar')
    @parent
@stop

@section('content')
    <div class="container p-5">
        <div class="mb-3 d-flex justify-content-between flex-column flex-md-row">
            <div>
                <h1>Creation d'un nouvel utilisateur <i class="bi bi-person-add"></i> </h1>
            </div>
            <div class="mt-3 text-center">
                <a href="/admin/user" class="btn btn-primary back_btn">
                    <span><i class="bi bi-box-arrow-left"></i></span>
                    Retour
                </a>
            </div>
        </div>
        <div class="mb-3">
            <div class="card pt-3 px-2 px-md-4 pb-3">
                <form @submit="" action="/admin/user/create" method="post">
                    <h4>Identité :</h4>
                    <div class="d-flex flex-md-wrap flex-column flex-md-row gap-3 mb-3 mt-4">
                        <div class="col-12 col-md-4">
                            <label for="prenom">Prénom*</label>
                            <input type="text" class="form-control" placeholder="Prénom" name="firstname" id="prenom"
                                   aria-label="prenom">
                        </div>
                        <div class="col-12 col-md-4">
                            <label for="nom">Nom*</label>
                            <input type="text" class="form-control" placeholder="Nom" name="lastname" aria-label="nom"
                                   id="nom">
                        </div>

                        <div class="col-12 col-md-4">
                            <label for="username">Username*</label>
                            <input type="text" class="form-control" placeholder="Username" name="username" id="username"
                                   aria-label="username">
                        </div>

                        <div class="col col-md-4">
                            <label for="email">Email*</label>
                            <input type="email" class="form-control" placeholder="Email" name="email" aria-label="email"
                                   id="email">
                        </div>
                        <div class="col col-md-3">
                            <label for="tel">Téléphone</label>
                            <input type="text" class="form-control" placeholder="Numéro de téléphone" name="phone"
                                   aria-label="tel" id="tel">
                        </div>

                        <div class="col col-md-4">
                            <label for="password">Mots de passe*</label>
                            <input type="password" class="form-control" placeholder="mots de passe" name="email"
                                   aria-label="password" id="password" required>
                        </div>
                        <div class="col col-md-4">
                            <label for="conf_password">Confirmation*</label>
                            <input type="password" class="form-control" placeholder="Confirmation" name="phone"
                                   aria-label="confirmation" id="conf_password" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="row">
                            <div class="col">
                                <h4>Roles :</h4>
                                <div class="form-check-inline d-flex flex-column flex-md-row gap-2">
                                    {{-- Disponible si supper admin --}}
                                    @if(auth()->user()['role_id'] === '4')
                                        <div>
                                            <input class="form-check-input" type="radio" name="role[]"
                                                   id="admin" value="3">
                                            <label for="Admin" class="form-check-label">Admin</label>
                                        </div>
                                    @endif

                                    <div>
                                        <input class="form-check-input" type="radio" name="role[]" id="edite" value="2">
                                        <label for="edite" class="form-check-label">Éditeur</label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="radio" name="role[]" id="user" value="1">
                                        <label class="form-check-label" for="edite">Utilisateur</label>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center text-md-end mt-3">
                                <button class="btn btn-primary back_btn" type="submit">Création</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
@stop
