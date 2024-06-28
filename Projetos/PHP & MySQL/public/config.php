<?php
// Incluindo arquivos de funções e classes
require_once 'includes/functions.php';
require_once 'includes/classes/User.php';

$hostname = "mysql";
$username = "root";
$password = "password";
$database = "loja";

// Criar a conexão com o MySQL usando MySQLi
$conn = new mysqli($hostname, $username, $password, $database);

// $sql = "SELECT CPF, NOME, ENDERECO1, ENDERECO2, BAIRRO, CIDADE, ESTADO, CEP, IDADE, SEXO, LIMITE_CREDITO, VOLUME_COMPRA, PRIMEIRA_COMPRA, DATA_NASCIMENTO FROM jpCliente";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     // Início da tabela HTML
//     echo "<table border='1'>";
//     echo "<tr><th>CPF</th><th>NOME</th><th>ENDERECO1</th><th>ENDERECO2</th><th>BAIRRO</th><th>CIDADE</th><th>ESTADO</th><th>CEP</th><th>IDADE</th><th>SEXO</th><th>LIMITE_CREDITO</th><th>VOLUME_COMPRA</th><th>PRIMEIRA_COMPRA</th><th>DATA_NASCIMENTO</th></tr>";

//     // Saída dos dados de cada linha
//     while ($row = $result->fetch_assoc()) {
//         echo "<tr><td>" . $row["CPF"] . "</td><td>" . $row["NOME"] . "</td><td>" . $row["ENDERECO1"] . "</td><td>" . $row["ENDERECO2"] . "</td><td>" . $row["BAIRRO"] . "</td><td>" . $row["CIDADE"] . "</td><td>" . $row["ESTADO"] . "</td><td>" . $row["CEP"] . "</td><td>" . $row["IDADE"] . "</td><td>" . $row["SEXO"] . "</td><td>" . $row["LIMITE_CREDITO"] . "</td><td>" . $row["VOLUME_COMPRA"] . "</td><td>" . $row["PRIMEIRA_COMPRA"] . "</td><td>" . $row["DATA_NASCIMENTO"] . "</td></tr>";
//     }

//     // Fim da tabela HTML
//     echo "</table>";
// } else {
//     echo "0 resultados";
// }

// $conn->close();
