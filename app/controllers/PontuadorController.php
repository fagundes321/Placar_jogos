<?php 
require_once __DIR__ . '/../models/pontuador.php';

class PontuadorController {
    public function index() {
        $pontuadorModel = new Pontuador();
        $pontuador = $pontuadorModel->listarJogadores();
        include __DIR__ . '/../../resources/views/pontuador/index.php';
    
    }
}