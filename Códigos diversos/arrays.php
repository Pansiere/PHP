<?php
$array = [1, 2, 3, 4, 5, 6];

foreach ($array as $key) {
    echo $key . PHP_EOL;
}

for ($i = 0; $i < count($array); $i++) {
    echo 'O índice ' . $i . ' armazena o número ' . $array[$i] . PHP_EOL;
}
