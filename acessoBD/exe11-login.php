<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <?php
    setlocale(LC_ALL, "pt_BR", "pt_BR.iso-8859-1", "pt_BR.utf-8", "portuguese");
    date_default_timezone_set('America/Sao_Paulo');
    ?>

    <title>Login de Usuários</title>
</head>

<body>
    <div class="container panel panel-default" style="padding: 20px;">
        <div class="title well text-center">
            <h1>Novo Login</h1>
        </div>

        <form style="margin-top: 50px" class="form-horizontal" id="loginId" method="post" action="realizar-login.php">
            <div class="form-group row">
                <label class="control-label col-sm-2"> CPF: </label>
                <div class="col-sm-5">
                    <input class="form-control" type="text" name="txtCpf" maxlength="11" placeholder="Insira CPF (somente numeros)" />

                </div>
            </div>

            <div class="form-group row">
                <label class="control-label col-sm-2"> Senha: </label>
                <div class="col-sm-5">
                    <input class="form-control" type="password" name="txtSenha" maxlength="32" placeholder="Insira o Senha" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <input class="btn btn-primary" type="submit" value="Login">
                </div>
            </div>
        </form>

        <div class="well text-center" style="padding: 5px; margin-top: 400px">
            <h4>
                <p>Estudos em PHP - por Phelipe Rodovalho Santos
                <p>Vamos aprender juntos!? <a href="www.linkedin.com/in/phelipe-rodovalho-ufu">Meu Linkedin</a>
                    <?php
                    echo "<p>Acessado: " . strftime("%A, %d de %B de %Y Hora: %H:%M");
                    ?>
            </h4>
        </div>

        <?php
            session_start();
            if (isset($_SESSION['logado']) && $_SESSION['logado'] == true) {
                header('Location: exe12-dataTables.php');
                echo "Login Aprovado!";
            } else if (isset($_SESSION['logado']) && $_SESSION['logado'] == false){
                echo "não está logado";
            }
        ?>

    </div>
</body>

</html>