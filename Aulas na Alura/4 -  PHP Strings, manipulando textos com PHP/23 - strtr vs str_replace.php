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
echo "strtr:\n" . strtr("hi all, I said hello", $trans) . PHP_EOL;

echo PHP_EOL;

//o str_replace não respeita as alterações já feitas
echo "str_replace:\n" . str_replace(['hello', 'hi'], ['hi', 'hello'], "hi all, I said hello");
