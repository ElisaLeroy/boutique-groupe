@extends('layout')
@section('content')
    <div class="m-5"><h1 class="text-center text-center">Vérifiez avant de supprimer </h1>
    </div>
    <div class="container mt-6 ">
        <div class="row">
            <div class="col-md-6">
                <div class="content-box">

                    <img src="{{$productById->productImage}}" alt="Description de l'image">

                </div>
            </div>
            <div class="col-md-6 text-center ">
                <div class="content-box">
                    <h2 class="mt-5">{{$productById->name}}</h2>
                    <div class="container mt-5">
                        <ul class="list-group">
                            <li class="list-group-item">Price : {{$productById->price}}€</li>
                            <li class="list-group-item">{{$productById->productDescription}}</li>
                            <li class="list-group-item">Categorie : {{$productById->productCategory}}</li>
                            <li class="list-group-item">Meilleur en : {{$productById->season}}</li>
                            <li class="list-group-item">Origine : {{$productById->origin}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <a href="{{url("backoffice/delete-product")}}" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Oui je veux effacer ce produit !</span></a>
    </div>


@endsection
