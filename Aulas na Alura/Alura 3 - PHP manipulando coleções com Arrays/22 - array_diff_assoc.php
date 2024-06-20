<?php

$notasBimestre1 = [
    'JP' => 8,
    'Maria' => '10',
    'Pedro' => 5,
    'Pansiere' => 7,
    'Alou' => 4,
    'Moyses' => 5,
    'Joelma' => 6,
    'Vicente' => 4,
];

$notasBimestre2 = [
    'JP' => 9,
    'Maria' => '10',
    'Pedro' => 5,
    'Pansiere' => 10,
    'Moyses' => 5,
    'Alou' => 4,
    'Joelma' => 5,
    'Vicente' => 4,
];

var_dump(array_diff_assoc($notasBimestre1, $notasBimestre2));
