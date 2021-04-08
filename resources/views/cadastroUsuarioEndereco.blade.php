<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <h1>Cadastro de Usuário e Endereço</h1>
                <form method="POST" action="{{route('saveUsuarioEndereco')}}">
                @csrf  
                        <!-- USUARIO -->
                        <h1>Informações de Usuário</h1>
                        <label for="nomeCompleto" class="form-label">Nome Completoa</label>
                        <input type="text" class="form-control" id="nomeCompleto" name="nome">
                
                        <label for="dataNascimento" class="form-label">Data de Nascimento</label>
                        <input type="date" class="form-control" id="dataNascimento" name="data_nascimento">
                
                        <label for="senha" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="senha" name="senha">
                
                        <label for="matricula" class="form-label">Matricula</label>
                        <input type="number" class="form-control" id="matricula" name="matricula">
                
                        <!-- ENDERECO -->
                        <h1>Informações de Endereço</h1>
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