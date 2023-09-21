-- Examen Tema 5
-- Warren Marc Edwards
-- 26-01-2018



-- Ejercico 1
DROP DATABASE IF EXISTS PuertoDeportivo;
CREATE DATABASE IF NOT EXISTS PuertoDeportivo;
USE PuertoDeportivo;
-- TABLA SOCIOS
DROP TABLE IF EXISTS Socios;
CREATE TABLE IF NOT EXISTS Socios (
	CodSocio SMALLINT UNSIGNED AUTO_INCREMENT,
    Nombre VARCHAR(20) NOT NULL, 
    Apellidos VARCHAR(25) NOT NULL, 
    Direccion VARCHAR(25) NOT NULL, 
	Poblacion VARCHAR(25) NOT NULL DEFAULT 'Marbella',
    Provincia VARCHAR(20) NOT NULL DEFAULT 'Malaga',
	CPostal CHAR(5) NOT NULL DEFAULT '29604', 
    Nacionalidad VARCHAR(25) DEFAULT 'España', 
    TelefonoFijo CHAR(9), 
    Movil CHAR(9),
    Email VARCHAR(35) UNIQUE, 
    FecNacimiento DATE, 
    FechaIngreso DATE, 
    DNI CHAR(9) UNIQUE,
    Cuota DECIMAL(10,2) DEFAULT 10000,
    SocioAvalista SMALLINT UNSIGNED,
    CONSTRAINT PK_Socios PRIMARY KEY (CodSocio),
    CONSTRAINT FK_SocioAvalista FOREIGN KEY (SocioAvalista) 
        REFERENCES Socios(CodSocio)
        ON DELETE RESTRICT ON UPDATE CASCADE
);
-- TABLA EMPLEADOS
DROP TABLE IF EXISTS Empleados;
CREATE TABLE IF NOT EXISTS Empleados (
	CodEmpleado SMALLINT UNSIGNED AUTO_INCREMENT,
    Nombre VARCHAR(20) NOT NULL, 
    Apellidos VARCHAR(25) NOT NULL, 
    Direccion VARCHAR(25) NOT NULL, 
	Poblacion VARCHAR(25) NOT NULL,
    Provincia VARCHAR(20) NOT NULL,
	CPostal CHAR(5) NOT NULL, 
    TelefonoFijo CHAR(9), 
    Movil CHAR(9) UNIQUE,
    Email VARCHAR(35),
    FechNacimiento DATE,
    FechaAlta DATE,
    DNI CHAR(9) UNIQUE,
    Cargo VARCHAR(25),
    NSS CHAR(12) UNIQUE,
    Categoria SMALLINT UNSIGNED,
    CONSTRAINT PK_Empleados PRIMARY KEY (CodEmpleado),
    CONSTRAINT FK_Categoria FOREIGN KEY (Categoria)
		REFERENCES Categoria (CodCategoria)
        ON DELETE RESTRICT ON UPDATE CASCADE
);
-- TABLA CATEGORIA
DROP TABLE IF EXISTS Categoria;
CREATE TABLE IF NOT EXISTS Categoria (
    CodCategoria SMALLINT UNSIGNED AUTO_INCREMENT,
    Descripcion TEXT, 
    Salario DECIMAL(10,2),
    CONSTRAINT PK_Categoria PRIMARY KEY (CodCategoria)
);
-- TABLA ZONAS
DROP TABLE IF EXISTS Zonas;
CREATE TABLE IF NOT EXISTS Zonas (
    Letra CHAR(1) CHECK (Letra LIKE '[A-Z]'),
    TipoEmbarcacion ENUM('Velero', 'Lancha Neumática', 'Barco a Motor', 'Barco de Vela') DEFAULT 'Barco a Motor', 
    Profundidad DECIMAL(10,2) NOT NULL, 
    AnchoAmarres DECIMAL(10,2) NOT NULL,
    CONSTRAINT PK_Letra1 PRIMARY KEY (Letra)
);
-- TABLA AMARRES
DROP TABLE IF EXISTS Amarres;
CREATE TABLE IF NOT EXISTS Amarres (
    NumAmarre SMALLINT UNSIGNED AUTO_INCREMENT, 
    Descripcion TEXT, 
    LecturaAgua DECIMAL(10,3) CHECK (LecturaAgua>0), 
    LecturaLuz DECIMAL(10,3) CHECK (LecturaLuz>0),
	ServContratados TEXT, 
    CuotaDia DECIMAL(10,2), 
    CuotaMes DECIMAL(10,2),
    CuotaAño DECIMAL(10,2),
    Letra CHAR(1) CHECK (Letra LIKE '[A-Z]'),
    CONSTRAINT PK_Amarres PRIMARY KEY (NumAmarre),
    CONSTRAINT FK_Letra2 FOREIGN KEY (Letra) 
        REFERENCES Zonas (Letra)
        ON DELETE RESTRICT ON UPDATE CASCADE
);
-- TABLE ASIGNACION ZONA EMPLEADOS
DROP TABLE IF EXISTS AsignacionZonaEmpleados;
CREATE TABLE IF NOT EXISTS AsignacionZonaEmpleados (
    Letra CHAR(1) check(Letra LIKE '[A-Z]'), 
    CodEmpleado SMALLINT UNSIGNED,
    NumBarcos DECIMAL(5) UNSIGNED, 
    FechaAsignacion DATE,
    CONSTRAINT PK_AsignacionZonaEmpleado PRIMARY KEY (Letra, CodEmpleado),
    CONSTRAINT FK_Letra3 FOREIGN KEY (Letra) 
        REFERENCES Zonas (Letra)
        ON DELETE RESTRICT ON UPDATE CASCADE,
    CONSTRAINT FK_CodEmpleado FOREIGN KEY (CodEmpleado) 
        REFERENCES Empleados (CodEmpleado)
        ON DELETE RESTRICT ON UPDATE CASCADE
);
-- TABLA AMARRES PRIVADOS
DROP TABLE IF EXISTS AmarresPrivados;
CREATE TABLE IF NOT EXISTS AmarresPrivados (
    NumAmarre SMALLINT UNSIGNED,
    CodSocio SMALLINT UNSIGNED,
    FechaCompra DATE,
    PrecioCompra DECIMAL(10 , 2 ),
    EstadoCuentas DECIMAL(10 , 2 ) DEFAULT 0,
    CuotaMantenimiento DECIMAL(10 , 2 ) DEFAULT 2000,
    SituacionActual ENUM('Activo', 'Abandono', 'En venta', 'En alquiler', 'Baja'),
    CONSTRAINT PK_AmarresPrivados PRIMARY KEY (NumAmarre , CodSocio),
    CONSTRAINT FK_NumAmarre FOREIGN KEY (NumAmarre) 
        REFERENCES Amarres (NumAmarre)
        ON DELETE RESTRICT ON UPDATE CASCADE,
    CONSTRAINT FK_CodSocio2 FOREIGN KEY (CodSocio) 
        REFERENCES Socios (CodSocio)
        ON DELETE RESTRICT ON UPDATE CASCADE
);
-- TABLE EMBARCACIONES
DROP TABLE IF EXISTS Embarcaciones;
CREATE TABLE IF NOT EXISTS Embarcaciones (
    CodEmbarcacion SMALLINT UNSIGNED AUTO_INCREMENT, 
    Matricula CHAR(7) NOT NULL UNIQUE, 
    Nombre VARCHAR(20) NOT NULL UNIQUE, 
    Tipo ENUM('Velero', 'Lancha Neumática', 'Barco a Motor', 'Barco de Vela'),   
    Manga DECIMAL(10,2) NOT NULL, 
    Eslora DECIMAL(10,2) NOT NULL, 
    Puntal DECIMAL(10,2) NOT NULL, 
    NumAmarre SMALLINT UNSIGNED,
    CodSocio SMALLINT UNSIGNED,
    CONSTRAINT PK_CodEmbarcacion PRIMARY KEY (CodEmbarcacion),
    CONSTRAINT FK_NumAmarre2 FOREIGN KEY (NumAmarre) 
        REFERENCES Amarres (NumAmarre)
        ON DELETE RESTRICT ON UPDATE CASCADE,
    CONSTRAINT FK_CodSocio FOREIGN KEY (CodSocio) 
        REFERENCES Socios (CodSocio)
        ON DELETE RESTRICT ON UPDATE CASCADE
);





