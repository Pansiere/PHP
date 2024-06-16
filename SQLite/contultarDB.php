<?php
// Conectar ao banco de dados
$db = new SQLite3('exemplo.db');

// Consultar dados
$result = $db->query('SELECT * FROM usuarios');

// Imprimir resultados
while ($row = $result->fetchArray()) {
    echo "ID: " . $row['id'] . " Nome: " . $row['nome'] . " Idade: " . $row['idade'] . "\n";
}

// Fechar a conexão
$db->close();
