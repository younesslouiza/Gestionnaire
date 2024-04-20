@extends('layouts.master')

@section('title')
    Catégorie
@endsection

@section('welcome')
    Ajouter Une Nouvelle Categorie
@endsection

@section('content')
    <div class="col-lg-8 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"></h4>
                <form action="{{ route('categorie.store') }}" method="post">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label  class="col-form-label">Le catégorie</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" maxlength="250" name="name" id="defaultconfig"
                                type="text" placeholder="Ecrire le nom de catégorie..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <label for="defaultconfig-4" class="col-form-label">Description</label>
                        </div>
                        <div class="col-lg-8">
                            <textarea id="maxlength-textarea" name="description" class="form-control" id="defaultconfig-4" maxlength="500" rows="8"
                                placeholder="La description de catégorie.. "></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8"> <br> </div>
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
