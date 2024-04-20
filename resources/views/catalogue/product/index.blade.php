@extends('layouts.master')

@section('title')
    Produit
@endsection

@section('welcome')
    Bienvenue dans la Page Gestion de Produit
@endsection

@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <P>{{$message}}</P>
</div>
@endif
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Les produit</h6>
                    <div class="pull-right" style="margin-bottom: 8px">
                        <a href="{{ route('produit.create') }}" class="btn btn-inverse-primary"> Créer une nouvelle
                            produit</a>
                    </div>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>L'image </th>
                                    <th>Le Produit</th>
                                    <th>Catégorie </th>
                                    <th>Quantité</th>
                                    <th>Prix achat</th>
                                    <th>Prix vente</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($produit as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <img src="{{asset('./uploads/'.$item->image)}}" width="100px" height="100px">
                                        </td>
                                        <td>{{ $item->nom }}</td>
                                        <td>{{ $item->Categorie->name }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>{{ $item->prix_achat }}</td>
                                        <td>{{ $item->prix_vente }}</td>
                                        <td>
                                            <form action="{{ route('produit.destroy',$item->id)}}" method="POST">

                                                <a href="{{ route('produit.edit',$item->id)}}"
                                                    class="btn btn-inverse-info">Modifier</a>

                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-inverse-danger">Supprimer</button>
                                            </form>
                                        </td>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
