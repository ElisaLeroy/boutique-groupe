@extends('layoutbackoffice')

@section('content')
    <div class="container mt-4">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    </div>

    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Ajouter un nouveau produit</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('backoffice.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="ref">Ref</label>
                                <input type="text" name="ref" class="form-control" id="ref" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="availability">Disponibilité</label>
                                <input type="text" name="availability" class="form-control" id="availability" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="name">Nom</label>
                                <input type="text" name="name" class="form-control" id="name" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="image_url">Image</label>
                                <input type="text" name="image_url" class="form-control" id="image_url" >
                            </div>

                            <div class="form-group mb-3">
                                <label for="weight">Poids</label>
                                <input type="number" name="weight" class="form-control" id="weight" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="quantity">Quantité</label>
                                <input type="number" name="quantity" class="form-control" id="quantity"  required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="category">Catégorie</label>
                                <input type="text" name="category" class="form-control" id="category" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="price">Prix</label>
                                <input type="number" step="0.01" name="price" class="form-control" id="price"  required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="origine">Origine</label>
                                <input type="text" name="origine" class="form-control" id="origine">
                            </div>

                            <div class="form-group mb-3">
                                <label for="description">Description</label>
                                <textarea name="description" class="form-control" id="description" rows="4" ></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary">Créer nouveau produit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
