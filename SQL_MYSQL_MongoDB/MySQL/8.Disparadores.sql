--Trigger o Disparador :se ejecutan cuando sucede algún evento sobre las tablas a las que se encuentra asociado
DELIMITER //
CREATE TRIGGER inserta_dia_semana
BEFORE INSERT ON ingreso_planta
FOR EACH ROW
BEGIN
    DECLARE dia_insertar VARCHAR(15);
    SELECT dayname(curdate()) INTO dia_insertar;
    SET new.dia_semana = dia_insertar;
END//
DELIMITER ;

--Nota: El BEFORE esta relacionado con new y AFTER con old

-- Eliminar Trigger
DROP TRIGGER insertar_dia_semana;

-- Insertar registro
INSERT INTO ingreso_planta(nombre_puerta,dia_ingreso,hora_ingreso,fk_persona) VALUES('Puerta 04',curdate(),now(),5)
INSERT INTO ingreso_planta(nombre_puerta,dia_ingreso,hora_ingreso,fk_persona) VALUES('Puerta 06',curdate(),now(),6)