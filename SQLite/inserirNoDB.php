<?php
// Verificar se o arquivo do banco de dados existe
if (!file_exists('exemplo.db')) {
    echo "O banco de dados ainda não foi criado.";
    exit; // Termina a execução do script se o banco de dados não existe
}

// Conectar ao banco de dados
$db = new SQLite3('exemplo.db');

// Inserir dados apenas se o banco de dados existir
$stmt = $db->prepare('INSERT INTO usuarios (nome, idade) VALUES (:nome, :idade)');
$stmt->bindValue(':nome', 'Alice', SQLITE3_TEXT);
$stmt->bindValue(':idade', 30, SQLITE3_INTEGER);
$result = $stmt->execute();

$stmt->bindValue(':nome', 'Bob', SQLITE3_TEXT);
$stmt->bindValue(':idade', 25, SQLITE3_INTEGER);
$result = $stmt->execute();

if ($result) {
    echo "Dados inseridos com sucesso.";
} else {
    echo "Erro ao inserir dados.";
}

// Fechar a conexão
$db->close();
