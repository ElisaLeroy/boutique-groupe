
@extends ('layout')

@section('content')

@foreach($catalogue as $produit)

    @if($id == $produit->id)

<div class="container mt-6 ">
    <div class="row">
        <div class="col-md-6">
            <div class="content-box">

                <img src="{{$produit->imgURL}}" alt="Description de l'image">

            </div>
        </div>
        <div class="col-md-6 text-center ">
            <div class="content-box">
                <h2 class="mt-5">{{$produit->name}}</h2>
                <div class="container mt-5">
                <ul class="list-group">
                    <li class="list-group-item">Prix : {{$produit->price}} €</li>
                    <li class="list-group-item">Poids : {{$produit->weight}} Kg</li>
                    <li class="list-group-item">{{$produit->description}}</li>
                </ul>
                </div>
                <button type="button" class="btn btn-primary btn-lg mt-5">Ajouter au panier</button>
            </div>
        </div>
    </div>
</div>
    @endif
@endforeach

@endsection






