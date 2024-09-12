@extends('layout')
@section('titre')
    backoffice
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title m-b-0">Gestionaire de produits</h5>
                    </div>
                    <div class="table-responsive">
                        <form action="/backoffice/create" method="get">
                            <button type="submit">ADD</button>
                        </form>
                        <table class="table">
                            <thead class="thead-light">
                            <tr>
                                <th>
                                    </label>
                                </th>
                                <th scope="col">id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Price</th>
                                <th scope="col">Image</th>
                                <th scope="col">Weight</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">category_id</th>
                                <th scope="col">Taste</th>
                            </tr>
                            </thead>
                            <tbody class="customtable">
                            @foreach($products as $product)
                                <tr>
                                    <th>
                                        <form action="/backoffice/edit/{{$product->id}}">
                                            <button>Modifier</button>
                                        </form>
                                        <form action="/backoffice/delete/{{$product->id}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">Delete</button>
                                        </form>
                                    </th>
                                    <td>{{$product->id}}</td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->description}}</td>
                                    <td>{{$product->price}}</td>
                                    <td><img src="{{$product->image}}" alt=""></td>
                                    <td>{{$product->weight}}</td>
                                    <td>{{$product->quantity}}</td>
                                    <td>{{$product->category->type}}</td>
                                    <td>{{$product->taste}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
