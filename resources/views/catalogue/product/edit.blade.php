@extends('layouts.master')

@section('title')
    Produit
@endsection

@section('welcome')
   Mise a jour le produit
@endsection

@section('content')
    <div class="col-lg-8 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"></h4>
                <form action="{{ route('produit.update',$produit->id) }}" method="POST"  enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label class="col-form-label">LE PRODUIT</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" maxlength="250" name="nom" id="defaultconfig" type="text"
                               value="{{$produit->nom}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="defaultconfig-2" class="col-form-label">QUANTITÉ</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" maxlength="200" name="description" id="defaultconfig-2" type="text"
                            value="{{$produit->description}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="defaultconfig-2" class="col-form-label">PRIX ACHAT</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" maxlength="200" name="prix_achat" id="defaultconfig-2" type="text"
                            value="{{$produit->prix_achat}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="defaultconfig-2" class="col-form-label">PRIX VENTE</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" maxlength="200" name="prix_vente" id="defaultconfig-2" type="text"
                            value="{{$produit->prix_vente}}">
                        </div>
                    </div>

                    <div class=" row mb-3">
                        <div class="col-lg-3">
                            <label for="defaultconfig-2" class="col-form-label">Catégorie</label>
                        </div>
                        <div class="col-lg-8">
                            <select class="form-select" name="categorie_id" id="defaultconfig-2">
                                <option selected disabled>Selectionnez votre catégorie</option>
                                @foreach ($categories as $item)
                                <option value="{{$item->id}}" {{$produit->categorie_id == $item->id ? 'selected':'' }}>
                                    {{$item->name}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label class="col-form-label" for="defaultconfig-2">l'image de produit</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" type="file" id="defaultconfig-2" name="image">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-8"> <br>
                        </div>
                        <div class="col-lg-8">
                            <center>
                                <input class="btn btn-primary" type="submit" value="Enregistrer" width="500px">
                            </center>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
