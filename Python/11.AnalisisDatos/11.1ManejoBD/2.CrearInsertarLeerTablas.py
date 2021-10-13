import sqlite3

conexion = sqlite3.connect("ejemplo.db")
cursor = conexion.cursor()

#Crear Tabla llama estudiantes
cursor.execute("CREATE TABLE estudiantes (email VARCHAR(100),carrera VARCHAR(100),nombre VARCHAR(100),edad INTEGER)")

#Insertamos datos en la tablas. 
# El ? es por cada campo de la tabla
#Se pasa registro solo en el formato de tuplas
usuarios = [('parrillaexquisita@vip.com','Arquitectura','Giulia', 26),
    ('lollipopbusiness@vip.com','Contaduría','Rosana', 60),
    ('solfernandez@googlemail.com','Estadística','Sol', 30),
    ('carlitos@googlemail.com','Computación','Carlos', 60),
    ('imprentadetata@vip.com','Periodismo','Luciano', 21)] 
pepe = ('pepito@hotmail.com','Contabilidad','Jose',20)
cursor.execute("INSERT INTO estudiantes VALUES (?,?,?,?)",pepe) #Insertar 1 solo registro
cursor.execute("INSERT INTO estudiantes VALUES ('mariana@outlook.com','Enfermeria','Mariana',24)")
cursor.executemany("INSERT INTO estudiantes VALUES (?,?,?,?)",usuarios) #Insertar varios registros
conexion.commit() #Guarda los cambios
conexion.close()

#Ver los registros
cursor.execute("SELECT *FROM estudiantes")
# alumnos = cursor.fetchone() #Solo se ve el primer registro
alumnos = cursor.fetchall() #Traer todos los registros en pantalla
for item in alumnos:
    print(item)


