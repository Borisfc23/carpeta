DELIMITER //
CREATE PROCEDURE convertir_fechas()
BEGIN
    DECLARE x INT(11);
    DECLARE id_  INT(11);
    DECLARE dia_ DATE;
    DECLARE err_no_more_records CONDITION FOR 1329;
    DECLARE c CURSOR FOR SELECT pk_id,dia_ingreso FROM ingreso_planta WHERE ISNULL(dia_semana);
    DECLARE EXIT HANDLER FOR err_no_more_records    
BEGIN
END;
    OPEN c;
    SET x = 0;
    SIZE: loop
    FETCH c INTO id_,dia_;
    update ingreso_planta SET dia_semana = CONCAT('N°',X,' ',dayname(dia_)) WHERE pk_id=id_;
    SET x = x+1;
    END LOOP SIZE;
    CLOSE c;
END//
DELIMITER ;

-- CONDITION FOR 1329 ES PARA QUE NO SE ROMPA EL CODIGO
--Con exit handler define cuando termina la ejecucion

-- Llamar un CURSOR
CALL convertir_fechas();