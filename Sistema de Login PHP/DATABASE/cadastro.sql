CREATE DATABASE cadastro;
USE cadastro;

/*Tabela que armazena os dados do usuário cadastrado*/
CREATE TABLE dados_usuario (
    USER_ID INT(3) NOT NULL AUTO_INCREMENT,
    USER_NAME VARCHAR(30) NOT NULL,
    USER_EMAIL VARCHAR(50) NOT NULL,
    USER_PASSWORD VARCHAR(255) NOT NULL,
    USER_NASCIMENTO DATE NOT NULL,
    PRIMARY KEY (USER_ID)
);