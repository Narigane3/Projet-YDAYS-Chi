@extends('layouts.master')

@section('title',"Modification d'un produit")

@section('navbar')
    @parent
@stop

@section('content')
    <div id="containerCreateProduct">
        <div class="container p-5">
            <div class="mb-3 d-flex justify-content-between flex-column flex-md-row">
                <div>
                    <h1>Création du produit: @{{createTitle}}</h1>
                </div>
                <div class="mt-3 d-flex justify-content-between">
                    <a href="/admin/products" class="btn btn-primary back_btn">
                        Retour
                    </a>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <form method="post" action="/admin/product/edit">
                @csrf
                <div class="row mb-3">
                    <div class="col-6">
                        <label for="register-last-name">Nom :</label>
                        <input class="form-control" name="productCreateName" type="text" value="" v-model="createTitle">
                    </div>
                    <div class="col-6">
                        <label for="register-first-name">Référence :</label>
                        <input  class="form-control" name="productCreateReference" type="text" value="">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-6">
                        <label for="register-last-name">Quantitée :</label>
                        <input class="form-control" name="productCreateQuantity" type="number" value="" min="0">
                    </div>
                    <div class="col-6">
                        <label for="register-first-name">Prix hors taxe :</label>
                        <input class="form-control" name="productCreatePriceHT" type="number" value="" min="0" step="0.01">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-12">
                        <label for="register-email">Description :</label>
                        <textarea class="form-control" aria-label="With textarea" name="productCreateDescription"></textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-6">
                        <label for="register-password">Catégorie :</label>
                        <select class="custom-select mr-sm-2" name="productCreateCategory">
                            <option selected value=""></option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-6 mb-3">
                        <label for="register-password">Tva :</label>
                        <select class="custom-select mr-sm-2" name="productCreateTva">
                            <option selected value=""></option>
                            @foreach($tvas as $tva)
                                <option value="{{$tva->id}}">{{$tva->tva * 100}}%</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                @if(!$errors->isEmpty())
                    <div class="m-3 d-flex justify-content-center">
                        <div class="alert alert-danger col-12">
                            <h3>Oups..</h3>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li class="">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif

                <div class="col-12 saveCreateProduct">
                    <button type="submit" class="btn btn-success back_btn">
                        Sauvegarder
                    </button>
                </div>
            </form>
        </div>
    </div>
@stop
