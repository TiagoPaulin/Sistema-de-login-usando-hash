<?php
    include("CONNECTION/connection.php");

        if ($_SESSION['LOGGED'] == True) {
        header("Location: home.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Formulário de Login</title>
        <link rel="stylesheet" type="text/css" href="CSS/login.css">
        <script src="JAVASCRIPT/funcoes.js"></script>
    </head>
    <body>
        <div>
            <form action="login.php" method="post">
                <h1>Login</h1>
                <label for="email">E-mail:</label>
                <input type="text" id="email" name="email" placeholder="E-mail"required>
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" placeholder="Senha"required> 
                <input type="checkbox" name="mostrar_senha" id="mostrar_senha" onchange = "mostrarSenhaLogin()"> Mostrar Senha
                <p></p>
                <input type="submit" value="Entrar">
                <p></p>
                <center>Ainda não possui cadastro? <a href="CADASTRO/cadastro.php" id="link">Cadastre-se já</a></center>
            </form>
        </div>
        <center>
            <div style="color: white;">
                <?php
                    if(isset($_GET['mensagem'])) {
                        $mensagem = $_GET['mensagem'];
                        if ($mensagem == 1) {
                            echo "<p>Cadastro realizado com sucesso!</p>";
                        }
                    } else if (isset($_GET['error'])) {
                        $error = $_GET['error'];
                        if($error == 1) {
                            echo "<p>Login ou senha invalidos</p>";
                        }
                    }
                ?>
            </div> 
        </center>
    </body>
</html>