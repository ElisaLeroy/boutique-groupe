
@extends ('layout');

@section('content');

<div class="m-5"><h1 class="text-center text-center">Fiche du produit {{$id}}</h1>
</div>



<div class="container mt-6 ">
    <div class="row">
        <div class="col-md-6">
            <div class="content-box">

                <img src="https://www.lamaisondubananier.com/1129314-thickbox_default/hylocereus-pitahaya-fruit-du-dragon.jpg" alt="Description de l'image">

            </div>
        </div>
        <div class="col-md-6 text-center ">
            <div class="content-box">
                <h2 class="mt-5">Fruit du dragon</h2>
                <div class="container mt-5">
                <ul class="list-group">
                    <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                    <li class="list-group-item">A fourth item</li>
                    <li class="list-group-item">And a fifth one</li>
                </ul>
                </div>
                <button type="button" class="btn btn-primary btn-lg mt-5">Ajouter au panier</button>
            </div>
        </div>
    </div>
</div>

@endsection






