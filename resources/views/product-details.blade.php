@extends ('layout')
@section('content')
    <div class="container mt-4">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    </div>


    <link rel="stylesheet" href="/styles.css">
    <div class="m-5"><h1 class="text-center text-center">Fiche du produit {{$product->name}}</h1>
    </div>



    <div class="container mt-6 ">
        <div class="row">
            <div class="col-md-6">
                <div class="content-box">

                    <img src="{{$product->image_url}}" class="img-fluid" alt="{{$product->name}}">

                </div>
            </div>
            <div class="col-md-6 text-center">
                <div class="content-box">
                    <h2 class="mt-5">{{ $product->name }}</h2>
                    <div class="container mt-5">
                        <ul class="list-group">
                            <li class="list-group-item">{{ $product->description }}</li>
                            <li class="list-group-item">{{ $product->price }}€</li>
                        </ul>
                    </div>
                    <form action="{{ route('cart.store') }}" method="post" class="mt-5">
                        {{ csrf_field() }}
                        <div class="row align-items-center justify-content-center">
                            <div class="col-auto">
                                <label for="quantity_{{$product->id}}" class="form-label">Quantité</label>
                                <input type="number" name="quantity[{{$product->id}}]" id="quantity_{{ $product->id }}" min="1" class="form-control">
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary btn-lg mt-4">Ajouter au panier</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>

@endsection






