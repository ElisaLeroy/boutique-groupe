
@extends ('layout');
@section('titre')
@endsection

@section('content');
{{--@dd($product->category)--}}
<div class="m-5"><h1 class="text-center text-center">Fiche du produit </h1>
</div>
<div class="container mt-6 ">
    <div class="row">
        <div class="col-md-6">
            <div class="content-box">

                <img src="{{$product->image}}" alt="Description de l'image">

            </div>
        </div>
        <div class="col-md-6 text-center ">
            <div class="content-box">
                <h2 class="mt-5">{{$product->name}}</h2>
                <div class="container mt-5">
                <ul class="list-group">
                    <li class="list-group-item">description : {{$product->description}}</li>
                    <li class="list-group-item">weight : {{$product->weight}}</li>
                    <li class="list-group-item">category_id : {{$category->type}}</li>
                    <li class="list-group-item">taste : {{$product->taste}}</li>
                    <li class="list-group-item">price : {{$product->price}}</li>
                </ul>
                </div>
                <button type="button" class="btn btn-primary btn-lg mt-5">Ajouter au panier</button>
            </div>
        </div>
    </div>
</div>
@endsection






