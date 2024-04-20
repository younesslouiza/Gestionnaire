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
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <P>{{$message}}</P>
</div>
@endif

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Les marque</h6>
                <div class="pull-right" style="margin-bottom: 8px">
                    <a href="{{ route('marque.create') }}" class="btn btn-inverse-primary"> Créer une nouvelle
                        marque</a>
                </div>
                <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Iimage </th>
                                <th>Marque</th>
                                <th>Description </th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($marque as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <img src="{{asset('./uploads/'.$item->image)}}" >
                                    </td>
                                    <td>{{ $item->marque }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td>
                                        <form action="{{ route('marque.destroy',$item->id) }}" method="POST">

                                            <a href="{{ route('marque.edit',$item->id) }}"
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

@section('scripts')

@endsection


