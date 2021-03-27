<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap');
        body{
            font-family: 'Ubuntu', sans-serif;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Cadastro</h1>
        <form method="POST" action="{{route('cadastroExibir')}}">
        @csrf  
        <div class="form-group">
            <label for="nomeCompleto" class="form-label">Nome Completo</label>
            <input type="text" class="form-control" id="nomeCompleto" name="nome">
        </div>
        <div class="form-group">
                <label for="dataNascimento" class="form-label">Data de Nascimento</label>
                <input type="date" class="form-control" id="dataNascimento" name="data_nascimento">
        </div>
        <div class="form-group">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha">
        </div>
        <div class="form-group">
                <label for="matricula" class="form-label">Matricula</label>
                <input type="number" class="form-control" id="matricula" name="matricula">
        </div>
        <div class="row mt-5">
            <button type="submit" class="btn btn-dark">Enviar</button>
        </div>
        </form>
    </div>
</body>
</html>