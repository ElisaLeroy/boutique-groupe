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
                                <th scope="col">Availability</th>
                                <th scope="col">Category</th>
                                <th scope="col">Taste</th>

                            </tr>
                            </thead>
                            <tbody class="customtable">
                            @foreach($products as $value)

                                <tr>
                                <th>
                                    <form action="/backoffice/edit/{{$value->id}}">
                                        <button>Modifier</button>
                                    </form>
                                    <form action="/backoffice/delete/{{$value->id}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">Delete</button>
                                    </form>
                                </th>
                                <td>{{$value->id}}</td>
                                <td>{{$value->name}}</td>
                                <td>{{$value->description}}</td>
                                <td>{{$value->price}}</td>
                                <td><img src="{{$value->image}}" alt=""></td>
                                <td>{{$value->weight}}</td>
                                <td>{{$value->quantity}}</td>
                                <td>{{$value->avaiability}}</td>
                                <td>{{$value->category}}</td>
                                <td>{{$value->taste}}</td>

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
