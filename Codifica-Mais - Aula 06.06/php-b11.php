<?php

require_once 'php-b11-functions.php';

$estoque[] = [
    'codigo' => 1,
    'nome' => 'Camisa Polo',
    'tamanho' => 'P',
    'cor' => 'Branca',
    'quantidade' => 5
];

while (true) {
    
    $opcao = exibirMenu();
   
    switch ($opcao) {
        case 1:
            echo "Adicionar um produto\n";
            $codigo = readline("Digite o Código do produto: ");
            $nome = readline("Digite o Nome do produto: ");
            $tamanho = readline("Digite o Tamanho: ");
            $cor = readline("Digite a Cor: ");
            $quantidade = readline("Digite a Quantidade: ");
            adicionarProduto($estoque, $codigo, $nome, $tamanho, $cor, $quantidade);
            break;
        case 2:
            echo "Vender um produto\n";
            $codigo = readline("Digite o código do produto para venda: ");
            $quantidade = readline("Digite a quantidade para venda: ");
            venderProduto($estoque, $codigo, $quantidade);
            break;
        case 3:
            echo "Verificar Estoque\n";
            $codigo = readline("Digite o códgigo do produto para verificar: ");
            verificarEstoque($estoque, $codigo);
            break;
        case 4:
            echo "Listar o Estoque\n";
            listarEstoque($estoque);
            break;
        case 5:
            echo "Saindo...\n";
            // echo $estoque[0]['cor'];
            exit;
        default:
            echo "\nOpção inválida, por favor tente novamente.\n";
            break;
    }
}
?>