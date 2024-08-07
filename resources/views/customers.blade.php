
@extends ('layout');
@section('titre')
@endsection

@section('content');

    <div class="container mt-5">
        <h1 class="text-center mb-4">Customers Details</h1>
        <form action="" method="post">
            @csrf
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Address</th>
                <th scope="col">Postal Code</th>
                <th scope="col">City</th>
                <th scope="col">Change</th>
            </tr>
            </thead>
            <tbody>
            @foreach($client as $info)
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            <tr>
                <td>{{$info->id}}</td>
                <td>{{$info->first_name}}</td>
                <td>{{$info->last_name}}</td>
                <td>{{$info->address}}</td>
                <td>{{$info->postal_code}}</td>
                <td>{{$info->city}}</td>
                <td>
                    <form action="/backoffice/customers/edit/{{$info->id}}">
                        <button>Modifier</button>
                    </form>
                    <form action="/backoffice/customers/delete/{{$info->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach

                <tr>
                    <td><input type="text" name="id"></td>
                    <td><input type="text" name="first_name"></td>
                    <td><input type="text" name="last_name"></td>
                    <td><input type="text" name="address"></td>
                    <td><input type="text" name="postal_code"></td>
                    <td><input type="text" name="city"></td>
                </tr>

            </tbody>
        </table>
            <button type="submit">Add</button>

        </form>
    </div>
@endsection






