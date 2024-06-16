<?php
// Conectar ao banco de dados (ou criar se não existir)
$db = new SQLite3('exemplo.db');

// Criar uma tabela 'usuarios' se ela não existir
$db->exec('CREATE TABLE IF NOT EXISTS usuarios (
    id INTEGER PRIMARY KEY,
    nome TEXT,
    idade INTEGER
)');

// Fechar a conexão
$db->close();

echo "Banco de dados criado com sucesso e tabela 'usuarios' criada (se ainda não existisse).";
