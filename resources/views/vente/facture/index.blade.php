@extends('layouts.master')

@section('title')
Facture
@endsection

@section('welcome')
    Bienvenue dans la Page de Facturation
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
                    <h6 class="card-title">Facture</h6>
                    <div class="pull-right" style="margin-bottom: 8px">
                        <a href="{{ route('facture.create') }}" class="btn btn-inverse-primary"> Créer une nouvelle
                            facture</a>
                    </div>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Client</th>
                                    <th>La date</th>
                                    <th>ht</th>
                                    <th>ttc</th>
                                    <th>status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($facture as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->client }}</td>
                                        <td>{{ $item->date }}</td>
                                        <td>{{ $item->ht }}</td>
                                        <td>{{ $item->ttc }}</td>
                                        <td>{{ $item->status }}</td>
                                        <td>
                                            <form action="{{ route('facture.destroy',$item->id)}}" method="POST">

                                                <a href="{{ route('facture.edit',$item->id)}}"
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
