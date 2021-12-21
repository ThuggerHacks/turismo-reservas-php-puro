CREATE DATABASE turismo;
use turismo;
CREATE TABLE users(
    id int not null primary key auto_increment,
    nome VARCHAR(100) not null,
    senha VARCHAR(160),
    passaporte VARCHAR(50),
    email   VARCHAR(100),
    gender    VARCHAR(20)
);

CREATE TABLE excursao(
    id int not null primary key auto_increment,
    numero_turne  VARCHAR(20),
    nome_turne   VARCHAR(30),
    preco_turne    DECIMAL,
    carro_turne     VARCHAR(50),
    dirigida        BOOLEAN,
    motorista_turne   VARCHAR(100),
    matricula       VARCHAR(50),
    numero_acentos    INT,
    imagem            VARCHAR(100),
    guia              VARCHAR(50),
    data              VARCHAR(100)
);

CREATE TABLE galeria(
    id int not null primary key auto_increment,
    id_excursao int,
    foto VARCHAR(200) not null,
    FOREIGN KEY (id_excursao) REFERENCES excursao(id_excursao) ON DELETE CASCADE
);
CREATE TABLE reserva(
    id int not null primary key auto_increment,
    email VARCHAR(100),
    id_excursao int,
    data_turne VARCHAR(200)
);