@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

        <form action="{{ url('usuario/inserir') }}" method="post">
        
        @csrf
            <div class="form-group">
                <label for="example-text-input">Nome: </label>
                <input type="text" name="nome" class="form-control" placeholder="Digite seu nome">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">CPF: </label>
                <input type="text" name="CPF" class="form-control" placeholder="Digite seu CPF">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="text" name="email" class="form-control" placeholder="Digite seu email"> 
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Senha</label>
                <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Perfil</label>
                <input type="text" name="perfil" class="form-control" placeholder="Perfil de usuário"> 
            </div>

            
            <button type="submit" class="btn btn-primary">Cadastar</button>
        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection