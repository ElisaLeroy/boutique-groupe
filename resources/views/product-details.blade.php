
@extends ('layout')

@section('content')



    <div class="container mt-6 ">
    <div class="row">
        <div class="col-md-6">
            <div class="content-box">

                <img src="{{$catalogue->imgURL}}" alt="Description de l'image" class="img-fluid">

            </div>
        </div>
        <div class="col-md-6 text-center ">
            <div class="content-box">
                <h2 class="mt-5">{{$catalogue->name}}</h2>
                <div class="container mt-5">
                <ul class="list-group">
                    <li class="list-group-item">Prix : {{$catalogue->formatPrice($catalogue->price)}} €</li>
                    <li class="list-group-item">Poids : {{$catalogue->formatWeight($catalogue->weight)}} Kg</li>
                    <li class="list-group-item">{{$catalogue->description}}</li>
                </ul>
                </div>
                <button type="button" class="btn btn-primary btn-lg mt-5">Ajouter au panier</button>
            </div>
        </div>
    </div>
</div>



@endsection






