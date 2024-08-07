@extends('layout')
@section('content')

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories List</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Categories List</h2>

    <table class="table table-striped table-bordered">
        <thead class="thead-dark flex-grow">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Products name</th>
        </tr>
        </thead>
        @foreach($categories as $category)
            <tbody>
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->category}}</td>
                @foreach($category->products as $product)
                    <td>{{ $product->name }}</td>
                @endforeach
            </tr>
            </tbody>
        @endforeach
    </table>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

@endsection
