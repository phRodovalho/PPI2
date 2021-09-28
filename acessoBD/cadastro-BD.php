<?php
    if($_SERVER['REQUEST_METHOD'] ===  'POST'){
        $cpf = filter_input(INPUT_POST, "txtCpf", FILTER_SANITIZE_STRING);
        $nome = filter_input(INPUT_POST, "txtNome", FILTER_SANITIZE_STRING);
        $senha = filter_input(INPUT_POST, "txtSenha");

        if(!empty($cpf) && !empty($nome) && !empty($senha)){
            $conexao = mysqli_connect("localhost", "root", "santos1809", "meusite", 3306);

            if($conexao){
                $query = "INSERT INTO usuarios (cpf, nome, senha) VALUES ('$cpf','$nome','$senha')";
                $insert = mysqli_query($conexao, $query);
                if($insert){
                    echo "<script language='javascript' type='text/javascript'>
                    alert('Usuário cadastrado com sucesso!');
                    window.location.href='acessandoBD.php'</script>";
                }else {
                    echo "<script language='javascript' type='text/javascript'>
                    alert('Ops, não foi possivel inserir!');
                    window.location.href='acessandoBD.php'</script>";
                }
            }else{
                echo "<script language='javascript' type='text/javascript'>
                    alert('Ops, não foi possivel conectar no BD!');
                    window.location.href='acessandoBD.php'</script>";
            }
        }else{
            echo "<script language='javascript' type='text/javascript'>
                    alert('Ops, campo vazio!');
                    window.location.href='acessandoBD.php'</script>";
        }
    }

?>