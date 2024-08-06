@extends('layout')
@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col text-center">
                <h1 class="display-4 font-weight-bold">Product List</h1>
            </div>
        </div>
        <div class="row mt-4">
            @foreach ($catalog as $product)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <h1 class="text-center">{{$product->name}}</h1>
                        <p class="text-center text-muted">Browse our exclusive collection of products</p>
                        <img src="{{$product->productImage}}" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title">Price : {{$product->price}}€</h5>
                            <p class="card-text">{{$product->productDescription}}</p>
                            <a href="product/{{$product->id}}" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>

@endsection
