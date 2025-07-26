<?php

namespace App\Models;

use PDO;
use PDOException;
use Database\Conn\Conexao;

class Placar{
    private $pdo;

    public function __construct()
    {
        $this->pdo = Conexao::conectar();
    }
}