@extends('layouts.master')

@section('title')
Facture
@endsection

@section('welcome')
     Inserer une nouvelle Facture
@endsection

@section('content')
    <div class="col-lg-8 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"></h4>
                <form action="{{ route('facture.store') }}" method="POST" >
                    @csrf
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label class="col-form-label">Client</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" maxlength="250" name="client" id="defaultconfig" type="text"
                                >
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="defaultconfig-2" class="col-form-label">La date</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" maxlength="200" name="date" id="defaultconfig-2" type="date"
                                >
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="defaultconfig-2" class="col-form-label">HT</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" maxlength="200" name="ht" id="defaultconfig-2" type="text"
                                >
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="defaultconfig-2" class="col-form-label">TTC</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" maxlength="200" name="ttc" id="defaultconfig-2" type="text"
                                >
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="defaultconfig-2" class="col-form-label">Status</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" maxlength="200" name="status" id="defaultconfig-2" type="text"
                                >
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
