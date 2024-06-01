<?php
/*CÁLCULO DE DESCONTO PROGRESSIVO
Crie um programa que calcule o valor final de uma compra com desconto progressivo. O
programa deve conter as seguintes funções:
1 - aplicarDesconto($valorCompra, $percentualDesconto): Recebe o valor da compra e
o percentual de desconto como parâmetros e retorna o valor final com o desconto aplicado.
2 - calcularDescontoProgressivo($valorCompra): Recebe o valor da compra como
parâmetro e retorna o valor final com o desconto progressivo aplicado.
● Se o valor da compra for menor que R$ 100,00, não há desconto.
● Se o valor da compra for entre R$ 100,00 e R$ 500,00, aplica-se um desconto de
10%.
● Se o valor da compra for maior que R$ 500,00, aplica-se um desconto de 20%.
O programa deve solicitar ao usuário o valor da compra e exibir o valor final após a
aplicação do desconto progressivo.
”*/
function valorPorPessoa($valorTodosItens, $numeroTotalParticipantes) {
    if ($numeroTotalParticipantes == 0) {
        return 0;
    }
    $valorCadaPessoaDevePagar = $valorTodosItens / $numeroTotalParticipantes;
    return $valorCadaPessoaDevePagar;
}

$itensComprados = ['carvao', 'carne', 'calabresa', 'refrigerantes', 'temperos'];
$precoItens = [30, 60, 35, 30, 15];
$totalPrecoItens = 0;
$itemMaisCaro = $precoItens[0];

for ($i = 0; $i < count($precoItens); $i++) {
    $totalPrecoItens = $precoItens[$i] + $totalPrecoItens;
    if($itemMaisCaro < $precoItens[$i]){
        $itemMaisCaro = $precoItens[$i];
        $indiceItemMaisCaro = $i;
    }
}
echo "Qual o numero total de participantes? ";
$numeroParticipantes = trim(fgets(STDIN));

if ($numeroParticipantes >= 2) {
    $resultado = valorPorPessoa($totalPrecoItens, $numeroParticipantes);
    echo "Cada pessoa deve contribuir para o churrasco com R$" . $resultado . ",00.\nO item mais caro do churrasco foi o(a) " . $itensComprados[$indiceItemMaisCaro] . ", que custou R$$itemMaisCaro,00.";
}else {
    echo "O churrasco foi cancelado, todo mundo furou!";
}