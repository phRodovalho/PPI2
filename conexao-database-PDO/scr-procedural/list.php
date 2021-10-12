<?php
    declare(strict_types=1);
    
    $pdo = require 'connect.php';
    $sql = 'select * from post';

    echo '<h3>Post: </h3><hr>';

    foreach($pdo->query($sql) as $key => $value){
        echo 'Id: ' . $value['idpost'] . '<br>Titulo: '. $value['title'] . '<br>Descrição: ' . $value['description'] . '<br>Data da postagem: ' . $value['date'];
        echo '<br>Likes: ' . $value['likes'] . '<br>UserId: ' . $value['user_idUser'] . '<br>CategoryId: ' . $value['category_idcategory'];
        echo '<br><hr><br>';
    }

    echo '<hr><h3>Category </h3>';

    $sqlc = 'select * from category';

    foreach($pdo->query($sqlc) as $key => $value){
        echo '<br>IdCategory: ' . $value['idcategory'] . '<br>Category: ' . $value['category'] . '<br><hr>';
    }

