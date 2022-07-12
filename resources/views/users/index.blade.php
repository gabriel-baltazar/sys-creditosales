@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
@stop

@section('content')
<div class="col-12">
  <div class="card-dark">
    <div class="card-header">
      <h3 class="card-title">Todos Usuarios</h3>
      <br>
      <form action="{{route('users.index')}}" method="GET">
      <div class="card-tools">
        <div class="input-group input-group-sm" style="width: 150px;">
        
          <input type="text" name="filter" id="filter" class="form-control float-right" placeholder="Search">
          <div class="input-group-append">
            <button type="submit" class="btn btn-default">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </div>
      </form>
    </div>

    <div class="card-body table-responsive p-0">
      <table class="table table-hover text-nowrap">
        <thead>
          <tr>
            <th>Nome</th>
            <th>email</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach($users as $key => $user)
          <tr>
            <td>{{$user->name}} <a href="{{route('users.show',['user' => $user->id])}}"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
            <td>{{$user->email}}</td>
            <td><a class="btn btn-primary" href="{{route('users.edit',['user' => $user->id])}}"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
            <td>
              <form action="{{route('users.destroy',['user' => $user->id])}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
              </form>
            </td>

          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

  </div>

</div>
@stop