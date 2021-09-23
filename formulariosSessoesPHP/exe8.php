<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <title>Exercício 8</title>
</head>

<body>
    <div class="container">
        <br>
        <h1>Exercício 8</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <label>Nome:</label>
            <input type="text" name="nome"><br><br>

            <label>Marca:</label>
            <select name="cars" id="cars">
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                <option value="mercedes">Mercedes</option>
                <option value="audi">Audi</option>
            </select>
            <br><br>
            <label>Cor</label>
            <input type="color" id="cor" name="cor" value="#ff0000">
            <br><br>
            <label for="foto">Inserir foto do item...</label>
            <input type="file" class="form-control-file" id="foto" name="imag">


            <br><br><input class="btn btn-primary" type="submit" value="Cadastrar">
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["nome"])) {
            $name = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING);
            $marca = filter_input(INPUT_POST, "cars");
            $cor = filter_input(INPUT_POST, "cor");

            echo "<h5><p>Nome: $name <p>Marca: $marca <p>Cor: $cor;</h5>";
        }
        ?>
    </div>
</body>
</html>