-- Actividad 6.1
-- Base de Datos formprofesional
-- Actividad 6-1: PHP

drop database if exists formProfesional;
create database if not exists formProfesional
	DEFAULT CHARACTER SET utf8
    DEFAULT COLLATE utf8_general_ci;

use formProfesional;
drop table if exists Curso;
create table if not exists curso(
	idCurso int unsigned primary key auto_increment,
    nombre varchar(50) not null,
    ciclo varchar(50) not null,
    nombreCorto varchar(4) not null,
    nivel char(1) not null
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

insert into Curso values
	(null, "Primero de Desarrollo de Aplicaciones Web", "Desarrollo de Aplicaciones Web", "1DAW", "1"),
    (null, "Segundo de Desarrollo de Aplicaciones Web", "Desarrollo de Aplicaciones Web", "2DAW", "2"),
    (null, "Primero de Sistemas Microinformáticos y Redes", "Sistemas Microinformáticos y Redes", "1SMR", "1"),
    (null, "Segundo de Sistemas Microinformáticos y Redes", "Sistemas Microinformáticos y Redes", "2SMR", "2"),
    (null, "Primero de Asistencia a la Dirección", "Asistencia a la Dirección", "1AD", "1"),
    (null, "Segundo de Asistencia a la Dirección", "Asistencia a la Dirección", "2AD", "2")
;

drop table if exists Alumnos;
CREATE TABLE Alumnos (
    idAlumno INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(30) NOT NULL,
    apellidos VARCHAR(50) NOT NULL,
    email VARCHAR(50),
    telefono CHAR(9),
    direccion VARCHAR(50),
    poblacion VARCHAR(30),
    provincia VARCHAR(30),
    nacionalidad VARCHAR(30),
    dni CHAR(9),
    fechaNac DATE,
    idCurso int unsigned,
    FOREIGN KEY (idCurso) REFERENCES Curso(idCurso)
    on delete restrict on update cascade
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

insert into Alumnos values
	(null, "Javier", "Fernández Román", "javier@correo.es", "956787454", "Una calle, 1", "Ubrique", "Cádiz", "Española", "45789654A", "1990-05-15", "1"),
    (null, "Cristina", "Mena Holgado", "cristina@correo.es", "956000054", "Una calle, 2", "Ubrique", "Cádiz", "Española", "71465454B", "1993-07-25", "3"),
    (null, "Paco", "Pérez Mota", "francisco@correo.es", "956000123", "Una calle, 3", "Ubrique", "Cádiz", "Española", "95789754B", "1995-11-05", "2"),
    (null, "Yohana", "Ruíz Aguilera", "yohana@correo.es", "956001234", "Una calle, 4", "Ubrique", "Cádiz", "Española", "65457544C", "1991-02-02", "5"),
	(null, "Antonio", "Rojo Atienza", "antonio@correo.es", "956123000", "Una calle, 5", "Ubrique", "Cádiz", "Española", "56897845D", "1989-12-28", "4"),
    (null, "Alba", "Florencio Romero", "alba@correo.es", "956140055", "Una calle, 6", "Ubrique", "Cádiz", "Española", "12457836F", "1990-05-15", "6"),
	(null, "Javier", "Fernández Román", "javier@correo.es", "956787454", "Una calle, 1", "Ubrique", "Cádiz", "Española", "45789654A", "1990-05-15", "1"),
    (null, "Cristina", "Mena Holgado", "cristina@correo.es", "956000054", "Una calle, 2", "Ubrique", "Cádiz", "Española", "71465454B", "1993-07-25", "3"),
    (null, "Paco", "Pérez Mota", "francisco@correo.es", "956000123", "Una calle, 3", "Ubrique", "Cádiz", "Española", "95789754B", "1995-11-05", "2"),
    (null, "Yohana", "Ruíz Aguilera", "yohana@correo.es", "956001234", "Una calle, 4", "Ubrique", "Cádiz", "Española", "65457544C", "1991-02-02", "5"),
	(null, "Antonio", "Rojo Atienza", "antonio@correo.es", "956123000", "Una calle, 5", "Ubrique", "Cádiz", "Española", "56897845D", "1989-12-28", "4"),
    (null, "Alba", "Florencio Romero", "alba@correo.es", "956140055", "Una calle, 6", "Ubrique", "Cádiz", "Española", "12457836F", "1990-05-15", "6"),
	(null, "Javier", "Fernández Román", "javier@correo.es", "956787454", "Una calle, 1", "Ubrique", "Cádiz", "Española", "45789654A", "1990-05-15", "1"),
    (null, "Cristina", "Mena Holgado", "cristina@correo.es", "956000054", "Una calle, 2", "Ubrique", "Cádiz", "Española", "71465454B", "1993-07-25", "3"),
    (null, "Paco", "Pérez Mota", "francisco@correo.es", "956000123", "Una calle, 3", "Ubrique", "Cádiz", "Española", "95789754B", "1995-11-05", "2"),
    (null, "Yohana", "Ruíz Aguilera", "yohana@correo.es", "956001234", "Una calle, 4", "Ubrique", "Cádiz", "Española", "65457544C", "1991-02-02", "5"),
	(null, "Antonio", "Rojo Atienza", "antonio@correo.es", "956123000", "Una calle, 5", "Ubrique", "Cádiz", "Española", "56897845D", "1989-12-28", "4"),
    (null, "Alba", "Florencio Romero", "alba@correo.es", "956140055", "Una calle, 6", "Ubrique", "Cádiz", "Española", "12457836F", "1990-05-15", "6"),
	(null, "Javier", "Fernández Román", "javier@correo.es", "956787454", "Una calle, 1", "Ubrique", "Cádiz", "Española", "45789654A", "1990-05-15", "1"),
    (null, "Cristina", "Mena Holgado", "cristina@correo.es", "956000054", "Una calle, 2", "Ubrique", "Cádiz", "Española", "71465454B", "1993-07-25", "3"),
    (null, "Paco", "Pérez Mota", "francisco@correo.es", "956000123", "Una calle, 3", "Ubrique", "Cádiz", "Española", "95789754B", "1995-11-05", "2"),
    (null, "Yohana", "Ruíz Aguilera", "yohana@correo.es", "956001234", "Una calle, 4", "Ubrique", "Cádiz", "Española", "65457544C", "1991-02-02", "5"),
	(null, "Antonio", "Rojo Atienza", "antonio@correo.es", "956123000", "Una calle, 5", "Ubrique", "Cádiz", "Española", "56897845D", "1989-12-28", "4"),
    (null, "Alba", "Florencio Romero", "alba@correo.es", "956140055", "Una calle, 6", "Ubrique", "Cádiz", "Española", "12457836F", "1990-05-15", "6"),
	(null, "Javier", "Fernández Román", "javier@correo.es", "956787454", "Una calle, 1", "Ubrique", "Cádiz", "Española", "45789654A", "1990-05-15", "1"),
    (null, "Cristina", "Mena Holgado", "cristina@correo.es", "956000054", "Una calle, 2", "Ubrique", "Cádiz", "Española", "71465454B", "1993-07-25", "3"),
    (null, "Paco", "Pérez Mota", "francisco@correo.es", "956000123", "Una calle, 3", "Ubrique", "Cádiz", "Española", "95789754B", "1995-11-05", "2"),
    (null, "Yohana", "Ruíz Aguilera", "yohana@correo.es", "956001234", "Una calle, 4", "Ubrique", "Cádiz", "Española", "65457544C", "1991-02-02", "5"),
	(null, "Antonio", "Rojo Atienza", "antonio@correo.es", "956123000", "Una calle, 5", "Ubrique", "Cádiz", "Española", "56897845D", "1989-12-28", "4"),
    (null, "Alba", "Florencio Romero", "alba@correo.es", "956140055", "Una calle, 6", "Ubrique", "Cádiz", "Española", "12457836F", "1990-05-15", "6"),
	(null, "Javier", "Fernández Román", "javier@correo.es", "956787454", "Una calle, 1", "Ubrique", "Cádiz", "Española", "45789654A", "1990-05-15", "1"),
    (null, "Cristina", "Mena Holgado", "cristina@correo.es", "956000054", "Una calle, 2", "Ubrique", "Cádiz", "Española", "71465454B", "1993-07-25", "3"),
    (null, "Paco", "Pérez Mota", "francisco@correo.es", "956000123", "Una calle, 3", "Ubrique", "Cádiz", "Española", "95789754B", "1995-11-05", "2"),
    (null, "Yohana", "Ruíz Aguilera", "yohana@correo.es", "956001234", "Una calle, 4", "Ubrique", "Cádiz", "Española", "65457544C", "1991-02-02", "5"),
	(null, "Antonio", "Rojo Atienza", "antonio@correo.es", "956123000", "Una calle, 5", "Ubrique", "Cádiz", "Española", "56897845D", "1989-12-28", "4"),
    (null, "Alba", "Florencio Romero", "alba@correo.es", "956140055", "Una calle, 6", "Ubrique", "Cádiz", "Española", "12457836F", "1990-05-15", "6"),
	(null, "Javier", "Fernández Román", "javier@correo.es", "956787454", "Una calle, 1", "Ubrique", "Cádiz", "Española", "45789654A", "1990-05-15", "1"),
    (null, "Cristina", "Mena Holgado", "cristina@correo.es", "956000054", "Una calle, 2", "Ubrique", "Cádiz", "Española", "71465454B", "1993-07-25", "3"),
    (null, "Paco", "Pérez Mota", "francisco@correo.es", "956000123", "Una calle, 3", "Ubrique", "Cádiz", "Española", "95789754B", "1995-11-05", "2"),
    (null, "Yohana", "Ruíz Aguilera", "yohana@correo.es", "956001234", "Una calle, 4", "Ubrique", "Cádiz", "Española", "65457544C", "1991-02-02", "5"),
	(null, "Antonio", "Rojo Atienza", "antonio@correo.es", "956123000", "Una calle, 5", "Ubrique", "Cádiz", "Española", "56897845D", "1989-12-28", "4"),
    (null, "Alba", "Florencio Romero", "alba@correo.es", "956140055", "Una calle, 6", "Ubrique", "Cádiz", "Española", "12457836F", "1990-05-15", "6"),
	(null, "Javier", "Fernández Román", "javier@correo.es", "956787454", "Una calle, 1", "Ubrique", "Cádiz", "Española", "45789654A", "1990-05-15", "1"),
    (null, "Cristina", "Mena Holgado", "cristina@correo.es", "956000054", "Una calle, 2", "Ubrique", "Cádiz", "Española", "71465454B", "1993-07-25", "3"),
    (null, "Paco", "Pérez Mota", "francisco@correo.es", "956000123", "Una calle, 3", "Ubrique", "Cádiz", "Española", "95789754B", "1995-11-05", "2"),
    (null, "Yohana", "Ruíz Aguilera", "yohana@correo.es", "956001234", "Una calle, 4", "Ubrique", "Cádiz", "Española", "65457544C", "1991-02-02", "5"),
	(null, "Antonio", "Rojo Atienza", "antonio@correo.es", "956123000", "Una calle, 5", "Ubrique", "Cádiz", "Española", "56897845D", "1989-12-28", "4"),
    (null, "Alba", "Florencio Romero", "alba@correo.es", "956140055", "Una calle, 6", "Ubrique", "Cádiz", "Española", "12457836F", "1990-05-15", "6"),
	(null, "Javier", "Fernández Román", "javier@correo.es", "956787454", "Una calle, 1", "Ubrique", "Cádiz", "Española", "45789654A", "1990-05-15", "1"),
    (null, "Cristina", "Mena Holgado", "cristina@correo.es", "956000054", "Una calle, 2", "Ubrique", "Cádiz", "Española", "71465454B", "1993-07-25", "3"),
    (null, "Paco", "Pérez Mota", "francisco@correo.es", "956000123", "Una calle, 3", "Ubrique", "Cádiz", "Española", "95789754B", "1995-11-05", "2"),
    (null, "Yohana", "Ruíz Aguilera", "yohana@correo.es", "956001234", "Una calle, 4", "Ubrique", "Cádiz", "Española", "65457544C", "1991-02-02", "5"),
	(null, "Antonio", "Rojo Atienza", "antonio@correo.es", "956123000", "Una calle, 5", "Ubrique", "Cádiz", "Española", "56897845D", "1989-12-28", "4"),
    (null, "Alba", "Florencio Romero", "alba@correo.es", "956140055", "Una calle, 6", "Ubrique", "Cádiz", "Española", "12457836F", "1990-05-15", "6"),
	(null, "Javier", "Fernández Román", "javier@correo.es", "956787454", "Una calle, 1", "Ubrique", "Cádiz", "Española", "45789654A", "1990-05-15", "1"),
    (null, "Cristina", "Mena Holgado", "cristina@correo.es", "956000054", "Una calle, 2", "Ubrique", "Cádiz", "Española", "71465454B", "1993-07-25", "3"),
    (null, "Paco", "Pérez Mota", "francisco@correo.es", "956000123", "Una calle, 3", "Ubrique", "Cádiz", "Española", "95789754B", "1995-11-05", "2"),
    (null, "Yohana", "Ruíz Aguilera", "yohana@correo.es", "956001234", "Una calle, 4", "Ubrique", "Cádiz", "Española", "65457544C", "1991-02-02", "5"),
	(null, "Antonio", "Rojo Atienza", "antonio@correo.es", "956123000", "Una calle, 5", "Ubrique", "Cádiz", "Española", "56897845D", "1989-12-28", "4"),
    (null, "Alba", "Florencio Romero", "alba@correo.es", "956140055", "Una calle, 6", "Ubrique", "Cádiz", "Española", "12457836F", "1990-05-15", "6"),
	(null, "Javier", "Fernández Román", "javier@correo.es", "956787454", "Una calle, 1", "Ubrique", "Cádiz", "Española", "45789654A", "1990-05-15", "1"),
    (null, "Cristina", "Mena Holgado", "cristina@correo.es", "956000054", "Una calle, 2", "Ubrique", "Cádiz", "Española", "71465454B", "1993-07-25", "3"),
    (null, "Paco", "Pérez Mota", "francisco@correo.es", "956000123", "Una calle, 3", "Ubrique", "Cádiz", "Española", "95789754B", "1995-11-05", "2"),
    (null, "Yohana", "Ruíz Aguilera", "yohana@correo.es", "956001234", "Una calle, 4", "Ubrique", "Cádiz", "Española", "65457544C", "1991-02-02", "5"),
	(null, "Antonio", "Rojo Atienza", "antonio@correo.es", "956123000", "Una calle, 5", "Ubrique", "Cádiz", "Española", "56897845D", "1989-12-28", "4"),
    (null, "Alba", "Florencio Romero", "alba@correo.es", "956140055", "Una calle, 6", "Ubrique", "Cádiz", "Española", "12457836F", "1990-05-15", "6"),
	(null, "Javier", "Fernández Román", "javier@correo.es", "956787454", "Una calle, 1", "Ubrique", "Cádiz", "Española", "45789654A", "1990-05-15", "1"),
    (null, "Cristina", "Mena Holgado", "cristina@correo.es", "956000054", "Una calle, 2", "Ubrique", "Cádiz", "Española", "71465454B", "1993-07-25", "3"),
    (null, "Paco", "Pérez Mota", "francisco@correo.es", "956000123", "Una calle, 3", "Ubrique", "Cádiz", "Española", "95789754B", "1995-11-05", "2"),
    (null, "Yohana", "Ruíz Aguilera", "yohana@correo.es", "956001234", "Una calle, 4", "Ubrique", "Cádiz", "Española", "65457544C", "1991-02-02", "5"),
	(null, "Antonio", "Rojo Atienza", "antonio@correo.es", "956123000", "Una calle, 5", "Ubrique", "Cádiz", "Española", "56897845D", "1989-12-28", "4"),
    (null, "Alba", "Florencio Romero", "alba@correo.es", "956140055", "Una calle, 6", "Ubrique", "Cádiz", "Española", "12457836F", "1990-05-15", "6"),
	(null, "Javier", "Fernández Román", "javier@correo.es", "956787454", "Una calle, 1", "Ubrique", "Cádiz", "Española", "45789654A", "1990-05-15", "1"),
    (null, "Cristina", "Mena Holgado", "cristina@correo.es", "956000054", "Una calle, 2", "Ubrique", "Cádiz", "Española", "71465454B", "1993-07-25", "3"),
    (null, "Paco", "Pérez Mota", "francisco@correo.es", "956000123", "Una calle, 3", "Ubrique", "Cádiz", "Española", "95789754B", "1995-11-05", "2"),
    (null, "Yohana", "Ruíz Aguilera", "yohana@correo.es", "956001234", "Una calle, 4", "Ubrique", "Cádiz", "Española", "65457544C", "1991-02-02", "5"),
	(null, "Antonio", "Rojo Atienza", "antonio@correo.es", "956123000", "Una calle, 5", "Ubrique", "Cádiz", "Española", "56897845D", "1989-12-28", "4"),
    (null, "Alba", "Florencio Romero", "alba@correo.es", "956140055", "Una calle, 6", "Ubrique", "Cádiz", "Española", "12457836F", "1990-05-15", "6")
    
;

