<?php
// $array = [];
// $array[] = ['Valor' => 5];
// $greeting = "Hello\n";

// echo $greeting;

// foreach ($array as $key => $numeros) {
//     echo 'O índice ' . $key . ' tem o valor de: ' . $numeros['Valor'] . PHP_EOL;
// }
?>
<?php
$numero = 4;

function teste()
{
    global $numero;
    echo 'Variável global $número: ' . $numero . PHP_EOL;

    static $soma = 10;
    echo ($soma == 10) ? 'Variável estática $soma antes dos incrementos: ' . $soma . PHP_EOL : 'Variável estática $soma depois dos incrementos: ' . $soma . PHP_EOL;

    $somaMaisMais = $soma++;
    echo 'Variável $somaMaisMais: ' . $somaMaisMais . ', e variável $soma após $somaMaisMais: ' . $soma . PHP_EOL;

    $soma = $soma + 2;
    echo 'Variável $soma + 2, após incremento em $somaMaisMais: ' . $soma . PHP_EOL;

    return PHP_EOL;
}

echo teste();
echo teste();
echo teste();
?>
