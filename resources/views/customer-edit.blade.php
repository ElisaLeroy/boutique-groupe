@extends('layout')

@section('titre')
    Fiche Client
@endsection

@section('content')
    <div class="m-5"><h1 class="text-center">Fiche Client</h1></div>
    <form action="{{ route('updatecustomer', ['id' => $client->id]) }}" method="POST">
        @csrf
        @method('PUT')

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="container mt-6">
            <div class="row">
                <div class="col-md-6">
                    <center>
                        <p>Valid change</p>
                        <button type="submit">Change</button>
                    </center>
                </div>
                <div class="col-md-6 text-center">
                    <div class="content-box">
                        <h2 class="mt-5">{{ $client->first_name }} {{ $client->last_name }}</h2>
                        <div class="container mt-5">
                            <div>
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        id :<br><input type="hidden" name="id" value="{{ $client->id }}">
                                    </li>
                                    <li class="list-group-item">
                                        first_name :<br><input type="text" name="first_name" value="{{ $client->first_name }}">
                                    </li>
                                    <li class="list-group-item">
                                        last_name :<br><input type="text" name="last_name" value="{{ $client->last_name }}">
                                    </li>
                                    <li class="list-group-item">
                                        address :<br><input type="text" name="address" value="{{ $client->address }}">
                                    </li>
                                    <li class="list-group-item">
                                        postal_code :<br><input type="text" name="postal_code" value="{{ $client->postal_code }}">
                                    </li>
                                    <li class="list-group-item">
                                        city :<br><input type="text" name="city" value="{{ $client->city }}">
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
