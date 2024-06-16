<?php
// Conectar ao banco de dados (ou criar se não existir)
$db = new SQLite3('exemplo.db');

// Criar uma tabela
$db->exec('CREATE TABLE IF NOT EXISTS usuarios (
    id INTEGER PRIMARY KEY,
    nome TEXT,
    idade INTEGER
)');

// Inserir dados
$stmt = $db->prepare('INSERT INTO usuarios (nome, idade) VALUES (:nome, :idade)');
$stmt->bindValue(':nome', 'Alice', SQLITE3_TEXT);
$stmt->bindValue(':idade', 30, SQLITE3_INTEGER);
$stmt->execute();

$stmt->bindValue(':nome', 'Bob', SQLITE3_TEXT);
$stmt->bindValue(':idade', 25, SQLITE3_INTEGER);
$stmt->execute();

// Consultar dados
$result = $db->query('SELECT * FROM usuarios');

while ($row = $result->fetchArray()) {
    echo "ID: " . $row['id'] . " Nome: " . $row['nome'] . " Idade: " . $row['idade'] . "\n";
}

// Fechar a conexão
$db->close();
?>