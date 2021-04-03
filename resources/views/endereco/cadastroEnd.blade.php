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
            <div class="col-6">
                <h1>Cadastro de Endereço</h1>
                <form method="POST" action="{{route('cadastroExibirEndereco')}}">
                @csrf  
                
                        <label for="cep" class="form-label">CEP</label>
                        <input type="text" class="form-control" id="cep" name="cep">
                
                        <label for="logradouro " class="form-label">Logradouro</label>
                        <input type="text" class="form-control" id="logradouro" name="logradouro">
                
                        <label for="numero" class="form-label">Número</label>
                        <input type="number" class="form-control" id="numero" name="numero">
                
                        <label for="complemento" class="form-label">Complemento </label>
                        <input type="text" class="form-control" id="complemento" name="complemento">
                
                        <label for="bairro" class="form-label">Bairro </label>
                        <input type="text" class="form-control" id="bairro" name="bairro">

                        <label for="cidade" class="form-label">Cidade </label>
                        <input type="text" class="form-control" id="cidade" name="cidade">

                        <label for="estado" class="form-label">Estado </label>
                        <input type="text" class="form-control" id="estado" name="estado">

                <div class="row mt-5">
                    <button type="submit" class="btn btn-dark">Enviar</button>
                </div>
                </form>
            </div>
            <div class="col"></div>
        
        </div>
        
    </div>
</body>
</html>