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
    id INT auto_increment NOT NULL primary key,
    nome VARCHAR(50) NOT NULL,
    telefone varchar(30),
    endereco varchar(150) DEFAULT NULL,
    bairro varchar(50) DEFAULT NULL,
    cidade varchar(50) DEFAULT NULL,
    estaddo varchar(50) DEFAULT NULL,
    cep varchar(8) DEFAULT NULL
);

CREATE TABLE bicicletas (
    cor varchar(11) NOT NULL primary key,
    tamanho_do_aro varchar(30) DEFAULT NULL,
    descricao TINYTEXT
);

CREATE TABLE ordem_de_servico (
    id INT auto_increment NOT NULL primary key,
    nome VARCHAR(50) NOT NULL,
    telefone varchar(30),
    endereco varchar(150) DEFAULT NULL,
    bairro varchar(50) DEFAULT NULL,
    cidade varchar(50) DEFAULT NULL,
    estaddo varchar(50) DEFAULT NULL,
    cep varchar(8) DEFAULT NULL
);
