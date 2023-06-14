<?php

`aluno` (
  `nome` varchar(500) DEFAULT NULL,
  `sobrenome` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
 )

// Criando conexão
$conn = new mysqli($server_host, $server_user, $server_password, $server_database);

// Verificando conexão
if ($conn->connect_error) {
  die("Falha na conexão: " . $conn->connect_error);
}
?>
