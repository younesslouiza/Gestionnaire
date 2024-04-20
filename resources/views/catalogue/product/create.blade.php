@extends('layouts.master')

@section('title')
Produit
@endsection

@section('welcome')
     Inserer une nouvelle produit
@endsection

@section('content')
    <div class="col-lg-8 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"></h4>
                <form action="{{ route('produit.store') }}" method="POST"  enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label class="col-form-label">LE PRODUIT</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" maxlength="250" name="nom" id="defaultconfig" type="text"
                                placeholder="Ecrire le nom de Produit">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="defaultconfig-2" class="col-form-label">QUANTITÉ</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" maxlength="200" name="description" id="defaultconfig-2" type="text"
                                placeholder="Ecrire le Quantité du poduit..">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="defaultconfig-2" class="col-form-label">PRIX ACHAT</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" maxlength="200" name="prix_achat" id="defaultconfig-2" type="text"
                                placeholder="Le prix d'achat de produit">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="defaultconfig-2" class="col-form-label">PRIX VENTE</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" maxlength="200" name="prix_vente" id="defaultconfig-2" type="text"
                                placeholder="Le prix de vente de produit">
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
                                <option value="{{$item->id}}">{{$item->name}}</option>
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
