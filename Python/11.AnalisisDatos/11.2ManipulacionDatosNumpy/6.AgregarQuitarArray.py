import numpy as np

arr = np.arange(0,20,2)#Rango para un arregllo y (inicio,meta,salto)
print(arr)

arr_flot = np.random.rand(4,3)#el rand(filas,columnas) creada numeros entre 0 y 1
print(arr_flot)

arr_entero = np.random.randint(1,10,size=(2,3))#Crea un array de num enteros con un tamaño size=(fila,columna)
print(arr_entero)

arr_full = np.full((3,3),6) #Crea un array con un numero repetido
print(arr_full)

print(np.append(arr, [21,22,23,24,25]))#Agrega a un array pero al final
print(np.insert(arr,2,[100,101]))#Agrega en la posicion indicada (arr_original,posicion,arra_a_agregar)
print(np.delete(arr_entero, 1,axis=0))#Elimina la fila de acuerdo a la posicion
