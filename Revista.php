<?php

require_once 'Publicacao.php';

class Revista extends Publicacao {
    private int $edicao;

    public function __construct($titulo, $anoPublicacao, $edicao) {
        parent::__construct($titulo, $anoPublicacao);
        $this->edicao = $edicao;
    }

    public function mostrarRevista(): void {
        echo 'Título: ' . $this->titulo . ' | Ano de Publicação: ' . $this->getAnoPublicacao() . ' | Edição: ' . $this->edicao . '<br>';
    }
}