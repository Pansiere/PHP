<?php
function getClientes($conn)
{
    $sql = "SELECT CPF, NOME, ENDERECO1, ENDERECO2, BAIRRO, CIDADE, ESTADO, CEP, IDADE, SEXO, LIMITE_CREDITO, VOLUME_COMPRA, PRIMEIRA_COMPRA, DATA_NASCIMENTO FROM jpCliente";
    $result = $conn->query($sql);

    $clientes = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $clientes[] = $row;
        }
    }
    return $clientes;
}
