<?php
include "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $nome = $_POST["nome"];
    $senha = password_hash($senha, PASSWORD_DEFAULT);

    // Confirmo o email
    $confemail_sql = "SELECT * FROM usuario WHERE email = '$email'";
    $confemail_result = $conn->query($confemail_sql);

    if ($confemail_result->num_rows > 0) {
        echo "Email inválido: já está sendo utilizado";
    } else {
        
        //onde insiro um novo usuario

        $sql = "INSERT INTO usuario (email, nome, senha_hash) VALUES ('$email', '$nome', '$senha')";

        if ($conn->query($sql) === TRUE) {
            header("Location: pagloginsucesso.html");
            exit;
        } else {
            echo "Erro ao cadastrar: " . $conn->error;
        }
    }

    $conn->close();
}

?>
