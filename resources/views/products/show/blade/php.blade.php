@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h2>Product Details</h2>
                    </div>
                    <div class="card-body">
                        <h3>Reference</h3>
                        <p><strong>{{ $product->ref }}</strong></p>

                        <h3>Availability</h3>
                        <p><strong>{{ $product->availability }}</strong></p>

                        <h3>Name</h3>
                        <p><strong>{{ $product->name }}</strong></p>

                        <h3>Image</h3>
                        <p><img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="img-fluid"></p>

                        <h3>Weight</h3>
                        <p><strong>{{ $product->weight }}</strong></p>

                        <h3>Quantity</h3>
                        <p><strong>{{ $product->quantity }}</strong></p>

                        <h3>Category</h3>
                        <p><strong>{{ $product->category }}</strong></p>

                        <h3>Price</h3>
                        <p><strong>${{ number_format($product->price, 2) }}</strong></p>

                        <h3>Origin</h3>
                        <p><strong>{{ $product->origine }}</strong></p>

                        <h3>Description</h3>
                        <p><strong>{{ $product->description }}</strong></p>

                        <!-- Link to edit the product -->
                        <a href="{{ route('backoffice.edit', $product->id) }}" class="btn btn-primary">Edit Product</a>

                        <!-- Link to delete the product (if needed) -->
                        <form action="{{ route('backoffice.destroy', $product->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete Product</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
