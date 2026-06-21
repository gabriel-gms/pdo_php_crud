<?php
require_once 'connection.php';

$pdo->beginTransaction();

$sql = "INSERT INTO usuarios (username, name, password) VALUES (:username, :name, :password)";

$stmt = $pdo->prepare($sql);

$_name = 'Gabriel Gomes';
$_username = 'gomesm';
$_password = '123456';

$stmt->bindParam(':username', $_username);
$stmt->bindParam(':name', $_name);
$stmt->bindParam(':password', $_password);
$stmt->execute();

$sql = "INSERT INTO usuarios (username, name, password) VALUES (:username, :name, :password)";

$stmt = $pdo->prepare($sql);

$_name2 = 'Gabriel Gomes Madeira';
$_username2 = 'gomesgabriel';
$_password2 = '123456';

$stmt->bindParam(':username', $_username2);
$stmt->bindParam(':name', $_name2);
$stmt->bindParam(':password', $_password2);
$stmt->execute();

$pdo->commit();