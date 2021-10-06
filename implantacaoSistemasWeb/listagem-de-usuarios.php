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
    
    <title>Listar Usuários</title>
</head>

<body>
    

    
    <div class="container panel panel-default" style="padding: 20px;">
        <div class=" title well text-center">
            <h1>Listar Usuários.</h1>
            <h3>Slide 8 - Implantação de sistemas Web</h3>
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
                    $conexao = mysqli_connect("localhost", "id17632733_phrodovalho", "", "id17632733_meusite", 3306);

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
    </div>
    <script>
        $(document).ready(function() {
            $('#users').DataTable();
        });
    </script>
    
    
</body>

</html>