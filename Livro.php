<?php

require_once 'Publicacao.php';

class Livro extends Publicacao {
    private string $autor;

    public function __construct($titulo, $anoPublicacao, $autor) {
        parent::__construct($titulo, $anoPublicacao);
        $this->autor = $autor;
    }

    public function mostrarLivro(): void {
        echo 'Título: ' . $this->titulo . ' | Ano de Publicação: ' . $this->getAnoPublicacao() . ' | Autor: ' . $this->autor . '<br>';
    }
}