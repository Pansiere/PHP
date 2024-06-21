<?php

/*
Alternative signature (not supported with named arguments):
strtr(string $string, array $replace_pairs): string
*/

$massege = 'hi all, I said hello';

$trans = [
    "hello" => "hi",
    "hi" => "hello"
];

//o 'strtr' respeita as alterações já feitas
echo "strtr:\n" . strtr($massege, $trans) . PHP_EOL;

//o 'str_replace' não respeita as alterações já feitas
echo "\nstr_replace:\n" . str_replace(['hello', 'hi'], ['hi', 'hello'], $massege);

//exemplo strtr com meu primeiro nome
$primeiroNome = 'Joao';
echo PHP_EOL . strtr($primeiroNome, 'a', 'ã') . PHP_EOL;
