@extends ('layout')
@section('titre')
@endsection

@section('content')
    @dump('toto')

        <div class="m-5"><h1 class="text-center text-center">Fiche du produit </h1>
        </div>
        <form action="/backoffice" method="post">
            @csrf
            <div class="container mt-6 ">
                <div class="row">
                    <div class="col-md-6">
                        <div class="content-box">
                            <img src="" alt="Description de l'image">
                            <p>Url de l'image : <br></p>
                            <input type="text" name="image" placeholder="">
                        </div>
                        <center>
                            <p>Valid change</p>
                            <button type="submit">Create</button>
                        </center>
                    </div>
                    <div class="col-md-6 text-center ">
                        <div class="content-box">
                            <h2 class="mt-5">name</h2>
                            <div class="container mt-5 d-flex">
                                <div>
                                    <ul class="list-group">
                                        <li class="list-group-item">name :<br><input type="text" name="name" placeholder="name">
                                        </li>
                                        <li class="list-group-item">description :<br> <input type="text" name="description" placeholder="description">
                                        </li>
                                        <li class="list-group-item">price : <br><input type="text" name="price" placeholder="price">
                                        </li>
                                        <li class="list-group-item">weight : <br><input type="text" name="weight" placeholder="weight">
                                    </ul>
                                </div>
                                <div>
                                    <ul class="list-group">
                                        </li>
                                        <li class="list-group-item">quantity : <br><input type="text" name="quantity" placeholder="quantity">
                                        </li>
                                        <li class="list-group-item">category_id : <br><input type="text" name="category_id" placeholder="category_id">
                                        </li>
                                        <li class="list-group-item">taste : <br><input type="text" name="taste" placeholder="taste">
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






