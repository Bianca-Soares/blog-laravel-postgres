<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>Cadastro</title>
</head>
<body>
    <p>Perfil de atleta</p>
    <form name="frmTSPesquisar" 
    action="{{    action('AtletaController@inserir') }}" 
    method="GET" role="form">
        <div class="form-group">
            <label for="exampleInputEmail1">Endereço de email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
            <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
        </div>
        <a href="{{ route('register') }}">
                     <span> 
                      <button type="button" class="btn btn-primary">Cadastrar</button>
                    </span> 
                </a>
        <button type="submit" class="btn btn-primary">Logar</button>
    </form>

    <a href="'produto/inserir', [LoginController::class, 'login']">Logado</a>
    Botão que chama o controller
    <a href="/home">Fazer cadastro de Atleta</a>
</body>
</html>