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
    <div class="container" >

        <h1 class="d-flex justify-content-center">Menu</h1>
        <div class="d-flex justify-content-center">
        <div class="btn-group-vertical" role="group">
            <form method="GET" action="listaUsuario" class="row mt-2">
                <button type="submit" class="btn btn-dark">Lista de Usuários</button>
            </form>
            <form method="GET" action="cadastro" class="row mt-2">
                <button type="submit" class="btn btn-dark">Cadastrar Usuário</button>
            </form>
        </div>
        </div>
    </div>
</body>
</html>