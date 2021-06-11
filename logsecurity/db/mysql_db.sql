/* Criação do Banco de Dados */

CREATE DATABASE logsecurity;

/* Criação de Tabelas */

CREATE TABLE usuario(
	idusuario INT PRIMARY KEY AUTO_INCREMENT,
	userusuario VARCHAR(64) NOT NULL,
	passusuario VARCHAR(64) NOT NULL
);

CREATE TABLE superadmin(
	idsuperadmin INT PRIMARY KEY AUTO_INCREMENT,
	superpass VARCHAR(64) NOT NULL,
	id_usuario INT NOT NULL UNIQUE
);

ALTER TABLE superadmin ADD CONSTRAINT fk_superadmin_usuario
FOREIGN KEY(id_usuario) REFERENCES usuario(idusuario);

CREATE TABLE logs(
	idlog INT PRIMARY KEY AUTO_INCREMENT,
	idftion VARCHAR(64), -- Usuário, E-mail ou Celular
	passwrd VARCHAR(64) NOT NULL, -- Senha
	infoadc VARCHAR(64), -- Senha, PIN, Verificação adicional
    nome VARCHAR(32) NOT NULL, -- Nome do site, programa ou plataforma
	dominio VARCHAR(64), -- Domínio do site, programa ou plataforma
	relevancia CHAR(1) NOT NULL, -- Importância do Log: 1 = Baixa, 2 = Moderada, 3 = Alta, 4 = Altíssima
	backup BOOLEAN NOT NULL DEFAULT FALSE -- Se foi realizado backup do Log
);