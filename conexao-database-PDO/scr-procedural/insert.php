<?php
declare(strict_types=1);

$pdo = require 'connect.php';
$sql = 'INSERT into category (category) VALUES (?)';

$prepare = $pdo->prepare($sql);

$prepare->bindParam(1, $_GET['category']);
$prepare->execute();

echo $prepare->rowCount();