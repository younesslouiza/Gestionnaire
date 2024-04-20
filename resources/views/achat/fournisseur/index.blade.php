@extends('layouts.master')

@section('title')
Fournisseur
@endsection

@section('welcome')
    Bienvenue dans la Page des Fournisseurs
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
                    <h6 class="card-title">Fournisseur</h6>
                    <div class="pull-right" style="margin-bottom: 8px">
                        <a href="{{ route('fournisseur.create') }}" class="btn btn-inverse-primary"> Ajouter une nouvelle
                            fournisseur</a>
                    </div>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>le nom de fournisseur</th>
                                    <th>Email</th>
                                    <th>Téléphone</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($fournisseur as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nom }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->tel }}</td>
                                        <td>
                                            <form action="{{ route('fournisseur.destroy',$item->id)}}" method="POST">

                                                <a href="{{ route('fournisseur.edit',$item->id)}}"
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
