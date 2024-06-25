<?php
$server = "127.0.0.1";
$username = "php";
$password = "root123";
$database = "SUCOS";

// Criar a conexão com o MySQL usando MySQLi
$conn = new mysqli($server, $username, $password, $database);

// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

echo "Conectado com sucesso!";
