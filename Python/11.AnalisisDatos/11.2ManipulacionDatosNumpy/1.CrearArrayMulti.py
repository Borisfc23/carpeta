#Numpy(Numeric Python) paquete para el manejo y analisis de datos , principalmente para el manejo de arrays
import numpy as np # el as sirve para dar un alias

arreglo = np.array([0,1,2,3,4,5]) #Crear un array unidimensional
print(arreglo,type(arreglo))

notas = [16,17,18,19,15,12]
ar_notas = np.array(notas,dtype=float) #Volvemos la lista a un arreglo float
print(ar_notas,type(ar_notas[0]))

ar_notas_todas = np.array(([0,1,2,3,4,5],notas))#Pasamos la lista como tupla
print(ar_notas_todas)
print(ar_notas_todas[0])
print(ar_notas.ndim)# ndim Devuelve la dimesion del array
print(ar_notas_todas.ndim)

print(ar_notas.shape)#shape devuelve la (fila,columna) de un array
print(ar_notas_todas.shape)

#Arrays especiales
arr_zeros = np.zeros((2,3),dtype=float)#Matriz de puros ceros
print(arr_zeros)

arr_ones = np.ones((3,4),dtype=int)#Matriz de puros unos
print(arr_ones)

arr_identidad = np.identity((4),dtype=float) #Matriz identidad
print(arr_identidad)

arr_range = np.arange(9) #Matriz de rango
arr_range_2 = np.arange(5,15) #Matriz de rango
print(arr_range,arr_range_2)