<?php

$alunos2023 = [
    'JP',
    'Victoria',
    'Maria',
    'Pansiere',
    'Alou',
    'Moyses',
    'Joelma',
    'Vicente',
    'Fulano',
];

$novosAlunos = [
    'Angela',
    'Patricia',
    'Jacira',
    'Kiko ',
    'Teste1',
    'Testando',
    'LaeleMilVezes',
    'Irineu',
    'VcNSabeNemEu',
    'MuitoClaro',
    'QualABoa',
    'Array merger',
];

$alunos2024 = $alunos2023 + $novosAlunos;

//Observe que os indices serão sobreescritos.
var_dump($alunos2024);
