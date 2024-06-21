<?php

//substituindo uma palavra e removendo o resto:
$texto = 'Texto com qualquer coisa poxa e caramba';
echo str_replace(
    ['poxa', 'caramba'],
    ['****'],
    $texto
) . PHP_EOL;;

//translating - trabalha com caractéres, e não com strings
echo strtr(
    $texto,
    'poxa',
    '***@'
) . PHP_EOL;

echo strtr(
    $texto,
    [
        'poxa' => 'p',
        'caramba' => 'c',
    ]
) . PHP_EOL;;
