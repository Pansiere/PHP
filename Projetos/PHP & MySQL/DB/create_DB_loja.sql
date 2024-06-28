CREATE DATABASE loja;

USE loja;

CREATE TABLE produtos (
    id INT auto_increment NOT NULL primary key,
    nome VARCHAR(50) NOT NULL,
    sku VARCHAR(50) NOT NULL,
    descricao TINYTEXT,
    categoria VARCHAR(50),
    preco FLOAT,
    unidade_medida VARCHAR (40),
    peso FLOAT,
    quantidade_estoque INT,
    fabricante VARCHAR(50),
    fornecedor VARCHAR(50),
    deleted_at DATE,
    create_at DATE,
    update_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

INSERT INTO `loja`.`produtos` (`nome`, `sku`, `descricao`, `categoria`, `preco`, `unidade_medida`, `peso`, `quantidade_estoque`, `fabricante`, `fornecedor`, `deleted_at`, `create_at`, `update_at`) 
VALUES ('Pneu aro 26', 'cod123', 'Pneu comum', 'Pneu', 50, '26', 3, 150, 'Levorin', 'IZAPA', NULL, CURDATE(), CURRENT_TIMESTAMP);

CREATE TABLE clientes (
    CPF varchar(11) NOT NULL primary key,
    NOME varchar(30) DEFAULT NULL,
    ENDERECO1 varchar(150) DEFAULT NULL,
    ENDERECO2 varchar(150) DEFAULT NULL,
    BAIRRO varchar(50) DEFAULT NULL,
    CIDADE varchar(50) DEFAULT NULL,
    ESTADO varchar(50) DEFAULT NULL,
    CEP varchar(8) DEFAULT NULL,
    IDADE smallint DEFAULT NULL,
    SEXO varchar(1) DEFAULT NULL,
    LIMITE_CREDITO float DEFAULT NULL,
    VOLUME_COMPRA float DEFAULT NULL,
    PRIMEIRA_COMPRA bit(1) DEFAULT NULL,
    DATA_NASCIMENTO date DEFAULT NULL
);

INSERT INTO clientes (`CPF`, `NOME`, `ENDERECO1`, `ENDERECO2`, `BAIRRO`, `CIDADE`, `ESTADO`, `CEP`, `IDADE`, `SEXO`, `LIMITE_CREDITO`, `VOLUME_COMPRA`, `PRIMEIRA_COMPRA`, `DATA_NASCIMENTO`) 
VALUES ('14872134554','Joao Pedro V. Pansiere','Ipês','111','Coqueiral','Aracruz','ES','29199144','22','M','3000','232', false, '1999-12-05');
