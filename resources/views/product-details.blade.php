
@extends ('layout');
@section('titre')
@endsection

@section('content');
@foreach($datas as $value)
<div class="m-5"><h1 class="text-center text-center">Fiche du produit </h1>
</div>
<div class="container mt-6 ">
    <div class="row">
        <div class="col-md-6">
            <div class="content-box">

                <img src="{{$value->image}}" alt="Description de l'image">

            </div>
        </div>
        <div class="col-md-6 text-center ">
            <div class="content-box">
                <h2 class="mt-5">{{$value->name}}</h2>
                <div class="container mt-5">
                <ul class="list-group">
                    <li class="list-group-item">description : {{$value->description}}</li>
                    <li class="list-group-item">weight : {{$value->weight}}</li>
                    <li class="list-group-item">category : {{$value->category}}</li>
                    <li class="list-group-item">taste : {{$value->taste}}</li>
                    <li class="list-group-item">price : {{$value->price}}</li>
                </ul>
                </div>
                <button type="button" class="btn btn-primary btn-lg mt-5">Ajouter au panier</button>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection






