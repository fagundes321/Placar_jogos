<?php

namespace App\Models;

use PDO;
use PDOException;
use Database\Conn\Conexao;

class CadastrarTempo{
    private $pdo;

    public function __construct()
    {
        $this->pdo = Conexao::conectar();
    }

    public function adicionarTempo($tempo, $id)
    {
        $sql = "UPDATE placa_jogos.jogadores SET tempo = :tempo where id = :id ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':tempo' , $tempo);
        $stmt->bindValue(':id', $id);
        $stmt->execute();

    }
}