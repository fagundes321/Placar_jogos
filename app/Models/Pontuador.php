<?php

namespace App\Models;

use PDO;
use PDOException;
use Database\Conn\Conexao;

class Pontuador
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = Conexao::conectar();
    }

    public function listarJogadores()
    {
        try {
            $stmt = $this->pdo->query("SELECT * FROM placar_jogos.jogadores");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erro ao buscar jogadores: " . $e->getMessage();
            return [];
        }
    }
}
