@extends('layouts.master')

@section('title')
    Catégorie
@endsection

@section('welcome')
    Bienvenue dans la Page Gestion de Catégorie
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
                <h6 class="card-title">Les Catégorie</h6>
                <div class="pull-right" style="margin-bottom: 8px">
                    <a href="{{ route('categorie.create')}}" class="btn btn-inverse-primary"> Créer une nouvelle catégorie</a>
                </div>
                <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Catégorie</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $item)
                                <tr>
                                    <th> {{$loop->iteration}} </th>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td>
                                         <form action="{{route('categorie.destroy',$item->slug)}}" method="POST" >

                                            <a href="{{route('categorie.edit',$item->slug)}}" class="btn btn-inverse-info">Modifier</a>


                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"  class="btn btn-inverse-danger">Supprimer</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


