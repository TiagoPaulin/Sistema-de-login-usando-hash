function mostrarSenhaLogin() {
    let senha = document.getElementById("senha");
    if (senha.type === "password") {
        senha.type = "text";
    } else {
        senha.type = "password";
    }
}

function mostrarSenhaCadastro() {
    let senha = document.getElementById("senha");
    let confirm_senha = document.getElementById("confirmar_senha")
    if (senha.type === "password") {
        senha.type = "text";
        confirm_senha.type = "text";
    } else {
        senha.type = "password";
        confirm_senha.type = "password"
    }
}
