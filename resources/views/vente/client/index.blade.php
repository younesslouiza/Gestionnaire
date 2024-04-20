@extends('layouts.master')

@section('title')
    Les Clients
@endsection

@section('welcome')
    Bienvenue dans la Page des clients
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
                        <a href="{{ route('client.create') }}" class="btn btn-inverse-primary"> Ajouter une nouvelle client</a>
                    </div>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Le nom </th>
                                    <th>Le prénom</th>
                                    <th>Le téléphone </th>
                                    <th>Email</th>
                                    <th>L' addresse</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($client as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nom }}</td>
                                        <td>{{ $item->prenom }}</td>
                                        <td>{{ $item->tel }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>
                                            <form action="{{ route("client.destroy",$item->id)}}" method="POST">

                                                <a href="{{ route("client.edit",$item->id)}}"
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
