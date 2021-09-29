<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <?php
    setlocale(LC_ALL, "pt_BR", "pt_BR.iso-8859-1", "pt_BR.utf-8", "portuguese");
    date_default_timezone_set('America/Sao_Paulo');
    ?>

    <title>Cadastro de Usuários</title>


</head>

<body>
    <div class="container panel panel-default" style="padding: 20px;">

        <div class=" title well text-center">
            <h1>
                <span> Slide 5 - Acesso ao Banco de Dados com PHP
            </h1>
        </div>

        <div class="panel panel-default p-2">
            <div id="flip" class="panel-heading">
                <h4>Exercício 10 - Cadastrar Usuário</h4>
            </div>
            <div id="panel" class="panel-body" style="padding: 10px">
                <h5 class="card-text">
                    <blockquote>
                        <p>Criar um BD chamado " meusite "
                        <footer> Cria uma tabela “ usuarios ” com três
                            <ul>
                                <li>cpf varchar(11) not null primary key</li>
                                <li>nome varchar(100) not null</li>
                                <li>senha char(32) not null</li>
                            </ul>
                        </footer>
                        <footer>Criar uma página “ exercicio10. php” que possui um formulário com os campos da tabela</footer>
                        <footer>Criar um script “cadastrar usuario.php ” para efetuar a conexão com o BD e salvar os dados do usuário</footer>
                    </blockquote>
                </h5>
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

        <div class="panel panel-default p-2">
            <div id="flip1" class="panel-heading">
                <h4>Exercício 11 - Fazer Login</h4>
            </div>
            <div id="panel1" class="panel-body" style="padding: 10px">
                <h5 class="card-text">
                    <blockquote>
                        <p>Criar uma página “exercicio11 login.php” com dois campos: cpf e senha.
                        <footer> Criar um script “realizar login.php ” para realizar a
                            conexão com o BD e verificar se o usuário existe e a senha está correta.</footer>
                    </blockquote>
                </h5>
                <div class="panel-body">
                    <div class="col-sm">
                        <div class="input-group mb-3">
                            <input type="button" id="botaoExe11" value="Ir para Exercício 11" class="btn btn-primary">
                        </div>
                    </div>
                    <div class="row">
                        <?php
                        if (isset($_SESSION['logado']) && $_SESSION['logado'] == true) {
                            echo "Login Aprovado!!!";

                        } else if (isset($_SESSION['logado']) && $_SESSION['logado'] == false) {
                            echo "não está logado";
                        }
                        ?>
                    </div>
                </div>

            </div>
        </div>

        <div class="panel panel-default p-2">
            <div id="flip2" class="panel-heading">
                <h4>Exercício 12 - Listar Usuários</h4>
            </div>
            <div id="panel2" class="panel-body" style="padding: 10px">
                <h5 class="card-text">
                    <blockquote>
                        <p>Faça uma página para listar todos os usuários cadastrados no banco de dados.
                        <footer>Utilize o plugin jQuery DataTables https://datatables.net</footer>
                    </blockquote>
                </h5>

                <div class="col-sm">
                    <div class="input-group mb-3">
                        <input type="button" id="botaoExe12" value="Ir para Exercício 12" class="btn btn-primary">
                    </div>
                </div>
            </div>
        </div>

        <div class="well text-center">
            <h4>
                <p>Estudos em PHP - por Phelipe Rodovalho Santos
                <p>Vamos aprender juntos!? <a href="www.linkedin.com/in/phelipe-rodovalho-ufu">Meu Linkedin</a>
                    <?php
                    echo "<p>Acessado: " . strftime("%A, %d de %B de %Y Hora: %H:%M");
                    ?>
            </h4>
        </div>

    </div>
    <script>
        $(document).ready(function() {
            $("#flip").click(function() {
                $("#panel").slideToggle("slow");
            });
        });
        $(document).ready(function() {
            $("#flip1").click(function() {
                $("#panel1").slideToggle("slow");
            });
        });
        $(document).ready(function() {
            $("#flip2").click(function() {
                $("#panel2").slideToggle("slow");
            });
        });
    </script>
    <script type="text/javascript">
        $(function() {
            $("#botaoExe11").click(function() {
                window.location.href = 'exe11-login.php';
            });
            $("#botaoExe12").click(function() {
                window.location.href = 'exe12-dataTables.php';
            });

        });
    </script>




</body>

</html>