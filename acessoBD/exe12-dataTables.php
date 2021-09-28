<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    </script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Exe12 - Data Tables</title>
</head>

<body>
    <div class="container panel panel-default" style="padding: 20px;">

        <div class=" title well text-center">
            <h1>
                <span> Exercício - 12 Listar Usuários com Data Tables
            </h1>
        </div>
        <div class="row">
            <div class="col-sm-10"></div>
            <div class="col-sm-2">

                <div class="btn-group float-sm-right" style="padding: 5px;">
                    <button type="button" class="btn btn-warning">Loggout</button>
                    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Pagina Inicial</a></li>
                        <li><a href="#">Exercício 11</a></li>
                       
                    </ul>
                </div>
            </div>
        </div>
        <div class="panel panel-default p-2">

            <table id="users" class="display" style="width:98%">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>Senha</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    session_start();
                    if (isset($_SESSION['logado']) && $_SESSION['logado'] == true) {
                        $conexao = mysqli_connect("localhost", "root", "santos1809", "meusite", 3306);
                        if ($conexao) {
                            $query = "SELECT cpf, nome, senha FROM usuarios";

                            $select = mysqli_query($conexao, $query);
                            if (mysqli_num_rows($select) > 0) {
                                while ($linha = $select->fetch_array()) {
                                    $nome = $linha['nome'];
                                    $cpf = $linha['cpf'];
                                    $senha = $linha['senha'];

                                    echo "
                                    <tr>
                                        <td>$nome</td>
                                        <td>$cpf</td>
                                        <td>$senha</td>
                                    </tr>";
                                }
                            }
                        }
                    }

                    ?>

                </tbody>
                <tfoot>
                    <tr>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>Senha</th>
                    </tr>
                </tfoot>
            </table>
            <label>
                <script type="text/javaScript">
                    if ($_SESSION['logado'] == false) {
                    echo "É necessário estar logado para acessar os dados! <p> Volte para exercício 11 e faça login...";
                
                    jQuery('#botaoDiv').removeClass('hide').addClass('show');
                    }
                </script>

                <div class='col-sm hide' id="botaoDiv">
                    <div class='input-group mb-3'>
                        <input type='button' id='botaoExe11' value='Ir para Exercício 11' class='btn btn-primary'>
                    </div>
                </div>
            </label>
        </div>
        <div class="well text-center" style="padding: 5px; margin-top: 200px">
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
            $('#users').DataTable();
        });
    </script>
    <script type="text/javascript">
        $(function() {
            $("#botaoExe11").click(function() {
                session_destroy();
                window.location.href = 'exe11-login.php';
            });
        });
    </script>
</body>

</html>