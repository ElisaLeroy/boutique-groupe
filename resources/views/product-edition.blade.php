@extends('layoutbackoffice')
@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Modifier un produit</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('backoffice.update', $product->id) }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="ref">Reference</label>
                                <input type="text" name="ref" class="form-control" id="ref" value="{{ $product->ref }}" required>
                            </div>
                            <div class="form-group">
                                <label for="availability">Disponibilité</label>
                                <input type="text" name="availability" class="form-control" id="availability" value="{{ $product->availability }}" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Nom</label>
                                <input type="text" name="name" class="form-control" id="name" value="{{ $product->name }}" required>
                            </div>
                            <div class="form-group">
                                <label for="image_url">Image</label>
                                <input type="text" name="image_url" class="form-control" id="image_url" value="{{ $product->image_url }}" required>
                            </div>
                            <div class="form-group">
                                <label for="weight">Poids</label>
                                <input type="text" name="weight" class="form-control" id="weight" value="{{ $product->weight }}" required>
                            </div>
                            <div class="form-group">
                                <label for="quantity">Quantité</label>
                                <input type="text" name="quantity" class="form-control" id="quantity" value="{{ $product->quantity }}" required>
                            </div>
                            <div class="form-group">
                                <label for="category">Catégorie</label>
                                <input type="text" name="category" class="form-control" id="category" value="{{ $product->category }}" required>
                            </div>
                            <div class="form-group">
                                <label for="price">Prix</label>
                                <input type="text" name="price" class="form-control" id="price" value="{{ $product->price }}" required>
                            </div>
                            <div class="form-group">
                                <label for="origine">Origine</label>
                                <input type="text" name="origine" class="form-control" id="origine" value="{{ $product->origine }}" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" class="form-control" id="description" rows="5" required>{{ $product->description }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Mettre à jour le produit</button>
                        </div>
                        <div class="col-md-6">
                            <table class="table table-bordered">
                                <tbody>
                                <tr>
                                    <th>Reference</th>
                                    <td>{{ $product['ref'] }}</td>
                                </tr>
                                <tr>
                                    <th>Disponibilité</th>
                                    <td>{{ $product['availability'] }}</td>
                                </tr>
                                <tr>
                                    <th>Nom</th>
                                    <td>{{ $product['name'] }}</td>
                                </tr>
                                <tr>
                                    <th>Image</th>
                                    <td><img src="{{ $product['image_url'] }}" alt="{{ $product['name'] }}" class="img-fluid"></td>
                                </tr>
                                <tr>
                                    <th>Poids</th>
                                    <td>{{ $product['weight'] }}</td>
                                </tr>
                                <tr>
                                    <th>Quantité</th>
                                    <td>{{ $product['quantity'] }}</td>
                                </tr>
                                <tr>
                                    <th>Catégorie</th>
                                    <td>{{ $product['category'] }}</td>
                                </tr>
                                <tr>
                                    <th>Prix</th>
                                    <td>{{ $product['price'] }}</td>
                                </tr>
                                <tr>
                                    <th>Origine</th>
                                    <td>{{ $product['origine'] }}</td>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <td>{{ $product['description'] }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