-- Ejercicio 2
ALTER TABLE Socios
    ADD TipoSocio ENUM('Fundador', 'Capitalista', 'Club'),
    ADD Observaciones TEXT,
    ALTER Cuota DROP DEFAULT,
    ADD CONSTRAINT CHECK (Cuota BETWEEN 8000 AND 15000),
    CHANGE Movil TelefonoMovil CHAR(9);

ALTER TABLE Empleados
    ADD Sueldo DECIMAL(10,2) CHECK(Sueldo>600),
    MODIFY Cargo ENUM('Administracion', 'Limpieza', 'Guardia', 'Mantenimiento', 'Comercial','Directivo') DEFAULT 'Mantenimiento';

ALTER TABLE Zonas
    DROP Profundidad,
    DROP AnchoAmarres,
    ADD EsloraMax DECIMAL(10,2),
    ADD MangaMax DECIMAL(10,2),
    ADD PuntalMax DECIMAL(10,2);
    
ALTER TABLE AsignacionZonaEmpleados
    ALTER NumBarcos SET DEFAULT 25,
    ADD CONSTRAINT CHECK (NumBarcos BETWEEN 20 AND 30);

ALTER TABLE Embarcaciones
	ADD Bandera VARCHAR(20),
    ADD AnoFabricacion YEAR,
    ADD PaisFabricacion VARCHAR(20),
    ADD CiudadDeFabricacion VARCHAR(20),
    ADD FechaMatriculacion DATE,
    ADD SegundaMano BOOLEAN;





-- Ejercicio 3

CREATE INDEX INDICE_SOCIOSAPNOMBR ON Socios (Apellidos, Nombre);
CREATE INDEX INDICE_EMPLEADOSAPNOMBR ON Empleados (Apellidos, Nombre);
CREATE INDEX INDICE_EMBARCACIONES ON Embarcaciones (Nombre);


    
