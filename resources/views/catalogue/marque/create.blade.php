@extends('layouts.master')

@section('title')
Marque
@endsection

@section('css')

@endsection

@section('welcome')
Les marque
@endsection

@section('content')
<div class="col-lg-8 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"></h4>
            <form action="{{ route('marque.store') }}" method="POST"  enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <div class="col-lg-3">
                        <label class="col-form-label">Marque</label>
                    </div>
                    <div class="col-lg-8">
                        <input class="form-control" maxlength="250" name="marque" id="defaultconfig" type="text"
                            placeholder="Ecrire la marque de Produit">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-lg-3">
                        <label class="col-form-label" for="defaultconfig-2">l'image de marque</label>
                    </div>
                    <div class="col-lg-8">
                        <input class="form-control" type="file" id="defaultconfig-2" name="image">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <label for="defaultconfig-4" class="col-form-label">Description</label>
                    </div>
                    <div class="col-lg-8">
                        <textarea id="maxlength-textarea" name="description" class="form-control" id="defaultconfig-4" maxlength="500" rows="8"
                            placeholder="La description de marque.. "></textarea>
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

@section('scripts')

@endsection


