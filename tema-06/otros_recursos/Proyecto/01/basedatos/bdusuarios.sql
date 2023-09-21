DROP DATABASE IF EXISTS bdusuarios;
CREATE DATABASE  IF NOT EXISTS bdusuarios
	DEFAULT CHARACTER SET UTF8
    DEFAULT COLLATE UTF8_GENERAL_CI;

USE bdusuarios;


DROP TABLE IF EXISTS perfiles;
CREATE TABLE IF NOT EXISTS perfiles (

    idPerfil INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    tipoPerfil VARCHAR(20) UNIQUE
);

insert into perfiles values 
    (null, 'Administrador'),
    (null, 'Editor'),
    (null, 'Registrado');

--
-- Tabla Usuarios
DROP TABLE IF EXISTS usuarios;
CREATE TABLE IF NOT EXISTS usuarios (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(15) UNIQUE NOT NULL,
    nombre VARCHAR(20),
    apellidos VARCHAR(45),
    url VARCHAR(45),
    edad TINYINT UNSIGNED,
    idPerfil INT UNSIGNED,
    cliente boolean,
    email VARCHAR(50) UNIQUE NOT NULL,
    pass CHAR(60) NOT NULL,
    fechaReg TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    ultimoAcceso TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (idPerfil) REFERENCES perfiles(idPerfil) 
    ON DELETE RESTRICT ON UPDATE CASCADE
);

insert into usuarios values 
(null, 'nerom24', 'Juan Carlos', 'Moreno Jiménez', 'https://wwww.ieslosremedios.org', '46', 1, true, 'nerom24@gmail.com', '$2y$10$EdDQbC0YuGM/iwSVfuL19udaYCxhCyH2Nmvo9ZmbPGmiHI5xfs/VO', DEFAULT, DEFAULT);