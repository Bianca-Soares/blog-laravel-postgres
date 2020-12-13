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

        <form action="{{ url('atleta/inserir') }}" method="post">
        
        @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Nome: </label>
                <input type="text" name="nome" class="form-control" >
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">CPF: </label>
                <input type="text" name="cpf" class="form-control" >
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Data de Nascimento</label>
                <input type="text" name="data_nasc" class="form-control" >
            </div>

            
            <button type="submit" class="btn btn-primary">Cadastar</button>
        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection