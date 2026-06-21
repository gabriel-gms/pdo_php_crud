<?php
require 'config.php';

$dsn = "mysql:host=$ENV_HOST;dbname=$ENV_DBNAME";

$pdo = new PDO($dsn, $ENV_USERNAME, $ENV_PASSWORD);

try {
    echo 'Conexão realizada com sucesso.';
} catch (PDOException $error){
    echo 'Erro na conexão: '. $error->getMessage();
}