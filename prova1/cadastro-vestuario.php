<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de itens de vestuário</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<?php
/*Istruções
Crie uma aplicação PHP para cadastro de itens de vestuário, conforme DER fornecido. Deve-se, obrigatoriamente:
- Usar bootstrap no frontend (1 pt)
- Os campos devem usar o componente tooltip do bootstrap (https://getbootstrap.com/docs/4.5/components/tooltips/) com uma descrição de cada campo (1 pt)
- Validar os campos de acordo com o BD (0.5 pt)
- Todos os campos são obrigatórios
- O campo grupo deve ser usado com um radio button para indicar "Adulto" ou "Infantil" (0.5 pt)
- O campo tamanho é um campo aberto que pode ser um número ou um texto
- O campo categoria deve ser um select preenchido dinamicamente com os dados do banco - considere que as categorias já estão cadastradas (por exemplo, calças, camisetas, casacos, sapatos) (3 pts)
- O campo foto deve salvar somente o caminho do arquivo. O arquivo em si deve ser salvo em uma pasta dentro do servidor. (3 pts)
- Código PHP funcionando e devidamente comentado. (5 pts)
- Depois de salvar no banco, deve-se retornar para a mesma página de cadastro com uma mensagem de sucesso ou erro (usar div, não usar alert). (1 pt)
*/
?>
<script language='javascript' type='text/javascript'>
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>

<?php
$conexao = mysqli_connect("localhost", "root", "santos1809", "prova1", 3306);
if ($conexao) {
    $query = "SELECT id, nome FROM categoria";
    $select = mysqli_query($conexao, $query);
}
?>

<body>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-body">
                <h1 class="title jumbotron text-center">Cadastro de Itens de Vestuário </h1>
                <h3> Descrição do problema:</h3>
                    <blockquote>
                        <p> Crie uma aplicação PHP para cadastro de itens de vestuário, conforme DER fornecido. Deve-se, obrigatoriamente:</p>
                        <footer> Usar bootstrap no frontend (1 pt)</footer>
                        <footer>Os campos devem usar o componente tooltip do bootstrap (https://getbootstrap.com/docs/4.5/components/tooltips/) com uma descrição de cada campo (1 pt)</footer>
                        <footer>Validar os campos de acordo com o BD (0.5 pt)</footer>
                        <footer>Todos os campos são obrigatórios</footer>
                        <footer>O campo grupo deve ser usado com um radio button para indicar "Adulto" ou "Infantil" (0.5 pt)</footer>
                        <footer>O campo tamanho é um campo aberto que pode ser um número ou um texto</footer>
                        <footer>O campo categoria deve ser um select preenchido dinamicamente com os dados do banco - considere que as categorias já estão cadastradas (por exemplo, calças, camisetas, casacos, sapatos) (3 pts)</footer>
                        <footer>O campo foto deve salvar somente o caminho do arquivo. O arquivo em si deve ser salvo em uma pasta dentro do servidor. (3 pts)</footer>
                        <footer>Código PHP funcionando e devidamente comentado. (5 pts)</footer>
                        <footer>Depois de salvar no banco, deve-se retornar para a mesma página de cadastro com uma mensagem de sucesso ou erro (usar div, não usar alert). (1 pt)</footer>
                    </blockquote>
                
                <form action="banco.php" method="post" enctype="multipart/form-data">
                    <div class="input-group control-group after-add-more">

                        <div class="form-group">
                            <span>Nome: </span>
                            <input type="text" name="txtNome" class="form-control" data-toggle="tooltip" title="Escreva o nome aqui" placeholder="Escreva o nome aqui" required>
                            <br>
                        </div>

                        <div class="form-group">
                            <span>Grupo: </span><br>
                            <input type="radio" id="A" name="grupo" value="A" required>
                            <label for="A">Adulto</label><br>
                            <input type="radio" id="I" name="grupo" value="I" required>
                            <label for="I">Infantil</label><br>
                        </div>

                        <div class="form-group">
                            <span>Tamanho: </span>
                            <input type="text" name="txttamanho" class="form-control" data-toggle="tooltip" title="Escreva o tamanho aqui" placeholder="Escreva o tamanho aqui" required>
                            <br><br>
                        </div>

                        <div class="form-group">
                            <span> Categoria: </span>
                            <select name="categoria" id="categ" required>
                                <option>Selecione categoria...</option>
                                <?php while ($linha = mysqli_fetch_array($select)) { ?>
                                    <option value="<?php echo $linha['id'] ?>"><?php echo $linha['nome'] ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="foto">Inserir foto do item...</label>
                            <input type="file" class="form-control-file" id="foto" name="imag">
                        </div>

                    </div>
                    <br><input class="btn btn-info" type="submit" value="Cadastrar">
                </form>
                <?php
                if (isset($_GET["mensagem"])) {
                    echo $_GET['mensagem'];
                }
                ?>
            </div>
        </div>
    </div>


</body>

</html>