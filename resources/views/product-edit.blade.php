@extends ('layout')
@section('titre')
@endsection

@section('content')
    @dump($_POST)
    @foreach($datas as $value)
        <div class="m-5"><h1 class="text-center text-center">Fiche du produit </h1>
        </div>
        <form action="/backoffice/edit/{{$value->id}}" method="post">
            @csrf
            <div class="container mt-6 ">
                <div class="row">
                    <div class="col-md-6">
                        <div class="content-box">
                            <img src="{{$value->image}}" alt="Description de l'image">
                            <p>Url de l'image : <br></p>
                            <input type="text" name="image" value="{{$value->image}}">
                        </div>
                        <center>
                            <p>Valid change</p>
                            <button type="submit">Change</button>
                        </center>
                    </div>
                    <div class="col-md-6 text-center ">
                        <div class="content-box">
                            <h2 class="mt-5">{{$value->name}}</h2>
                            <div class="container mt-5 d-flex">
                                <div>
                                    <ul class="list-group">
                                        <li class="list-group-item">id :<br><input type="hidden" name="name" value="{{$value->id}}">
                                        </li>
                                        <li class="list-group-item">name :<br><input type="text" name="name" value="{{$value->name}}">
                                        </li>
                                        <li class="list-group-item">description :<br> <input type="text" name="description" value="{{$value->description}}">
                                        </li>
                                        <li class="list-group-item">price : <br><input type="text" name="price" value="{{$value->price}}">
                                        </li>
                                        <li class="list-group-item">weight : <br><input type="text" name="weight" value="{{$value->weight}}">
                                    </ul>
                                </div>
                                <div>
                                    <ul class="list-group">
                                        </li>
                                        <li class="list-group-item">quantity : <br><input type="text" name="quantity" value="{{$value->quantity}}">
                                        </li>
                                        <li class="list-group-item">availability : <br><input type="text" name="availability" value="{{$value->availability}}">
                                        </li>
                                        <li class="list-group-item">category : <br><input type="text" name="category" value="{{$value->category}}">
                                        </li>
                                        <li class="list-group-item">taste : <br><input type="text" name="taste" value="{{$value->taste}}">
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </form>
    @endforeach
@endsection






