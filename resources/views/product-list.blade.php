@extends('layout')
@section('titre')
    product-list
@endsection
@section('content')
@dump($products)
    <div class="container mt-5">
        <div class="row">
            <div class="col text-center">
                <h1 class="display-4 font-weight-bold">Product List</h1>
            </div>
        </div>
        <div>
            <form action="/product/name" method="get">
                <button type="submit" class="btn btn-primary btn-lg mt-5">SORT BY NAME</button>
            </form>
            </div><div>
            <form action="/product/price" method="get">
                <button type="submit" class="btn btn-primary btn-lg mt-5">SORT BY PRICE</button>
            </form>
        </div>
        <div class="row mt-4">
            @foreach ($products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <h1 class="text-center">{{$product->name}}</h1>
                        <p class="text-center text-muted">Blablabla achete</p>
                        <img src="{{$product->image}}" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title">{{$product->name}}</h5>
                            <p class="card-text">{{$product->description}}</p>
                            <a href="product/{{$product->id}}" class="btn btn-primary">View Details</a>

                            <p class="card-text">{{$product->price}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
