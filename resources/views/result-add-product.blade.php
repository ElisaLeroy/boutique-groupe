@extends ('layout-backoffice')

@section('content')

    <div class="container bg-white">
        <div class="row ">
            <div class="col-12">
                <div class="container  ">

                    {{--FORM--}}
                    <div class="container m-3 ">
                        <form class="row g-3" action="" method="post">
                            @csrf
                            <h1 class="fw-light text-center mb-5">Ajouter un article</h1>
                            <div class="col-md-6">
                                <label for="title" class="form-label">Catégorie</label>
                                <select id="title" class="form-select" name="title">
                                    <option selected></option>
                                    <option value="Télescope">Télescope</option>
                                    <option value="Lentille">Lentille</option>
                                    <option value="Jumelles">Jumelles</option>
                                    <option value="Filtres">Filtres</option>
                                    <option value="Acessoire">Acessoire</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="price" class="form-label">Prix en centimes</label>
                                <input type="number" class="form-control" id="price" name="price">
                            </div>
                            <div class="col-12">
                                <label for="name" class="form-label">Nom de l'article</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="col-12">
                                <label for="imgURL" class="form-label">URL de l'image</label>
                                <input type="text" class="form-control" id="imgURL" name="imgURL">
                            </div>
                            <div class="col-md-4">
                                <label for="weight" class="form-label">Poids en grammes</label>
                                <input type="number" class="form-control" id="weight" name="weight">
                            </div>
                            <div class="col-md-4">
                                <label for="quantity" class="form-label">Stock</label>
                                <input type="number" class="form-control" id="quantity" name="quantity">
                            </div>
                            <div class="col-md-2">
                                <label for="availability" class="form-label">Disponible à la vente</label>
                                <input type="checkbox" class="form-control" id="availability" value="1" >
                            </div>
                            <div class="col-md-2">
                                <label for="availability" class="form-label">Indisponible à la vente</label>
                                <input type="checkbox" class="form-control" id="availability" value="0">
                            </div>
                            <input type="hidden" name="category" value="1">
                            <div class="col-12">
                                <label for="description" class="form-label">Description de l'article</label>
                                <textarea name="description" id="description" cols="20" rows="5" class="form-control"></textarea>
                            </div>


                            <div class="col-12">
                                <button type="submit" class="btn btn-info">Ajouter un article</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>













@endsection

