import sqlite3

conexion = sqlite3.connect("ejemplo.db") #Conectarse a la BD, sino existe la crea
cursor = conexion.cursor()#Creamos el cursor para la insercion de datos y creacion de tablas
conexion.close()