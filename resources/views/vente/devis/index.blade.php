@extends('layouts.master')

@section('title')
Devis
@endsection

@section('welcome')
    Bienvenue dans la Page des Devis
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
                    <h6 class="card-title">DEVIS</h6>
                    <div class="pull-right" style="margin-bottom: 8px">
                        <a href="{{ route('devis.create') }}" class="btn btn-inverse-primary"> Créer une nouvelle
                            devis</a>
                    </div>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Date de devis</th>
                                    <th>Numéro de commande</th>
                                    <th>Id de client </th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($devis as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->date_devis }}</td>
                                        <td>{{ $item->numero_commande }}</td>
                                        <td>{{ $item->id_client }}</td>
                                        <td>
                                            <form action="{{ route('devis.destroy',$item->id)}}" method="POST">

                                                <a href="{{ route('devis.edit',$item->id)}}"
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
