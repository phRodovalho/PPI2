<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <title>Cadastro</title>
</head>

<body>
    <div class="container panel panel-default" style="padding: 20px;">
        <div class=" title well text-center">
            <h1>Cadastro de Usuários.</h1>
            <h3>Slide 8 - Implantação de sistemas Web</h3>
        </div>

        <div class="panel panel-default" style="padding: 10px;">
        <form class="form-horizontal" method="post" action="cadastro-BD.php">
                    <div class="form-group row">
                        <label class="control-label col-sm-2 "> CPF: </label>
                        <div class="col-sm-5">
                            <input class="form-control" type="text" name="txtCpf" maxlength="11" placeholder="Insira CPF (somente numeros)" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="control-label col-sm-2"> Nome: </label>
                        <div class="col-sm-5">
                            <input class="form-control" type="text" name="txtNome" maxlength="100" placeholder="Insira nome completo" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="control-label col-sm-2"> Senha: </label>
                        <div class="col-sm-5">
                            <input class="form-control" type="password" name="txtSenha" maxlength="32" placeholder="Insira Senha" />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input class="btn btn-primary" type="submit" value="Cadastrar">
                        </div>
                    </div>
                </form>
        </div>




    </div>

</body>

</html>