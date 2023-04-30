<?php
    include("CONNECTION/connection.php");

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $login = "SELECT USER_EMAIL, USER_PASSWORD FROM cadastro_usuario WHERE USER_EMAIL = '$email'";
    $consulta = $mysqli->query($login);
    $resultado = mysqli_num_rows($consulta);
    if ($resultado > 0) {
        $usuario = $consulta->fetch_assoc();
        if (password_verify($senha, $usuario['USER_PASSWORD'])) {
            header("Location: home.php");
        }
    } else {
        header("Location: index.php?error=1");
    }
?>