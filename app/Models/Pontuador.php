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

    public function adicionarJogadores($id_time, $jogador, $tag)
    {
        try {
            $sql  = "INSERT INTO placar_jogos.jogadores (id_time, jogador, tag) VALUES (:id_time, :jogador, :tag)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(':id_time', $id_time);
            $stmt->bindValue(':jogador', $jogador);
            $stmt->bindValue(':tag', $tag);

            return $stmt->execute();
        } catch (PDOException $e)
        {
            echo "Erro ao inserir o jogador" . $e->getMessage();   
            return false;       
        }
    }

    public function adicionarTempo($tempo)
    {
        $sql = $this->pdo->query("UPDATE placa_jogos.jogadores SET tempo = :tempo where id = :id ");
       

    }
}
