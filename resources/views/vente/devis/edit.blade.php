@extends('layouts.master')

@section('title')
Produit
@endsection

@section('welcome')
     Mise a jour le devis
@endsection

@section('content')
    <div class="col-lg-8 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"></h4>
                <form action="{{ route('devis.update',$devis->id) }}" method="POST" >
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label class="col-form-label">DATE DE DEVIS</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" maxlength="250" name="date_devis" id="defaultconfig" type="text"
                                value="{{$devis->date_devis}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="defaultconfig-2" class="col-form-label">NUMÉRO DE COMMANDE</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" maxlength="200" name="numero_commande" id="defaultconfig-2" type="text"
                            value="{{$devis->numero_commande}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="defaultconfig-2" class="col-form-label">ID DE CLIENT</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" maxlength="200" name="id_client" id="defaultconfig-2" type="text"
                            value="{{$devis->id_client}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-8"> <br>
                        </div>
                        <div class="col-lg-8">
                            <center>
                                <input class="btn btn-primary" type="submit" value="Modifier" width="500px">
                            </center>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
