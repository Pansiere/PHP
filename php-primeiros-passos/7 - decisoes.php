<?php 

$idade = 21;

echo "Você só pode entrar se tiver mais do que 18 anos" . PHP_EOL;

if ($idade > 18) {
    echo "Você tem $idade anos." . PHP_EOL;
    echo 'Pode entrar';
}