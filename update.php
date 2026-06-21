<?php
require_once "connection.php";

$name = "Gabriel Gomes Madeira";
$id = 1;

$sql = "UPDATE usuarios SET name = :name WHERE id = :id";

$stmt = $pdo->prepare($sql);

$stmt->bindParam(":name", $name);
$stmt->bindParam(":id", $id);

$stmt->execute();
echo $stmt->rowCount();