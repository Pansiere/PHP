<?php
$array = [];
$array[] = ['Valor' => 5];
$greeting = "Hello\n";

echo $greeting;

foreach ($array as $key => $numeros) {
    echo 'O índice ' . $key . ' tem o valor de: ' . $numeros['Valor'] . PHP_EOL;
}
