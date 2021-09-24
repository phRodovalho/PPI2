<?php
if ($_SERVER['REQUEST_METHOD'] ===  'POST') {
    //recuperando variaveis do form
    $nome = filter_input(INPUT_POST, "txtNome", FILTER_SANITIZE_STRING);
    $grupoAI = filter_input(INPUT_POST, "grupo", FILTER_SANITIZE_STRING);
    $tamanho = filter_input(INPUT_POST, "txttamanho", FILTER_SANITIZE_STRING);
    $categoria = filter_input(INPUT_POST, "categoria");
    $foto = $_FILES['imag']['tmp_name']; //pegando somente o caminho
    echo $nome;
    echo $grupoAI;
    echo $tamanho;
    echo $categoria;
    echo $foto;
    
    //verficando se todas as variaveis tem conteudo
    if(!empty($nome) && !empty($grupoAI) && !empty($tamanho) && !empty($categoria)){
       //criando conexão com banco
        $conexao = mysqli_connect("localhost", "root", "santos1809", "prova1", 3306);

        if ($conexao) {
            //criando linha pra inserir os dados
            $query = "INSERT INTO vestuario (nome, grupo, tamanho, imagem, categoria_id) values ('$nome','$grupoAI','$tamanho','$foto','$categoria')";
           //inserindo e pegando variavel bool
            $insert = mysqli_query($conexao, $query);
            if ($insert) { //deu certo
                echo "<script language='javascript' type='text/javascript'>
                window.location.href='cadastro-vestuario.php?mensagem=Usuario cadastrado com Sucesso'</script>";
            } else { ///falhou
                echo "<script language='javascript' type='text/javascript'>
                 window.location.href='cadastro-vestuario.php?mensagem=Nao foi possivel inserir'</script>";
            }
        } else {
            echo "<script language='javascript' type='text/javascript'>
            window.location.href='cadastro-vestuario.php?mensagem=Falha na conexao com BD'</script>";
        }
    }else {
        echo "<script language='javascript' type='text/javascript'>
        window.location.href='cadastro-vestuario.php?mensagem=Falha'</script>";
    }
}
