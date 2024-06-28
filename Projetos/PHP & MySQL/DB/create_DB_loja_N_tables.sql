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
