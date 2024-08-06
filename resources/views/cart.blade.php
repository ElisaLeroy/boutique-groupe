@extends('layout')

@section('content')

<h1>Panier</h1>



<h2>Veuillez vérifier le contenu de votre panier :</h2>

<ul>
    <li>
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Article 1</h5>
                <p class="card-text">desciption</p>
                <a href="#" class="btn btn-primary">Ajouter</a>
                <a href="#" class="btn btn-danger">Supprimer</a>
            </div>
        </div>
    </li>
    <li>
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Article 2</h5>
                <p class="card-text">description</p>
                <a href="#" class="btn btn-primary">Ajouter</a>
                <a href="#" class="btn btn-danger">Supprimer</a>
            </div>
        </div>
    </li>

    <li>
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Article 3</h5>
                <p class="card-text">description</p>
                <a href="#" class="btn btn-primary">Ajouter</a>
                <a href="#" class="btn btn-danger">Supprimer</a>
            </div>
        </div>
    </li>
</ul>

<button type="button" class="btn btn-light btn-lg">Passer au paiement</button>

@endsection
