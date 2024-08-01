<?php

namespace Includes\Classes;

class Db
{
    public string $hostname = "172.30.0.2";
    public string $username = "root";
    public string $password = "password";
    public string $database = "DB";

    public function connect(): void
    {
        // Criar a conexão com o MySQL usando MySQLi
        $conn = new \mysqli($this->hostname, $this->username, $this->password, $this->database);

        // Verificar a conexão
        if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
        }

        echo "\nConectado ao banco de dados com suuucesso!\n" . PHP_EOL;
    }
}
