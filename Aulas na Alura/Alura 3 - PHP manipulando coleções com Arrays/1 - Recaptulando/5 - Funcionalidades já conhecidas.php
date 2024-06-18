<?php
$array = [
    1 => 'um',
    true => 'dois',
    1.9 => 'tres',
    2 => 'dois',
];

var_dump($array);

foreach ($array as $key) {
    echo 'Primeiro foreach => Indice ' . $key . PHP_EOL;
}

foreach ($array as $key => $value) {
    echo 'Indice ' . $key . ' tem valor: ' . $value . PHP_EOL;
}
