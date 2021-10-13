#Son listas incambiables, osea no se pueden modificar
Tupla = ('a',20,"Hola",50,100)
print(type(Tupla))
print(Tupla[2])
print(Tupla[1:3])

Tupla[3] = "Cambiar"
print(Tupla) #Saldra error pk sus valores no se pueden modificar

# Ejercicio 1
# Escribir una tupla con los meses del año, luego, pide al usuario un numero, el que haya ingresado, es el mes que debe mostrar en la tupla
meses = ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Setiembre","Octubre","Noviembre","Diciembre")
mes_monstrar = int(input("Ingrese un numero del 1 al 12\n"))
print(meses[mes_monstrar - 1])
