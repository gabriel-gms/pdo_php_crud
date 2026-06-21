<?php
require_once "connection.php";

$id = 1;

$sql = "DELETE FROM usuarios WHERE id = :id";

$stmt = $pdo->prepare($sql);
$stmt->bindParam(":id", $id);
$stmt->execute();