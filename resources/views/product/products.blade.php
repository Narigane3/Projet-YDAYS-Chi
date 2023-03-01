@extends('layouts.master')

@section('title','Gestion des produits du site')

@section('navbar')
    @parent
@stop

@section('content')
    <div class="container p-5">
        <div class="mb-3 d-flex justify-content-between flex-column flex-md-row">
            <div>
                <h1>Gestion des produits</h1>
            </div>
            <div class="mt-3 d-flex justify-content-between">
                <a href="/admin" class="btn btn-primary back_btn">
                    Retour
                </a>
                <a class="btn btn-outline-secondary ms-md-3" href="/admin/product/createView">
                    Ajouter
                </a>
            </div>
        </div>

        <div class="overflow-auto">
            <table class="table">
                <thead class="" id="user_table">
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Description</th>
                    <th scope="col">Catégorie</th>
                    <th scope="col">Référence</th>
                    <th scope="col">Quantité</th>
                    <th scope="col">Prix hors taxe</th>
                    <th scope="col">Taux de TVA</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @if(count($products) == 0)
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class=" col text-center">
                        <p class="fw-bold">Aucun produit</p>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                @endif
                @foreach($products as $product)

                    <tr>
                        <td>{{$product->name}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->category->name}}</td>
                        <td>{{$product->reference}}</td>
                        <td>{{$product->quantity}}</td>
                        <td>{{$product->priceHT}}</td>
                        <td>{{$product->tva->tva * 100}}%</td>
                        <td>
                            <a href="/admin/products/edit/{{$product->id}}" class="btn btn-danger back_btn">
                                Modifier
                            </a>
                        </td>
                        <td>
                            <a href="/admin/product/delete/{{$product->id}}" class="btn btn-secondary back_btn">
                                Supprimer <i class="bi bi-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
@stop
