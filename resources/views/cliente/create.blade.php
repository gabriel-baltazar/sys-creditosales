@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
@stop

@section('content')
<div class="card card-dark">
    <div class="card-header">
        <h3 class="card-title">Cadastrar Novo Cliente</h3>
    </div>
    <form role="form" action="{{ route('clientes.store') }}" method="POST">

        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
            </div>
            <div class="form-group">
                <label for="cpf">Cpf</label>
                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Cpf">
            </div>
            <div class="form-group">
                <label>Data de Nascimento</label>
                <input class="form-control" type="text" name="data_nasc" id="data_nasc" placeholder="dd/mm/yyyy"
                onkeypress="
                    var v = this.value;
                    if (v.match(/^\d{2}$/) !== null) {
                        this.value = v + '/';
                    } else if (v.match(/^\d{2}\/\d{2}$/) !== null) {
                        this.value = v + '/';
                    }"
                maxlength="10">
            </div>
            <div class="form-group">
                <label for="endereco">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço">
            </div>
            <div class="form-group">
                <label for="numero">Número</label>
                <input type="text" class="form-control" id="numero" name="numero" placeholder="Número">
            </div>
            <div class="form-group">
                <label for="bairro">Bairro</label>
                <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro">
            </div>
            <div class="form-group">
                <label for="cep">CEP</label>
                <input onkeyup="getAddress()" type="text" class="form-control" id="cep" name="cep" placeholder="00000000">
            </div>
            <div class="form-group">
                <label for="cidade">Cidade</label>
                <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade">
            </div>
            <div class="form-group">
                <label for="estado">UF</label>
                <input type="text" class="form-control" id="uf" name="uf" placeholder="UF">
            </div>
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input onkeyup="ValidateEmail()" type="email" class="form-control" id="email" name="email" placeholder="Email">
                <div style="color: red;" class="validateEmail"></div>
            </div>
            <button type="submit" class="btn btn-dark">Cadastrar</button>
      </form>
</div>
@stop

<script type="text/javascript">
    function getAddress(){
        const cep = document.querySelector('#cep').value
        const url = `https://viacep.com.br/ws/${cep}/json/`
        console.log(url)
            if (cep.length === 8) {
                fetch(url)
                .then(res => res.json())
                .then(json => {
                    document.querySelector('#endereco').value = json.logradouro
                    document.querySelector('#bairro').value = json.bairro
                    document.querySelector('#cidade').value = json.localidade
                    document.querySelector('#uf').value = json.uf
                    document.querySelector('#numero').value = json.ddd
                })
            }
    }

    function mascara(o,f){
    v_obj=o
    v_fun=f
    setTimeout("execmascara()",1)
    }
    function execmascara(){
        v_obj.value=v_fun(v_obj.value)
    }
    function mtel(v){
        v=v.replace(/\D/g,""); //Remove tudo o que não é dígito
        v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
        v=v.replace(/(\d)(\d{4})$/,"$1-$2"); //Coloca hífen entre o quarto e o quinto dígitos
        return v;
    }
    function id( el ){
        return document.getElementById( el );
    }
    window.onload = function(){
        id('telefone').onkeyup = function(){
            mascara( this, mtel );
        }
    }
    
    function ValidateEmail()
    {
        var emailText = document.getElementById("email");
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if(emailText.value.match(mailformat))
        {
            document.getElementsByClassName("validateEmail")[0].style.visibility = "hidden";
            document.getElementsByClassName("btn-dark")[0].disabled = false;
            return true;
        }
        else
        {
            document.getElementsByClassName("validateEmail")[0].innerHTML = "Formato de email informado invalido!";
            document.getElementsByClassName("btn-dark")[0].disabled = true;
            return false;
        }
    }
    

</script>