<?php

declare(strict_types=1);

$pdo = require 'connect.php';

$sql = 'delete from category where idcategory = ?';

$prepare = $pdo->prepare($sql);

$prepare->bindParam(1, $_GET['id']);
$prepare->execute();

echo $prepare->rowCount();