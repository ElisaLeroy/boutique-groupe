@extends ('layout-backoffice')

@section('content')

    <div class="container bg-white">
        <div class="row ">
            <div class="col-12">
                <div class="container">

                    {{--FORM--}}
                    <div class="container m-3 ">
                        <form class="row g-3" action="/backoffice/update/{{$catalogue->id}}" method="post">
                            @csrf
                            @method('PUT')
                            <h1 class="fw-light text-center mb-5">Modifier un article</h1>
                            <div class="col-md-6">
                                <label for="title" class="form-label">Catégorie</label>
                                <select id="title" class="form-select" name="title">
                                    <option selected>{{$catalogue->title}}</option>
                                    <option value="Télescope">Télescope</option>
                                    <option value="Lentille">Lentille</option>
                                    <option value="Jumelles">Jumelles</option>
                                    <option value="Filtres">Filtres</option>
                                    <option value="Acessoire">Acessoire</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="price" class="form-label">Prix en centimes</label>
                                <input type="number" class="form-control" id="price" name="price" value="{{$catalogue->price}}" required>
                            </div>
                            <div class="col-12">
                                <label for="name" class="form-label">Nom de l'article</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{$catalogue->name}}" required>
                            </div>
                            <div class="col-12">
                                <label for="imgURL" class="form-label">URL de l'image</label>
                                <input type="text" class="form-control" id="imgURL" name="imgURL" value="{{$catalogue->imgURL}}" required>
                            </div>
                            <div class="col-md-4">
                                <label for="weight" class="form-label">Poids en grammes</label>
                                <input type="number" class="form-control" id="weight" name="weight" value="{{$catalogue->weight}}" required>
                            </div>
                            <div class="col-md-4">
                                <label for="quantity" class="form-label">Stock</label>
                                <input type="number" class="form-control" id="quantity" name="quantity" value="{{$catalogue->quantity}}" required>
                            </div>
                            <div class="col-md-4">
                                <label for="availability" class="form-label">Disponible à la vente <br><br>(0 si indisponible, 1 si disponible)</label>
                                <input type="number" min="0" max="1" value="{{$catalogue->availability}}" required>
                            </div>
                            <input type="hidden" name="category" value="1">
                            <div class="col-12">
                                <label for="description" class="form-label">Description de l'article</label>
                                <textarea name="description" id="description" cols="20" rows="5" class="form-control" required>{{$catalogue->description}}</textarea>
                            </div>


                            <div class="col-12">
                                <button type="submit" class="btn btn-info">Enregistrer les modifications</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>













@endsection

