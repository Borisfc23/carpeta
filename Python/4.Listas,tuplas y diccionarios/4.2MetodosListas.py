Lista = ["Tomate","cebolla","huevos","leche","arroz"]
Lista2 = [1, 2, 3, 4, 5]
Lista3 = [6, 7, 8, 9, 10]
Lista4 = ['d', 'f', 'a', 'b', 'e', 'c']
rango_num = range(0,15,2)#Indica un rango de numero del 0 al 14 tomando de 2 en 2

print("Rango sin transformar: ",rango_num)
print("Tranformarlo a una lista: ",list(rango_num))

Lista.append("Sal") #Agregar un elemento al final lista
print(Lista)

del Lista[1] #Borrar un elemento de una lista
print(Lista)

Lista2.extend(Lista3)
print("Unir listas",Lista2) #Unir listas

print("Concatenar listas",Lista2 + Lista3) #Concatenar listas

Lista.remove("leche")
print(Lista)

Lista4.sort()
print(Lista4)

print(len(Lista4))#Nos da la longitud de la lista
# Ejercicio 1
# En la siguiente lista, debes hacer un programa que muestre los valores al usuario, a su vez, debe pedir dos datos y esos que
#  sean ingresados deben ser sustituidos en el primer y segundo lugar:
# [20, 50, "Curso", 'Python', 3.14]

lista_e1 = [20, 50, "Curso", 'Python', 3.14]
print("Lista antigua: ",format(lista_e1))
valor1 = input("Ingresa primer Valor-1\n")
valor2 = input("Ingresa primer Valor-2\n")
lista_e1[0] = valor1
lista_e1[1] = valor2
print("Nueva lista: ",format(lista_e1))


# Ejercicio 2
# Escribe una lista que tenga los números de 1 al 10. Luego, debes hacer que los datos que están en las posiciones 4, 7 y 9 sean multiplicados
# por 2; por último, mostrar la lista nueva con los nuevos datos
lista_e2 = [1,2,3,4,5,6,7,8,9,10]
lista_e2[3] = lista_e2[3]*2
lista_e2[6] = lista_e2[6]*2
lista_e2[8] = lista_e2[8]*2
print(lista_e2)

#Ejercicio 3
#EL cuarto elemento elemento es la suma de los 3 elementos anteriores corregir la matriz

matriz = [
    [1,1,1,3],
    [2,2,2,7],
    [3,3,3,9],
    [4,4,4,13]
]
matriz[1][-1] = sum(matriz[1][:-1])#Suma los elementos empezando desde ela posicion 0
matriz[2][-1] = sum(matriz[2][:-1])
matriz[3][-1] = sum(matriz[3][:-1])
print(matriz,"\n")

