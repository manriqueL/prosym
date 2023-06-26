CREATE DATABASE IF NOT EXISTS prosym;
USE prosym;

CREATE TABLE IF NOT EXISTS usuarios(
id          int(255) auto_increment not null,
role        varchar(50),
name        varchar(100),
lastname    varchar(100),
email       varchar(150),
password    varchar(100),
created_at  datetime,
CONSTRAINT pk_usuarios PRIMARY KEY(id)
)ENGINE=InnoDb;

INSERT INTO usuarios VALUE(NULL, "ROLE_USER", "Lucas", "Manrique", "Lucas123@gmail.com", "123qweasd", CURTIME());
INSERT INTO usuarios VALUE(NULL, "ROLE_USER", "Santiago", "Velasquez", "Santiago123@gmail.com", "123qweasd", CURTIME());
INSERT INTO usuarios VALUE(NULL, "ROLE_USER", "Carlos", "Franco", "Carlos123@gmail.com", "123qweasd", CURTIME());

CREATE TABLE IF NOT EXISTS tareas(
id          int(255) auto_increment not null,
usuario_id     int(255) not null,
tittle      varchar(255),
content     text,
priority    varchar(255),
hours       int(255),
created_at  datetime,
CONSTRAINT pk_tareas PRIMARY KEY(id),
CONSTRAINT fk_tareas_usuarios FOREIGN KEY(usuario_id) REFERENCES usuarios(id)
)ENGINE=InnoDb; 

INSERT INTO tareas VALUE(NULL, 1, "Tarea 1", "Contenido de Tarea 1", "high", 45, CURTIME());
INSERT INTO tareas VALUE(NULL, 2, "Tarea 2", "Contenido de Tarea 2" , "medium", 33, CURTIME());
INSERT INTO tareas VALUE(NULL, 3, "Tarea 3", "Contenido de Tarea 3", "low", 23, CURTIME());
INSERT INTO tareas VALUE(NULL, 1, "Tarea 4", "Contenido de Tarea 4", "medium", 30, CURTIME());