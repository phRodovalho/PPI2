<?php
if ($_SERVER['REQUEST_METHOD'] ===  'POST') {
    $cpf = filter_input(INPUT_POST, "txtCpf", FILTER_SANITIZE_STRING);
    $nome = filter_input(INPUT_POST, "txtNome", FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, "txtSenha");

    if (!empty($cpf) && !empty($nome) && !empty($senha)) {
        $conexao = mysqli_connect("localhost", "id17632733_phrodovalho", "", "id17632733_meusite", 3306);

        if ($conexao) {
            $query = "INSERT INTO usuarios (cpf, nome, senha) VALUES ('$cpf','$nome','$senha')";
            $insert = mysqli_query($conexao, $query);
            if ($insert) {
                echo "<script language='javascript' type='text/javascript'>
                window.location.href='listagem-de-usuarios.php?mensagem=Usuario cadastrado com Sucesso'</script>";
            } else {
                echo "<script language='javascript' type='text/javascript'>
                window.location.href='cadastro-de-usuario.php?mensagem=Ops, nao foi possivel inserir'</script>";
            }
        } else {
            echo "<script language='javascript' type='text/javascript'>
            window.location.href='cadastro-de-usuario.php?mensagem=Ops, nao foi possivel conectar ao BD'</script>";
        }
    } else {
        echo "<script language='javascript' type='text/javascript'>
        window.location.href='cadastro-de-usuario.php?mensagem=Ops, nao pode ficar nenhum campo vazio'</script>";
    }
}
