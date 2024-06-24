<?php
// Incluindo arquivos de funções e classes
require_once 'includes/functions.php';
require_once 'includes/classes/User.php';

// Definindo constantes para conexão com banco de dados
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'meu_banco');

// Iniciando a sessão
session_start();

// Configurações adicionais
$siteName = 'Minha Página PHP';
$adminEmail = 'admin@exemplo.com';

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);

// session_start();
// if (!isset($_SESSION['user_id'])) {
//     header('Location: login.php');
//     exit;
// }

try {
    // código que pode lançar uma exceção
} catch (Exception $e) {
    error_log($e->getMessage());
    echo 'Ocorreu um erro, por favor tente novamente mais tarde.';
}
