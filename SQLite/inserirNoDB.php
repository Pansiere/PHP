<?php
// Conectar ao banco de dados
$db = new SQLite3('exemplo.db');

// Inserir dados
$stmt = $db->prepare('INSERT INTO usuarios (nome, idade) VALUES (:nome, :idade)');
$stmt->bindValue(':nome', 'Alice', SQLITE3_TEXT);
$stmt->bindValue(':idade', 30, SQLITE3_INTEGER);
$stmt->execute();

$stmt->bindValue(':nome', 'Bob', SQLITE3_TEXT);
$stmt->bindValue(':idade', 25, SQLITE3_INTEGER);
$stmt->execute();

echo "Dados inseridos com sucesso.";

// Fechar a conexão
$db->close();
