USE loja;

INSERT INTO `loja`.`produtos` (`nome`, `sku`, `descricao`, `categoria`, `preco`, `unidade_medida`, `peso`, `quantidade_estoque`, `fabricante`, `fornecedor`, `deleted_at`, `create_at`, `update_at`) 
VALUES ('Pneu aro 26', 'cod123', 'Pneu comum', 'Pneu', 50, '26', 3, 150, 'Levorin', 'IZAPA', NULL, CURDATE(), CURRENT_TIMESTAMP);