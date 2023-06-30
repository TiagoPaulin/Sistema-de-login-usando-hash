<?php
    include("../CONNECTION/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" type="text/css" href="../CSS/cadastro.css">
    <script src="../JAVASCRIPT/funcoes.js"></script>
</head>
<body>
        <form action="cadastro_php.php" method="post">
            <h1>Cadastro</h1>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" placeholder="Nome" pattern = "[A-Z]{1,}[a-z]{1," text="O nome deve possuir ao menos 3 caracteres e nenhum caractere especial"required>
            <label for="data_nascimento">Data de Nascimento:</label>
            <input type="date" id="data_nascimento" name="data_nascimento" placeholder="dd/mm/aaaa"  text="Data de nascimento inválida" required>
            <label for="email">E-mail:</label>
            <input type="text" id="email" name="email" placeholder="E-mail"  text="O email inserido é invalido" required>
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" placeholder="Senha"  text="A senha deve possuir no mínimo 8 caracteres sendo pelo menos 1 maiúsculo"required>
            <label for="confirmar_senha">Confirmar Senha:</label>
            <input type="password" id="confirmar_senha" name="confirmar_senha" placeholder="Confirmar Senha"  text="As senhas informadas não correspondem"required>
            <input type="checkbox" name="mostrar_senha" id="mostrar_senha" onchange="mostrarSenhaCadastro()"> Mostrar Senha
            <p></p>
            <input type="submit" value="Cadastrar"> 
            <p></p>
            <center>Já possui cadastro? <a href="../index.php" id="link">Faça Login</a></center>
        </form>
        <center>
            <div style="color: white;">
                <?php
                    if (isset($_GET['error'])) {
                        $error = $_GET['error'];
                        if ($error == 1) {
                            echo "<p>O E-mail informado já está cadastrado na plataforma</p>";
                        } else if ($error == 2) {
                            echo "<p>As senha informadas são diferentes</p>";
                        }
                    }
                ?>
            </div>
        </center>
</body>
</html>
