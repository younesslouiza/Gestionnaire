@extends('layouts.master')

@section('title')
    Les Clients
@endsection

@section('welcome')
    Bienvenue dans la Page des Bon Commande
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
                    <h6 class="card-title">Les bon des commandes </h6>
                    <div class="pull-right" style="margin-bottom: 8px">
                        <a href="{{route('bon_de_commande.create')}}" class="btn btn-inverse-primary"> Ajouter une nouvelle bon de commande</a>
                    </div>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Id Bon de commande </th>
                                    <th>Quantité de commande</th>
                                    <th>Id produit</th>
                                    <th>Prix total </th>
                                    <th>Total Tva</th>
                                    <th>total ttc</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bonC as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->bon_commandes }}</td>
                                        <td>{{ $item->quantit_cmd }}</td>
                                        <td>{{ $item->id_produit }}</td>
                                        <td>{{ $item->prix_total }}</td>
                                        <td>{{ $item->total_tva }}</td>
                                        <td>{{ $item->total_ttc }}</td>
                                        <td>
                                            <form action="{{ route('bon_de_commande.destroy',$item->id)}}" method="POST">

                                                <a href="{{ route('bon_de_commande.edit',$item->id)}}"
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
