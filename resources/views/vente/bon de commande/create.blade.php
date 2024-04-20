@extends('layouts.master')

@section('title')
Bon de Commande
@endsection

@section('welcome')
     Inserer une nouvelle Bon de Commande
@endsection

@section('content')
    <div class="col-lg-8 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"></h4>
                <form action="{{ route('bon_de_commande.store')}}" method="POST"  >
                    @csrf
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label class="col-form-label">ID BON DE COMMANDE</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" maxlength="250" name="bon_commandes" id="defaultconfig" type="text"
                                placeholder="ECRIRE LE ID BON DE COMMANDE">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="defaultconfig-2" class="col-form-label">QUANTITÉ DE COMMANDE</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" maxlength="200" name="quantit_cmd" id="defaultconfig-2" type="text"
                                placeholder="Ecrire le quantité de commander">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="defaultconfig-2" class="col-form-label">ID PRODUIT</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" maxlength="200" name="id_produit" id="defaultconfig-2" type="text"
                                placeholder="Entrer telephone de votre client">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="defaultconfig-2" class="col-form-label">PRIX TOTAL</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" maxlength="200" name="prix_total" id="defaultconfig-2" type="text"
                                placeholder="Entrer email de votre client">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="defaultconfig-2" class="col-form-label">TOTAL TVA</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" maxlength="200" name="total_tva" id="defaultconfig-2" type="text"
                                placeholder="Entrer l'adresse de votre client">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="defaultconfig-2" class="col-form-label">TOTAL TTC</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" maxlength="200" name="total_ttc" id="defaultconfig-2" type="text"
                                placeholder="Entrer l'adresse de votre client">
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
