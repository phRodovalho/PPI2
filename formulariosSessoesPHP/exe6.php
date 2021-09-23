<html lang="en">

<head>
  <title>Bootstrap Jquery Add More Field - Exemplo de soma dos positivos e conta negativos</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>

<body>
<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">Bootstrap Jquery Add More Field - Exemplo de soma dos positivos e conta negativos</div>
    <div class="panel-body">

        <form action="" method="post">
      	<div class="input-group control-group after-add-more">
          <input type="text" name="addmore[]" class="form-control" placeholder="Escreva o número aqui">
          <div class="input-group-btn"> 
            <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>
          </div>
        </div>
        <br><input class="btn btn-info" type="submit" value="Contar Numeros">
        </form>


        <!-- Copy Fields -->

        <div class="copy hide">
          <div class="control-group input-group" style="margin-top:10px">
            <input type="text" name="addmore[]" class="form-control" placeholder="Enter Name Here">
            <div class="input-group-btn"> 
              <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
            </div>
          </div>
        </div>

        
    </div>
  </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
      $(".add-more").click(function(){ 
          var html = $(".copy").html();
          $(".after-add-more").after(html);
      });

      $("body").on("click",".remove",function(){ 
          $(this).parents(".control-group").remove();
      });
    });
</script>

<?php
  if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["addmore"])){
    $numeros = $_POST["addmore"];
    $somaPositivos = 0;
    $qtdeNegativos = 0;

    foreach($numeros as $n){
      if($n != ""){
        if($n > 0){
          $somaPositivos += $n;
        }else $qtdeNegativos++;
      }
    }
    echo "A soma dos números positivos é $somaPositivos";
    echo "<br>A quantidade de números negativos é " . $qtdeNegativos;
  }

?>
</body>
</html>