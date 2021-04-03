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
        <div class="row">
            <div class="col"></div>
            <div class="col-10">
                <div class="row"><h1>Endereco salvo com sucesso!</h1></div>
                <div class="row">
                    <div class="col-md-2">CEP</div>
                    <div class="col-md-10">{{$endereco->cep}}</div>
                </div>
                <div class="row">
                    <div class="col-md-2">Logradouro:</div>
                    <div class="col-md-10">{{$endereco->logradouro}}</div>
                </div>
                <div class="row">
                    <div class="col-md-2">Numero:</div>
                    <div class="col-md-10">{{$endereco->numero}}</div>
                </div>
                <div class="row">
                    <div class="col-md-2">Complemento:</div>
                    <div class="col-md-10">{{$endereco->complemento}}</div>
                </div>
                <div class="row">
                    <div class="col-md-2">Bairro:</div>
                    <div class="col-md-10">{{$endereco->bairro}}</div>
                </div>
                <div class="row">
                    <div class="col-md-2">Cidade:</div>
                    <div class="col-md-10">{{$endereco->cidade}}</div>
                </div>
                <div class="row">
                    <div class="col-md-2">Estado:</div>
                    <div class="col-md-10">{{$endereco->estado}}</div>
                </div>        
            </div>
            <div class="col"></div>
        </div>
    </div>
</body>
</html>