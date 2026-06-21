<?php
require_once 'connection.php';

$sql = "INSERT INTO usuarios (username, name, password) VALUES (:username, :name, :password)";

$stmt = $pdo->prepare($sql);

$_name = 'Gabriel';
$_username = 'gmssss';
$_password = '123456';

$stmt->bindParam(':username', $_username);
$stmt->bindParam(':name', $_name);
$stmt->bindParam(':password', $_password);

$stmt->execute(); //Retorna booleano