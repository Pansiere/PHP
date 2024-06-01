<?php
/*SISTEMA DE CONTROLE DE FUNCIONÁRIOS E SALÁRIOS
Você foi contratado para desenvolver um sistema que gerencie os funcionários de uma
empresa e seus respectivos salários. Considere as seguintes informações:
Dados dos Funcionários:
● Funcionário 1: Pedro
○ Salário Base: R$ 2500,00
○ Horas Extras: 10
● Funcionário 2: Renata
○ Salário Base: R$ 3000,00
○ Horas Extras: 5
● Funcionário 3: Sérgio
○ Salário Base: R$ 2800,00
○ Horas Extras: 8
● Funcionário 4: Vanessa
○ Salário Base: R$ 3200,00
○ Horas Extras: 12
● Funcionário 5: André
○ Salário Base: R$ 1700,00
○ Horas Extras: Não tem
Nota: Armazene os dados dos funcionários em um array
Com base nas informações acima, aqui está o que o programa deve fazer:
Funções para implementar:
1. calcularSalarioTotal($salarioBase, $horasExtras, $valorHoraExtra)
a. Recebe o salário base, as horas extras e o valor da hora extra.
b. Retorna o salário total do funcionário.
2. listarFuncionarios($funcionarios)
a. Imprime todos os funcionários e suas respectivas informações (nome, salário
base, horas extras, salário total).
Procedimentos:
1. Imprimir a lista inicial de funcionários, salários base e horas extras.
2. Calcular o salário total de cada funcionário, considerando que o valor da hora extra é
1,5 vezes o valor da hora normal.
3. Imprimir o salário total de cada funcionário.
Nota: Considere 160 horas trabalhadas por mês ao calcular o valor da hora normal”*/
function valorPorPessoa($valorTodosItens, $numeroTotalParticipantes) {
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