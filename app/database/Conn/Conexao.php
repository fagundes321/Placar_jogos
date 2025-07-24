<?php

namespace Database\Conn;

use PDO;
use PDOException;

class Conexao
{
    public static function conectar()
    {
        // echo "<pre>" . var_dump('entrou') . "</pre>";
        // exit;
        $hostname = 'mysql-db';
        $port     = '3306';
        $database = 'placar_jogos';
        $username = 'db_user';
        $password = 'password';

        try {
            $pdo = new PDO("mysql:host=$hostname;port=$port;dbname=$database", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo "Erro na conexão: " . $e->getMessage();
            exit;
        }
    }
}
