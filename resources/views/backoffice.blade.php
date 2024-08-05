@extends ('layout-backoffice')

@section('content')



    <div class="container">


        <div class="row">
            <div class="col-12">
                <div class="card">



                    <div class="card-body">
                        <div class="text-center d-flex justify-content-between align-items-center">
                            <h1 class="card-title m-b-0 fw-light">Éditer le catalogue</h1>
                            <a href="/backoffice/create" class="btn btn-info">Ajouter un article</a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table ">
                            <thead class="thead-light">
                            <tr>
                                <th></th>
                                <th scope="col" class="h5">ID</th>
                                <th scope="col" class="h5">Catégorie</th>
                                <th scope="col" class="h5">Nom</th>
                                <th scope="col" class="h5">Prix</th>
                                <th scope="col" class="h5">Stock</th>
                                <th scope="col" class="h5">Poids</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody class="customtable">
                            @foreach($catalogue as $produit)
                                <tr>
                                    <th></th>
                                    <td class="h5">{{$produit->id}}</td>
                                    <td>{{$produit->title}}</td>
                                    <td>{{$produit->name}}</td>
                                    <td>{{$produit->formatPrice($produit->price)}}€</td>
                                    <td>{{$produit->quantity}}</td>
                                    <td>{{$produit->formatWeight($produit->weight)}} Kg</td>
                                    <form action="#" method="post">
                                        @csrf
                                        <th><input type="submit" class="btn btn-warning" name="{{$produit->id}}" value="Modifier"></th>
                                    </form>
                                    <form action="/backoffice/{{$produit->id}}" method="post">
                                        @csrf
                                        <th><input type="submit" class="btn btn-danger" name="" value="Supprimer"></th>
                                    </form>
{{--                                    <input type="hidden" name="id" value="{{$produit->id}}">--}}
                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>













@endsection
