@extends ('layout')
@section('titre')
@endsection

@section('content')
        <div class="m-5"><h1 class="text-center text-center">Fiche du produit </h1>
        </div>
        <form action="/backoffice/edit/{{$product->id}}" method="post">
            @csrf
            @method('PUT')
            <div class="container mt-6 ">
                <div class="row">
                    <div class="col-md-6">
                        <div class="content-box">
                            <img src="{{$product->image}}" alt="Description de l'image">
                            <p>Url de l'image : <br></p>
                            <input type="text" name="image" value="{{$product->image}}">
                        </div>
                        <center>
                            <p>Valid change</p>
                            <button type="submit">Change</button>
                        </center>
                    </div>
                    <div class="col-md-6 text-center ">
                        <div class="content-box">
                            <h2 class="mt-5">{{$product->name}}</h2>
                            <div class="container mt-5 d-flex">
                                <div>
                                    <ul class="list-group">
                                        <li class="list-group-item">id :<br><input type="hidden" name="name"
                                                                                   value="{{$product->id}}">
                                        </li>
                                        <li class="list-group-item">name :<br><input type="text" name="name"
                                                                                     value="{{$product->name}}">
                                        </li>
                                        <li class="list-group-item">description :<br> <input type="text"
                                                                                             name="description"
                                                                                             value="{{$product->description}}">
                                        </li>
                                        <li class="list-group-item">price : <br><input type="text" name="price"
                                                                                       value="{{$product->price}}">
                                        </li>
                                        <li class="list-group-item">weight : <br><input type="text" name="weight"
                                                                                        value="{{$product->weight}}">
                                    </ul>
                                </div>
                                <div>
                                    <ul class="list-group">
                                        </li>
                                        <li class="list-group-item">quantity : <br><input type="text" name="quantity"
                                                                                          value="{{$product->quantity}}">
                                        </li>
                                        <li class="list-group-item">category_id : <br><input type="text" name="category_id"
                                                                                          value="{{$product->category_id}}">
                                        </li>
                                        <li class="list-group-item">taste : <br><input type="text" name="taste"
                                                                                       value="{{$product->taste}}">
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </form>
@endsection






