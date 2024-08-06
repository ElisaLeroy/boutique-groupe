@extends('layout')
@section('content')


<div class="container mt-5">
    <div class="row">
        <div class="col text-center">
            <h1 class="display-4 font-weight-bold">Product List</h1>
        </div>
    </div>
    <div class="row mt-4">

        @foreach ($catalogue as $produit)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <h1 class="text-center">{{$produit->title}}</h1>
                    <img src="{{$produit->imgURL}}" class="card-img-top" alt="Product Image">
                    <div class="card-body">

                        <h5 class="card-title">{{$produit->name}} </h5>
                        <p class="card-text">Prix : {{$produit->formatPrice($produit->price)}}€</p>
                        <p class="card-text">{{$produit->description}}</p>

                        <a href="/product/{{$produit->id}}" class="btn btn-primary">Fiche produit</a>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
