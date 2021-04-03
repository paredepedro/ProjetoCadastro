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
        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">CEP</th>
                <th scope="col">Logradouro</th>
                <th scope="col">Numero</th>
                <th scope="col">Bairro</th>
                <th scope="col">Cidade</th>
                <th scope="col">Estado</th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($enderecos as $endereco)
                <tr>
                <th scope="row">{{$endereco->id}}</th>
                <td>{{$endereco->cep}}</td>
                <td>{{$endereco->logradouro}}</td>
                <td>{{$endereco->numero}}</td>
                <td>{{$endereco->complemento}}</td>
                <td>{{$endereco->bairro}}</td>
                <td>{{$endereco->cidade}}</td>
                <td>{{$endereco->estado}}</td>
                <td><a href="{{route('editaEndereco',$endereco->id)}}">Editar</a></td>
                <td><a href="{{route('deletaEndereco',$endereco->id)}}">Excluir</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>