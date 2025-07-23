<?php

class Pontuador
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = require __DIR__ . "./../../database/conn.php";
    }

        public function listarJogadores() {
        try{
            $stmt = $this->pdo->query("SELECT * FROM placar_jogos.jogadores");    
          return $stmt->fetchAll(PDO::FETCH_ASSOC); // <-- isso precisa retornar um array
        } catch (PDOException $e) {
            echo "Erro ao buscar jogadores: " . $e->getMessage();
            return [];
        }
    }
}

