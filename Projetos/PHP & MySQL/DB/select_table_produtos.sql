SELECT `produtos`.`id`,
    `produtos`.`nome`,
    `produtos`.`sku`,
    `produtos`.`descricao`,
    `produtos`.`categoria`,
    `produtos`.`preco`,
    `produtos`.`unidade_medida`,
    `produtos`.`peso`,
    `produtos`.`quantidade_estoque`,
    `produtos`.`fabricante`,
    `produtos`.`fornecedor`,
    `produtos`.`deleted_at`,
    `produtos`.`create_at`,
    `produtos`.`update_at`
FROM `loja`.`produtos`;
