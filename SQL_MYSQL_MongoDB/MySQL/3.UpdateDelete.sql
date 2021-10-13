-- Actualizar Registro
UPDATE persona SET nombre='Debian',dni='88888888',fk_cargo=1 WHERE pk_id=1;

-- Borrar Registro por ID
DELETE FROM persona WHERE pk_id=3;

-- Borrar todos los registros
DELETE FROM persona;

-- Nota no se puede eliminar registros que tienen relacion de llave foranea
-- debido a la integridad de datos