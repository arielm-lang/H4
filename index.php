<?php

require_once 'Livro.php';
require_once 'Revista.php';

$livro1 = new Livro('Heartstopper', 2016, 'Alice Oseman');
$livro1->mostrarLivro();

$livro2 = new Livro('Dom Casmurro', 1899, 'Machado de Assis');
$livro2->mostrarLivro();

$revista = new Revista('Revista Capricho', 1952, 1400);
$revista->mostrarRevista();