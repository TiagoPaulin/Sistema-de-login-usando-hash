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
            <input type="text" id="nome" name="nome" placeholder="Nome" pattern = "^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]{3,100}$" title="O nome deve possuir ao menos 3 caracteres e nenhum caractere especial" required>
            <label for="data_nascimento">Data de Nascimento:</label>
            <input type="date" id="data_nascimento" name="data_nascimento" placeholder="dd/mm/aaaa"  title="Insira uma data de nascimento válida" required>
            <label for="email">E-mail:</label>
            <input type="text" id="email" name="email" placeholder="E-mail" pattern = "^[\w*\.]+@([\w-]+\.)+[\w-]{2,4}$" title="Tente novamente, Exemplo: email@email.com" required>
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" placeholder="Senha" pattern = "^(?=.*[A-Z]).{8,}$"  title="A senha deve possuir no mínimo 8 caracteres sendo pelo menos 1 maiúsculo" required>
            <label for="confirmar_senha">Confirmar Senha:</label>
            <input type="password" id="confirmar_senha" name="confirmar_senha" placeholder="Confirmar Senha" pattern = "^(?=.*[A-Z]).{8,}$"  title="A senha deve possuir no mínimo 8 caracteres sendo pelo menos 1 maiúsculo" required>
            <input type="checkbox" name="mostrar_senha" id="mostrar_senha" onchange="mostrarSenhaCadastro()"> Mostrar Senha
            <p></p>
            <input type="submit" value="Cadastrar"> 
            <p></p>
            <center>Já possui cadastro? <a href="../index.php" id="link">Faça Login</a></center>
        </form>
        <script>
            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth() + 1; //Janeiro é 0!
            var yyyy = today.getFullYear();

            if (dd < 10) {
            dd = '0' + dd;
            }

            if (mm < 10) {
            mm = '0' + mm;
            } 
                
            today = yyyy + '-' + mm + '-' + dd;
            document.getElementById("data_nascimento").setAttribute("max", today);
        </script>
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
