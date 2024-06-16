<?php
// Verificar se o arquivo do banco de dados existe
if (!file_exists('exemplo.db')) {
    echo "O banco de dados ainda não foi criado.";
    exit; // Termina a execução do script se o banco de dados não existe
}

// Conectar ao banco de dados
$db = new SQLite3('exemplo.db');

// Consultar dados
$result = $db->query('SELECT * FROM usuarios');

// Verificar se há dados para imprimir
if ($result) {
    // Imprimir resultados
    while ($row = $result->fetchArray()) {
        echo "ID: " . $row['id'] . " Nome: " . $row['nome'] . " Idade: " . $row['idade'] . "\n";
    }
} else {
    echo "Não há dados para exibir.";
}

// Fechar a conexão
$db->close();
