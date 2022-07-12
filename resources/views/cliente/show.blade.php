@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
@stop

@section('content')
<div class="col-12">
  <div class="card-dark">
    <div class="card-header">
      <h3 class="card-title">Cliente: {{$cliente->id}}</h3>
  </div>
  <ul class="list-group">
          <li class="list-group-item">
            <a class="btn btn-primary" href="{{route('clientes.edit',['cliente' => $cliente->id])}}"><i class="fa fa-edit" aria-hidden="true"></i></a>
            <form action="{{route('clientes.destroy',['cliente' => $cliente->id])}}" method="post">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
            </form>
          </li> 
          <li class="list-group-item">Nome: {{$cliente->nome}}</li>
          <li class="list-group-item">CPF: {{$cliente->cpf}}</li>
          <li class="list-group-item">Data Nascimento: {{$cliente->data_nasc}}</li>
          <li class="list-group-item">Endereço: {{$cliente->endereco}}</li>
          <li class="list-group-item">Número: {{$cliente->numero}}</li>
          <li class="list-group-item">Bairro: {{$cliente->bairro}}</li>
          <li class="list-group-item">CEP: {{$cliente->cep}}</li>
          <li class="list-group-item">Cidade: {{$cliente->cidade}}</li>
          <li class="list-group-item">UF: {{$cliente->uf}}</li>
          <li class="list-group-item">Telefone: {{$cliente->telefone}}</li>
          <li class="list-group-item">Email: {{$cliente->email}}</li>
        </ul>
</div>
</div>
@stop