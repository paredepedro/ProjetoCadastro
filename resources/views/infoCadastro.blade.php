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
    <!-- O Resultado é {{$nomeCompleto}}, {{$dataNascimento}}, {{$senha}}, {{$matricula}}. -->
    <div class="container">
        <h1>Informações de Usuário:</h1>
        <p>Nome completo - {{$nomeCompleto}}</p>
        <p>Data de nascimento - {{$dataNascimento}}</p>
        <p>Senha - {{$senha}}</p>
        <p>Matricula - {{$matricula}}</p>
    </div>
</body>
</html>