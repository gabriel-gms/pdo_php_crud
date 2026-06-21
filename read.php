<?php
require_once 'connection.php';

$sql = "SELECT * FROM usuarios WHERE username = 'gms'";

$stmt = $pdo->prepare($sql);
$result = $stmt->execute();

if($result){
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach($data as $linha){
        echo "<pre>";
        var_dump($linha["username"]);
        echo "<pre>";
        echo "<hr>";
    }
}