@extends ('layout')
@section('titre')
@endsection

@section('content')
    @foreach($datas as $value)
        <div class="m-5"><h1 class="text-center text-center">Fiche du produit </h1>
        </div>
        <div class="container mt-6 ">
            <div class="row">
                <div class="col-md-6">
                    <div class="content-box">

                        <img src="{{$value->image}}" alt="Description de l'image">
                        <form action="/backoffice/{{$value->id}}" method="post">
                            @csrf

                            <button type="submit">Change</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 text-center ">
                    <div class="content-box">
                        <h2 class="mt-5">{{$value->name}}</h2>
                        <div class="container mt-5 d-flex">
                            <div>
                            <ul class="list-group">

                                <li class="list-group-item">name : {{$value->name}}
                                    <form action="/backoffice/{{$value->id}}" method="post">
                                        <button type="submit">Change</button>
                                    </form>
                                </li>
                                <li class="list-group-item">description :<br> {{$value->description}}
                                    <form action="/backoffice/{{$value->id}}" method="post">
                                        <button type="submit">Change</button>
                                    </form>
                                </li>
                                <li class="list-group-item">price : {{$value->price}}
                                    <form action="/backoffice/{{$value->id}}" method="post">
                                        <button type="submit">Change</button>
                                    </form>
                                </li>
                                <li class="list-group-item">weight : {{$value->weight}}
                                    <form action="/backoffice/{{$value->id}}" method="post">
                                        <button type="submit">Change</button>
                                    </form>
                                </ul>
                            </div> <div>
                                <ul class="list-group">

                                </li>
                                <li class="list-group-item">quantity : {{$value->quantity}}
                                    <form action="/backoffice/{{$value->id}}" method="post">
                                        <button type="submit">Change</button>
                                    </form>
                                </li>
                                <li class="list-group-item">avaiability : {{$value->avaiability}}
                                    <form action="/backoffice/{{$value->id}}" method="post">
                                        <button type="submit">Change</button>
                                    </form>
                                </li>
                                <li class="list-group-item">category : {{$value->category}}
                                    <form action="/backoffice/{{$value->id}}" method="post">
                                        <button type="submit">Change</button>
                                    </form>
                                </li>
                                <li class="list-group-item">taste : {{$value->taste}}
                                    <form action="/backoffice/{{$value->id}}" method="post">
                                        <button type="submit">Change</button>
                                    </form>
                                </li>
                            </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection






