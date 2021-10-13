-- Modificas la tabla en caliente(funcionamiento) agregando campos
ALTER TABLE ingreso_planta ADD COLUMN dia_semana VARCHAR(15) AFTER hora_ingreso;

--Modifica el tipo de dato en los campos de una tabla
ALTER TABLE persona MODIFY nombre VARCHAR(50);

--Actualizar registro
UPDATE ingreso_planta SET dia_semana='viernes' WHERE pk_id=1;   

--Renombrar nombre de tabla
ALTER TABLE nombre_tabla_inicio RENAME AS nombre_tabla_final;