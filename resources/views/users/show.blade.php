@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
@stop

@section('content')
<div class="col-12">
  <div class="card-dark">
    <div class="card-header">
      <h3 class="card-title">Usuario: {{$user->id}}</h3>
  </div>
  <ul class="list-group">
          <li class="list-group-item">
            <a class="btn btn-primary" href="{{route('users.edit',['user' => $user->id])}}"><i class="fa fa-edit" aria-hidden="true"></i></a>
            <form action="{{route('users.destroy',['user' => $user->id])}}" method="post">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
            </form>
          </li> 
          <li class="list-group-item">Nome: {{$user->name}}</li>
          <li class="list-group-item">Email: {{$user->email}}</li>
        </ul>
</div>
</div>
@stop