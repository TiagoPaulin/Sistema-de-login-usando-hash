<?php
    include("../CONNECTION/connection.php");
    $email = $_POST["email"];
    $queryEmail = "SELECT * FROM dados_usuario WHERE USER_EMAIL = '$email'";
    $consulta = $mysqli->query($queryEmail);

    if ($consulta->num_rows > 0) {
        header("Location: cadastro.php?error=1");
    } else {
        $senha = $_POST["senha"];
        $confirm_senha = $_POST["confirmar_senha"];
        if ($senha === $confirm_senha) {
            $senha_hash = password_hash($senha, PASSWORD_DEFAULT);
            $nome = $_POST["nome"];
            $data_nascimento = $_POST["data_nascimento"];
            $queryInsert = "INSERT INTO 
                                dados_usuario (USER_NAME, USER_EMAIL, USER_PASSWORD, USER_NASCIMENTO) 
                                VALUES ('$nome', '$email', '$senha_hash', '$data_nascimento')";
            $insert = $mysqli->query($queryInsert);
            header("Location: ../index.php?mensagem=1");
        } else {
            header("Location: cadastro.php?error=2");
        }
    }
?>
