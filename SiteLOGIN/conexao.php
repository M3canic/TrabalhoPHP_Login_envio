<?php

$servidor = "localhost";
$usuario = "root";
$senha = "aluno";
$banco = "bank_data";

$conn = new mysqli($servidor, $usuario, $senha, $banco);

if ($conn->connect_error){
    die("Erro de Conexão" . $conn-> connect_error);
}
?>
