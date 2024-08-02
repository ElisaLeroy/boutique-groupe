@extends('layoutbackoffice')
@section('content')
    <style>
        .move-up {
            margin-top: -20px;
        }


    </style>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body text-center">
                        <form action="#" typeof="submit">
                            <h5 class="card-title m-b-0">Gestion des produits</h5>
                            <button type="submit" class="btn btn-primary position-absolute start-0 move-up">Ajouter un
                                produit
                            </button>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-light">
                            <tr>
                                <th>
                                    <label class="customcheckbox m-b-20">
                                        <input type="checkbox" id="mainCheckbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </th>
                                <th scope="col">ID</th>
                                <th scope="col">Ref</th>
                                <th scope="col">Disponibilité</th>
                                <th scope="col">Nom du produit</th>
                                <th scope="col">Image</th>
                                <th scope="col">Poids</th>
                                <th scope="col">Quantité</th>
                                <th scope="col">Catégorie</th>
                                <th scope="col">Prix</th>
                                <th scope="col">Origine</th>
                                <th scope="col">Description</th>
                            </tr>
                            </thead>
                            @foreach($listTitle as $product)

                                <tbody class="customtable">
                                <tr>
                                    <th>
                                        <input type="submit" class="btn btn-primary" value="Modifier">
                                        <input type="submit" class="btn btn-danger" value="Supprimer">
                                    </th>
                                    <td>{{$product->id}}</td>
                                    <td>{{$product->Ref}}</td>
                                    <td>{{$product->Availability}}</td>
                                    <td>{{$product->name}}</td>
                                    <td><img src="{{$product->image_url}}" class="img-fluid" alt="{{$product->name}}">
                                    </td>
                                    <td>{{$product->weight}}</td>
                                    <td>{{$product->quantity}}</td>
                                    <td>{{$product->category}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->origine}}</td>
                                    <td>{{$product->description}}</td>
                                </tr>
                                @endforeach
                                </tbody>
                        </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
