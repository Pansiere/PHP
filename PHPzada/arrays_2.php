<?php
$array = [];
$array[] = ['Valor' => 5];
$array[1] = ['Valor' => 6];
$array[] = ['Valor' => 8];
$array[10] = ['Valor' => 11];
$array[] = ['Valor' => 89];

$greeting = "Hello\n";
echo $greeting;

foreach ($array as $key => $numeros) {
    echo 'No índice/chave ' . $key . ', em \'Valor\' tem o número: ' . $numeros['Valor'] . ' armazenado' . PHP_EOL;
}
