<?php
/*  Encontrar Elemento e Índice
    Descrição: Escreva um programa que leia um array de 7 elementos e um número. O programa deve imprimir se o número está presente no array e em que posição(ões).
*/
    echo "Programa que lê um array de 7 elementos e um número. E imprimi se o número está presente no array e em que posição(ões).\n";

    for ($i = 1; $i <= 7; $i++){
        echo "Digite o " . $i . "° elemento ou um número: ";
        $lista[] = trim(fgets(STDIN));
    }   
    foreach ($lista as $var) {
        if (gettype($var) === "integer") {
            echo "teste";
        }
    }
?>
