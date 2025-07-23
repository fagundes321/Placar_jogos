<?php

$hostname = 'mysql-db';
$port     = '3306';
$database = 'placar_jogos';
$username = 'root';
$password = '123';

try {
    $pdo = new PDO("mysql:host=$hostname;port=$port;dbname=$database", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     return $pdo;
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
