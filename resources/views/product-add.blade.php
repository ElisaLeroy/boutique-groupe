@extends('layoutbackoffice')
@section('content')

    @foreach($data as $product)
        <td>{{$product->id}}</td>
        <td>{{$product->Ref}}</td>
        <td>{{$product->Availability}}</td>
        <td>{{$product->name}}</td>
        <td><img src="{{$product->image_url}}" class="img-fluid" alt="{{$product->name}}">
        </td>
        <td>{{$product->weight}}</td>
        <td>{{$product->quantity}}</td>
        <td>{{$product->category}}</td>
        <td>{{$product->price}}</td>
        <td>{{$product->origine}}</td>
        <td>{{$product->description}}</td>
    @endforeach


