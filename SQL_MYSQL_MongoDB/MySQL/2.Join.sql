USE curso_mysqlboris
-- Inner Join para enlazar tablas        Alias              Alias
SELECT p.nombre,p.dni,c.nombre FROM persona p INNER JOIN cargo c ON p.fk_cargo=c.pk_id;

-- Left Join muestra tablas hasta las null
SELECT p.nombre as 'Persona',p.dni as 'Identificador',c.nombre as 'Nombre Cargo' FROM persona p LEFT JOIN cargo c ON p.fk_cargo=c.pk_id;

