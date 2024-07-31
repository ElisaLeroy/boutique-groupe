@extends('layout')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="/styles.css">
</head>
<div class="container mt-5">
    <div class="row">
        <div class="col text-center">
            <h1 class="display-4 font-weight-bold">Product List</h1>
        </div>
    </div>
</div>

@foreach ($listTitle as $products)

<div class="container mt-4">
    <div class="row">
        <div class="col">
            <h1 class="text-center">{{$products}}</h1>
            <p class="text-center text-muted">Browse our exclusive collection of products</p>
        </div>
    </div>

    <!-- Product list -->
    <div class="row">
        <!-- Example of product card (repeat this for each product) -->
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product Image">
                <div class="card-body">
                    <h5 class="card-title">Product Name</h5>
                    <p class="card-text">Brief description of the product.</p>
                    <a href="#" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>
        @endforeach

        <!-- Repeat ends -->
    </div>
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</html>