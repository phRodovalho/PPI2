<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        
        <?php
        /*$nome1 = "João";
        $nome2 = "Maria";
        echo "$nome1, $nome2 e José";

        define("Max", -200);
    
        echo "<br/>" . Max;
        
        $count = 100;
        while($count >= 50){
            echo "<li> $count </li>";
            $count--;
        }*/
        ?>
        
    </h1>
    <h2>
        <?php
        $cidades = array(
            "Uberlândia" => "699.097",
            "Monte Carmelo" => "47.809",
            "Patrocínio" => "90.041",
            "Coromandel" => "27.547",
            "Araguari" => "117.825"
        );
        
        echo "<br/> Faixa até 90.000 habitantes: ";
        foreach($cidades as $nome => $hab){
            if($hab <= 90.000){
                echo  $nome . ", ";
            }
        }

        echo ";<br/> Faixa entre 90.001 e 500.000 habitantes: ";
        foreach($cidades as $nome => $hab){
            if($hab > 90.000 && $hab <= 500.000){
                echo $nome . ", ";
            }
        }

        echo ";<br/> Faixa entre mais de 500.000 habitantes: ";
        foreach($cidades as $nome => $hab){
            if($hab > 500.000){
                echo $nome . ", ";
            }
        }
        echo ";";
        
        ?>
    </h2>
</body>

</html>