def lista(*valores):
    for i in valores:
        print(i)

lista(12,2,3,1,14,15,52,522,"Hola",2.3)

def nombrar(**clave_valor):
    print(clave_valor)
nombrar(nombre ="Boris Flores",notas =[12,14,16])

# Ejercicio 1
# Crear un programa que tenga dos funciones, una que contenga el area de un cuadrado con argumentos de base y altura; y la otra el area
# de un circulo con argumento de radio

def cuadrado(base, altura):
    return base*altura
def circulo(radio):
    return 3.14*(radio**2)

print("Area cuadrado: ",cuadrado(2, 2))
print("Area circulo: ",circulo(2))

# Ejercicio 2
# Escribir una función que reciba una muestra de números en una lista y devuelva su medida.

def muestra(*listas):
    return len(listas)

print(muestra(1,2,3,4,23,12,32,"Hola"))