<?php
/*Você está organizando um churrasco com amigos e precisa dividir os custos igualmente entre todos. Sua tarefa é criar um programa que calcule quanto cada pessoa deve pagar com base nos itens comprados e no número de participantes. Aqui está o que o programa deve fazer:
1. Crie um array para armazenar os itens comprados no churrasco e outro array para armazenar o preço de cada item.
2. Solicite número total de participantes do churrasco.
3. Crie uma função que receba o valor total dos itens e o número de participantes como parâmetros, e retorne o valor que cada pessoa deve pagar.
4. Após calcular o valor que cada pessoa deve pagar, imprima o resultado, indicando quanto cada uma deve contribuir para o churrasco.
5. Imprima qual foi o item mais caro do churrasco.
6. Se o número de participantes for igual ou menor que um, imprima uma mensagem. “O churrasco foi cancelado, todo mundo furou!”*/
    function calcularMedia(array $notas) : float {
        $somas = 0;
        for($i = 0; $i <= 4; $i++){
            $somas = $somas + $notas[$i];
        }
        $mediasDasNotas = $somas / 5;
        return $mediasDasNotas;
    }
    $notasAlunos = [
        [8.5, 6.0, 7.8, 9.2, 5.5], // Aluno 1
        [7.0, 8.0, 6.5, 7.5, 8.5], // Aluno 2
        [6.5, 7.5, 4.5, 5.5, 7.0], // Aluno 3
        [5.0, 4.6, 7.8, 9.0, 6.0]  // Aluno 4
    ];
    foreach ($notasAlunos as $indiceAluno => $notas) {
        $media = calcularMedia($notas);
        echo "A média do Aluno " . ($indiceAluno + 1) . " é de: " . $media . PHP_EOL;
    }
//passei umas 3hrs nesse código. acho q agr foi :')
?>