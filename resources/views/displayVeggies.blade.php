@extends('layout')
@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col text-center">
                <h1 class="display-4 font-weight-bold">Les légumes</h1>
            </div>
        </div>
        <div class="row mt-4">
            @foreach ($catalog as $product)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <h1 class="text-center">{{$product->name}}</h1>
                        <p class="text-center text-muted">Détails du produit</p>
                        <img src="{{$product->productImage}}" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title">Prix : {{$product->price}}€</h5>
                            <p class="card-text">{{$product->productDescription}}</p>
                            <a href="product/{{$product->id}}" class="btn btn-primary">Voir plus de détails</a>
                            <a href="" class="btn btn-success">Ajouter au panier</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
