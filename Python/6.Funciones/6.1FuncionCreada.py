# def permite crear funciones
def funcion():
    num1 = 50
    num2 = 30
    resultado = num1 + num2
    print(resultado)
funcion()    

# Ejercicio 1
# Crear un programa que tenga una lista, luego crear una funcion con la cual se van a pedir numeros al usuario para agregar a la lista. 
# Debes crear una segunda funcion en donde se ordenen los numeros pares e impares dentro de dos listas nuevas

global lista
global lista_pares
global lista_impares
lista = []
lista_pares = []
lista_impares = []

def pedirNumero():
    i=0
    cant = int(input("Cantidad de Numero\n"))
    while i<cant:
        i+=1
        numero = int(input("Ingrese numero\n"))
        lista.append(numero)         
    ordenar()
    
def ordenar():
    for item in lista:
        if(item%2 == 0):
            lista_pares.append(item)
        else:
            lista_impares.append(item)
    print(lista_pares)
    print(lista_impares)

pedirNumero()
          
# Ejercicio 2
# Escribir una función que reciba un número entero positivo y devuelva su factorial.

num_entero = int(input("Ingrese numero\n"))
def factorial(num_entero):
    if num_entero == 0 or num_entero ==1 :
        resul = 1
    else:
        resul = num_entero*factorial(num_entero-1)
    return resul
print(f"El factorial de {num_entero}! = ",factorial(num_entero))