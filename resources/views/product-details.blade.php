
@extends ('layout')

@section('content')

{{--    @dd($productsById)--}}

<div class="m-5"><h1 class="text-center text-center">Fiche du produit </h1>
</div>


    <div class="container mt-6 ">
        <div class="row">
            <div class="col-md-6">
                <div class="content-box">

                    <img src="{{$product->productImage}}" alt="Description de l'image">

                </div>
            </div>
            <div class="col-md-6 text-center ">
                <div class="content-box">
                    <h2 class="mt-5">{{$product->name}}</h2>
                    <div class="container mt-5">
                        <ul class="list-group">
                            <li class="list-group-item">Price : {{$product->price}}€</li>
                            <li class="list-group-item">{{$product->productDescription}}</li>
                            <li class="list-group-item">Categorie : {{$product->productCategory}}</li>
                            <li class="list-group-item">Meilleur en : {{$product->season}}</li>
                            <li class="list-group-item">Origine : {{$product->origin}}</li>
                        </ul>
                    </div>
                    @if($product->quantity > 0)
                        <button type="button" class="btn btn-primary btn-lg mt-5">Ajouter au panier</button>

                    @else
                        <button type="button" class="btn btn-danger btn-lg mt-5" disabled>Rupture de stock !</button>
                    @endif
                </div>
            </div>
        </div>
    </div>





@endsection






