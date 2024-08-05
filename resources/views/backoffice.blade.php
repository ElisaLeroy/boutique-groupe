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
                        <form action="/backoffice/edit" method="post">
                            {{ csrf_field() }}
                            <h5 class="card-title m-b-0">Gestion des produits</h5>
                            <button type="submit" class="btn btn-primary position-absolute start-0 move-up" name="{{$productList}}" >Ajouter un
                                produit
                            </button>
                        </form>
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
                            @foreach($productList as $product)
                                <tbody class="customtable">
                                <tr>
                                    <th>
                                        <form action="{{ route('backoffice.edit', $product->id) }}" method="get">                                            {{ csrf_field() }}
                                            <input type="submit" class="btn btn-primary" value="Modifier">
                                            <input type="submit" formaction="deletepage" class="btn btn-danger" value="Supprimer">
                                        </form>
                                    </th>
                                    <td>{{$product->id}}</td>
                                    <td>{{$product->ref}}</td>
                                    <td>{{$product->availability}}</td>
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
