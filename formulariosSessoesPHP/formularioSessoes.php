<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Formulários e Sessões</title>
    <?php
    setlocale(LC_ALL, "pt_BR", "pt_BR.iso-8859-1", "pt_BR.utf-8", "portuguese");
    date_default_timezone_set('America/Sao_Paulo');
    ?>
</head>

<body>
    <div class="container">
        <div class="jumbotron text-center">
            <h1>
                <span>Slide 4 - Formulários e Sessões em PHP
            </h1>
        </div>

        <div id="Exe4">
            <h2>Exercício 4</h2>
            <h5>Criar um formulário HTML que possui um elemento
                select para escolher um valor que representa a
                idade de uma pessoa entre 18 e 50 anos. Criar o
                select dinamicamente.
            </h5>
            <form action="" method="">
                <select name="select">
                    <?php
                    for ($n = 18; $n <= 50; $n++)
                        echo "<option value='$n'>" . $n . "</option>";
                    ?>
                </select>
            </form>
        </div>
        <br>
        <div id="Exe5">
            <h2>Exercício 5</h2>
            <h5>Criar um formulário HTML que possui um elemento
                select para escolher um valor que representa um
                estado brasileiro entre “Amazonas”, “Ceará”,
                “Goiás”, “Minas Gerais” e “Santa Catarina”. Utilize
                um array associativo com os as respectivas siglas
                dos estados como chave e o nome por extenso como
                valor de cada campo. Utilize um foreach para criar o
                select dinamicamente.</h5>
            <form action="" method="">
                <select name="select">
                    <?php
                    $estado = array(
                        "AM" => "Amazonas",
                        "CE" => "Ceará",
                        "GO" => "Goiás",
                        "MG" => "Minas Gerais",
                        "SC" => "Santa Catarina"
                    );

                    foreach ($estado as $sig => $name)
                        echo "<option value='$sig'>" . $name . "</option>"
                    ?>
                </select>
            </form>
        </div>
        <br>
        <div id="Exe6">
            <h2>Exercício 6</h2>
            <h5>Altere o exercício 2 (soma de positivos e quantidade de
                negativos) para utilizar um formulário HTML com um campo
                input para digitar um número e um botão para inserir novos
                campos dinamicamente para digitar outros números.
                <p>–Utilize jQuery e Bootstrap
            </h5>
            <div class="row">
                <div class="col-sm">
                    <div class="input-group mb-3">
                        <input type="button" id="botaoExe6" value="Ir para Exercício 6" class="btn btn-primary">
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div id="Exe 7">
            <h2>Exercício 7</h2>
            <h5>
                Crie um formulário para executar a função de substituição
                de textos.
            </h5>

            <form action=" " method="post">
                <label for="Texto">Texto:</label>
                <input type="text" name="Texto"><br><br>

                <label for="Sub">Substituir:</label>
                <input type="text" name="Sub"><br><br>

                <label for="Por">Por:</label>
                <input type="text" name="Por"><br><br>

                <input type="submit" value="Enviar" class="btn btn-success">
            </form>

            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["Texto"])) {
                $result = str_replace($_POST["Sub"], $_POST["Por"], $_POST["Texto"]);
                echo "<h5>$result</h5><br>";
            }
            ?>
        </div>
        <br>
        <div id="Exe8">
            <h2>Exercício 8 e 8.1</h2>
            <h5>
                <p>Crie uma página que contenha um formulário para
                    cadastro de carros com os campos Nome, Marca ( select ) e
                    Cor.
                <p>Envie o formulário para o mesmo script php da página
                    HTML via método GET e utilize os parâmetros da requisição
                    para apresentar o formulário já preenchido.
                <p> 8.1 Altere o exercício anterior para incluir um campo para envio
                    de uma imagem do carro.
                <p>Envie o formulário para o mesmo script php da página
                    HTML via método POST e utilize os parâmetros da
                    requisição para apresentar o formulário já preenchido.
            </h5>
            <div class="row">
                <div class="col-sm">
                    <div class="input-group mb-3">
                        <input type="button" id="botaoExe8" value="Ir para Exercício 8" class="btn btn-primary">
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-secondary text-center text-white font-weight-bolder">
            <h4>
                <?php
                echo "<p>Estudos em PHP - por Phelipe Rodovalho <br><p>Acessado: "  . strftime("%A, %d de %B de %Y Hora: %H:%M");
                ?>
            </h4>
        </div>
    </div>
</body>

<script type="text/javascript">
    $(function() {
        $("#botaoExe6").click(function() {
            window.location.href = 'exe6.php';
        });
        $("#botaoExe8").click(function() {
            window.location.href = 'exe8.php';
        });

    });
</script>

</html>