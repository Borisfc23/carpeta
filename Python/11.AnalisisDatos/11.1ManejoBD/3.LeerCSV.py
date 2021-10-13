#CSV : Valores separados por comas, tipo de archivo de formato simple que representa una tabla a traves de comas y saltos de linea
import sqlite3
import csv #Importamos la libreria csv

conexion = sqlite3.connect(r"C:\Users\Boris\OneDrive\UNI\PROYECTOS\ProgramacionWeb\ejemplo.db")
cursor = conexion.cursor()

archivo = open(r"C:\Users\Boris\OneDrive\UNI\PROYECTOS\ProgramacionWeb\Python\11.AnalisisDatos\Recursos\datos_db.txt")#Abrimos la ubicacion del csv
filas = csv.reader(archivo)#Leemos el CSV

cursor.executemany("INSERT INTO estudiantes VALUES (?,?,?,?)",filas)
cursor.execute("SELECT *FROM estudiantes")
alumnos = cursor.fetchall()
for item in alumnos:
    print(item)
conexion.commit()
conexion.close()