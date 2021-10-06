<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] ===  'POST') {
    $cpf = filter_input(INPUT_POST, "txtCpf", FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, "txtSenha");

    if (!empty($cpf) && !empty($senha)) {
        $conexao = mysqli_connect("localhost", "root", "santos1809", "meusite", 3306);

        if ($conexao) {
            $query = "SELECT cpf, senha FROM usuarios WHERE CPF = '$cpf' AND senha = '$senha'";

            $select = mysqli_query($conexao, $query);
            if (mysqli_num_rows($select) == 1) {

                $_SESSION['logado'] = true;
                while ($linha = $select->fetch_array()) {
                    $_SESSION['nome'] = $linha['nome'];
                }
                header('Location: exe12-dataTables.php');
                echo "<script language='javascript' type='text/javascript'>
                    alert('Usuário existe senha está correta!');
                    window.location.href='exe12-dataTables.php'</script>";
            } else {
                $_SESSION['logado'] = false;
                $_SESSION['nome'] = "";
                header('Location: exe11-login.php');
                echo "<script language='javascript' type='text/javascript'>
                    alert('Ops, não foi possivel localizar usuário tente novamente!');
                    window.location.href='exe11-login.php'</script>";
            }
        } else {
            echo "<script language='javascript' type='text/javascript'>
                    alert('Ops, não foi possivel conectar no BD!');
                    window.location.href='exe11-login.php'</script>";
        }
    } else {
        echo "<script language='javascript' type='text/javascript'>
                    alert('Ops, campo vazio!');
                    window.location.href='exe11-login.php'</script>";
    }
}
