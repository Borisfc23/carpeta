-- DATE : es para fechas
-- DATETIME: es para horas
CREATE TABLE ingreso_planta(
    pk_id INT(11) NOT NULL auto_increment,
    nombre_puerta VARCHAR(25),
    dia_ingreso DATE, 
    hora_ingreso DATETIME,
    fk_persona INT(11) NOT NULL,
    PRIMARY KEY (pk_id),
    FOREIGN KEY(fk_persona) REFERENCES persona(pk_id)
)engine=innodb;

INSERT INTO ingreso_planta VALUES(1,'Puerta 01',curdate(),now(),4)
-- El curdate()  ingresa la fecha actual
-- El now() ingresa la hora:minuto:segundo actual