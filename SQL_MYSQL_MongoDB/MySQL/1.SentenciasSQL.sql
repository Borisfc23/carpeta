-- CREAR BASE DE DATOS
CREATE DATABASE curso_mysqlboris

-- USAR BASE DE DATOS
use curso_mysqlboris

-- CREAR TABLA
-- El auto_increment en sqlserver es identity(1,1)
CREATE TABLE persona(
pk_id INT(11) NOT NULL auto_increment,
dni VARCHAR(8),
nombre VARCHAR(25),
edad int(3),
fk_cargo INT(11),
FOREIGN KEY(fk_cargo) REFERENCES cargo(pk_id),
PRIMARY KEY (pk_id)
)engine=innodb;/*Es el motor de almacenamiento envargado de manejar
 las tablas son dos MyISAM y < InnoDB es mejor*/

CREATE TABLE cargo(
pk_id INT(11) NOT NULL auto_increment,
nombre VARCHAR(25),
PRIMARY KEY (pk_id)
)engine=innodb;

-- INSERTAR VALORES EN LA TABLA
INSERT INTO persona(dni,nombre,edad,fk_cargo) VALUES ('12312322','ADMIN',45,2);
INSERT INTO persona(dni,nombre,edad,fk_cargo) VALUES ('21338742','LINUX',24,1);

INSERT INTO cargo(nombre) VALUES ('Jefe');
INSERT INTO cargo(nombre) VALUES ('Gerente');

-- VER RESULTADO DE TABLA
SELECT *FROM persona;
SELECT nombre,edad FROM persona

-- ELIMINAR TABLA, SI TIENE LLAVE FORANEA NO SE BORRARA
DROP TABLE prueba_tabla

