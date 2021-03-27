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
        <div class="row"><h1>Usuario salvo com sucesso!</h1></div>
        <div class="row">
            <div class="col-md-2">Nome</div>
            <div class="col-md-10">{{$usuario->nome}}</div>
        </div>
        <div class="row">
            <div class="col-md-2">Data de Nascimento</div>
            <div class="col-md-10">{{$usuario->data_nascimento}}</div>
        </div>
        <div class="row">
            <div class="col-md-2">Senha</div>
            <div class="col-md-10">{{$usuario->senha}}</div>
        </div>
        <div class="row">
            <div class="col-md-2">Matricula</div>
            <div class="col-md-10">{{$usuario->matricula}}</div>
        </div>
    </div>
</body>
</html>