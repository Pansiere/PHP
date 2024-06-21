<?php

$texto = 'Texto com qualquer coisa poxa e caramba';

//substituindo uma palavra e removendo o resto
echo str_replace(
    ['poxa', 'caramba'],
    ['****'],
    $texto
) . PHP_EOL;;

//strtr = string translate
//trabalha com caractéres, e não com strings
echo strtr(
    $texto,
    'poxa',
    '***@'
) . PHP_EOL;

//mudando palavras encontradas no $texto para outras novas
echo strtr(
    $texto,
    [
        'poxa' => 'p',
        'caramba' => 'c',
    ]
) . PHP_EOL;;
