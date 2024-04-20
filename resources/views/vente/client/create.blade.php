@extends('layouts.master')

@section('title')
Bon de Commande
@endsection

@section('welcome')
     Inserer une nouvelle client
@endsection

@section('content')
    <div class="col-lg-8 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"></h4>
                <form action="{{ route('client.store')}}" method="POST"  >
                    @csrf
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label class="col-form-label">Le nom</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" maxlength="250" name="nom" id="defaultconfig" type="text"
                                placeholder="Ecrire le nom de client">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="defaultconfig-2" class="col-form-label">Le prénom</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" maxlength="200" name="prenom" id="defaultconfig-2" type="text"
                                placeholder="Ecrire le prénom du client..">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="defaultconfig-2" class="col-form-label">Téléphone</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" maxlength="200" name="tel" id="defaultconfig-2" type="text"
                                placeholder="Entrer telephone de votre client">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="defaultconfig-2" class="col-form-label">Email</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" maxlength="200" name="email" id="defaultconfig-2" type="text"
                                placeholder="Entrer email de votre client">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="defaultconfig-2" class="col-form-label">L'address</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" maxlength="200" name="address" id="defaultconfig-2" type="text"
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
