<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    setlocale(LC_ALL, "pt_BR", "pt_BR.iso-8859-1", "pt_BR.utf-8", "portuguese");
    date_default_timezone_set('America/Sao_Paulo');
    ?>
    <title>Estudos PHP</title>
</head>

<body>
    <h1 style="background-color:powderblue;text-align:center;">
        <?php
        echo "Estudos em PHP - por Phelipe Rodovalho <br><p style=font-size:80%>"  . strftime("%A, %d de %B de %Y Hora: %H:%M");
        ?>
    </h1>
    <p style="text-align:center;font-size:200%;"> Slide 3 - Introdução ao PHP
    <h2>
        <p> Exercício 1:
        <ul>
            <?php
            $count = 100;
            while ($count >= 50) {
                echo "<li>" . $count-- . "<br>";
            }
            ?>
        </ul>
        <p> Exercício 2:<br>
            <?php
            $numeros = array(0, -9, 33, -2, 43, 56, -5, 4, -4, 10);
            $som = 0.0;
            $c = 0;
            foreach ($numeros as $num) {
                echo " $num,";
                if ($num > 0) {
                    $som = $som + $num;
                } else if ($num < 0) $c++;
            }
            echo "<br>Soma dos positivos = $som e quantidade de negativos = $c";
            ?>
        <p style="color:red;"> Exercício 3:</p>
        <?php
        $cidades = array(
            "Monte Carmelo" => "49.999",
            "Uberlândia" => "804.856",
            "Catalão" => "123.789",
            "Uberaba" => "189.400",
            "Araguari" => "389.302"
        );
        foreach ($cidades as $nome => $hab)
            echo "Cidade: $nome Habitantes: $hab <br>";

        ?>

        <p style="color:red;"> Exercício 3.1:</p>
        <?php
        $cidades = array(
            "Monte Carmelo" => "49.999",
            "Uberlândia" => "804.856",
            "Catalão" => "123.789",
            "Uberaba" => "189.400",
            "Araguari" => "389.302"
        );
        echo "<p>Ordenando pelo número de habitantes:<br>";
        asort($cidades);
        foreach ($cidades as $nome => $hab)
            echo "Cidade: $nome Habitantes: $hab <br>";

        echo "<p>Ordenando pelo nome:<br>";
        ksort($cidades);
        foreach ($cidades as $nome => $hab)
            echo "Cidade: $nome Habitantes: $hab <br>";

        ?>
        <p style="color:red;"> Exercício 3.2:</p>
        <?php
        $cidades = array(
            "Uberlândia" => "699.097",
            "Monte Carmelo" => "47.809",
            "Patrocínio" => "90.041",
            "Coromandel" => "27.547",
            "Araguari" => "117.825"
        );

        echo "Faixa até 90.000 habitantes: ";
        foreach ($cidades as $nome => $hab) {
            if ($hab <= 90.000) {
                echo  $nome . ", ";
            }
        }

        echo "<br> Faixa entre 90.001 e 500.000 habitantes: ";
        foreach ($cidades as $nome => $hab) {
            if ($hab > 90.000 && $hab <= 500.000) {
                echo $nome . ", ";
            }
        }

        echo "<br> Faixa entre mais de 500.000 habitantes: ";
        foreach ($cidades as $nome => $hab) {
            if ($hab > 500.000) {
                echo $nome . ", ";
            }
        }
        ?>

    </h2>
</body>

</html>