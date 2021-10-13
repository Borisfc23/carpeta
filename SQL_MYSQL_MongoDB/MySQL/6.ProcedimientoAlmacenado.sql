-- Los procedimientos almacenados se usan para aplicar la logica de negocio
-- y da 1 o mas valores como resultado. Es mas rapido k las funciones y se
-- compilar dentro del motor de BDatos.
DELIMITER //
CREATE PROCEDURE filtro(IN f_inicio DATE,IN f_fin DATE)
BEGIN
    SELECT *FROM ingreso_planta WHERE dia_ingreso BETWEEN f_inicio AND f_fin;
END//
DELIMITER ;

-- Llamando al Store PROCEDURE
CALL filtro('2021-07-31','2021-08-31');

-- Borrar el STORE PROCEDURE
DROP PROCEDURE filtro;