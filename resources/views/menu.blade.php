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

        /* .style-col{
            background-color: #304357;
        } */

        /* .style-button{
            display: flex;
            flex-direction:column;
            align-items: center;
            margin: 0 0 0 0;
        } */
        .style-form{
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-bottom: 20px;
        }
        .style-button{
            width: 200px;
        }
    </style>
</head>
<body>
    <div class="container">

        <div class="row">
            <div class="col"></div>
                
            <div class="col-6">
                <h1 style="text-align: center">Menu de Seleção de Funções</h1>

                <p></p>
                <p style="text-align: center; font-size: 20px;"><b>Opções de usuário</b></p>

                    <a href="{{route('createUsuario')}}" class="btn btn-outline-dark">Cadastrar Usuário</a>
                    <a href="{{route('listUsuario')}}" class="btn btn-outline-dark">Lista de Cadastro de Usuário</a>

                    <!-- <form method="GET" action="cadastro-usuario" class="style-form">
                        <button type="submit" class="btn btn-outline-dark style-button">Cadastrar Usuário</button>
                    </form>
                    <form method="GET" action="lista-usuario" class="style-form">
                        <button type="submit" class="btn btn-outline-dark style-button">Lista de Cadastro de Usuário</button>
                    </form> -->
                

                <p style="text-align: center; font-size: 20px"><b>Opções de endereço</b></p>

                    <a href="{{route('createEndereco')}}" class="btn btn-outline-dark">Cadastrar Endereço</a>
                    <a href="{{route('listEndereco')}}" class="btn btn-outline-dark">Lista de Cadastro de Endereço</a>
                    <a href="{{route('createUsuarioEndereco')}}" class="btn btn-outline-dark">Cadastrar Endereco e Usuario</a>
<!--                     
                    <form method="GET" action="cadastro-endereco" class="style-form">
                        <button type="sumbit" class="btn btn-outline-dark style-button">Cadastrar Endereço</button>
                    </form>
                    <form method="GET" action="lista-endereco" class="style-form">
                        <button type="sumbit" class="btn btn-outline-dark style-button">Lista de Cadastro de Endereço</button>
                    </form>
                    <form method="GET" action="usuario-endereco" class="style-form">
                        <button type="sumbit" class="btn btn-outline-dark style-button">Cadastrar Endereco e Usuario</button>
                    </form> -->
            </div>
            
            <div class="col"></div>
        </div>

    </div>
</body>
</html>