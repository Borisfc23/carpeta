-- Las funciones se suelen usar para hacer calculos y devuelve 1 solo valor
-- Creacion de una funcion
DELIMITER // 
CREATE FUNCTION contar_registros () RETURNS INTEGER
BEGIN 
	DECLARE resultado INT;
    SELECT count(pk_id) INTO resultado FROM ingreso_planta WHERE dia_ingreso=curdate();
   	RETURN resultado;
END// 
DELIMITER ;

-- Eliminacion de una funcion
DROP FUNCTION contar_registros;

-- Llamar una Funcion
SELECT contar_registros();