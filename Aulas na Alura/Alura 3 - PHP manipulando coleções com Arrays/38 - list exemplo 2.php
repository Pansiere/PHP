<?php

$dados = [
    'nome' => 'João Pedro V. Pansiere',
    'nota' => 10,
    'idade' => 22
];

['nome' => $nome, 'nota' => $nota, 'idade' => $idade] = $dados;

var_dump($nome, $nota, $idade);
