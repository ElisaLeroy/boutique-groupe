
@extends ('layout');

@section('content');
<link rel="stylesheet" href="/styles.css">
<div class="m-5"><h1 class="text-center text-center">Fiche du produit {{$product->name}}</h1>
</div>



<div class="container mt-6 ">
    <div class="row">
        <div class="col-md-6">
            <div class="content-box">

                <img src="{{$product->image_url}}" class="img-fluid" alt="{{$product->name}}">

            </div>
        </div>
        <div class="col-md-6 text-center ">
            <div class="content-box">
                <h2 class="mt-5">{{$product->name}}</h2>
                <div class="container mt-5">
                <ul class="list-group">
                    <li class="list-group-item">{{$product->description}}</li>

                </ul>
                </div>
                <button type="button" class="btn btn-primary btn-lg mt-5">Ajouter au panier</button>
            </div>
        </div>
    </div>
</div>

@endsection






