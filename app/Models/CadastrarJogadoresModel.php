<?php

namespace App\Models;

use PDO;
use PDOException;
use Database\Conn\Conexao;

class CadastrarJogadores{
    private $pdo;

    public function __construct()
    {
        $this->pdo = Conexao::conectar();
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
}