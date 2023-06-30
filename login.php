<?php
    include("CONNECTION/connection.php");

    // Verifica se os ddos estao sendo passados
    if (isset($_POST['email']) && isset($_POST['senha'])) {
        
        // $email = $mysqli->real_escape_string($_POST['email']);
        // $senha = $mysqli->real_escape_string($_POST['senha']);

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $queryLogin = "SELECT * FROM dados_usuario WHERE USER_EMAIL = '$email'";
        $consulta = $mysqli->query($queryLogin) or die("Falha na execução do código sql" . $mysqli->error);

        if($consulta->num_rows > 0) {
            $user = $consulta->fetch_assoc();

            if (password_verify($senha, $user['USER_PASSWORD'])) {
                header("Location: home.php");
            } else {
                header("Location: index.php?error=1");
            }
        } 
    }
?>