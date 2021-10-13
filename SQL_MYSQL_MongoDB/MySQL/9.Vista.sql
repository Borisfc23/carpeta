-- Es una estructura SQL que muestra datos
SELECT p.nombre,p.dni,c.nombre,ip.nombre_puerta,ip.dia_semana,ip.hora_ingreso FROM persona p INNER JOIN cargo c ON p.fk_cargo=c.pk_id
INNER JOIN ingreso_planta ip ON ip.fk_persona=p.pk_id

CREATE VIEW reporte as(
    SELECT p.nombre as 'Nombre',p.dni as 'DNI',c.nombre as 'Cargo',ip.nombre_puerta,ip.dia_semana,ip.hora_ingreso FROM persona p INNER JOIN cargo c ON p.fk_cargo=c.pk_id
    INNER JOIN ingreso_planta ip ON ip.fk_persona=p.pk_id
    );

-- Para ver Vistas
SELECT *FROM reporte