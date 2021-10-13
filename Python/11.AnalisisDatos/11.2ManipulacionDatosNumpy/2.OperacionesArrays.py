import numpy as np

arr = np.arange(1,9) #Arreglo dentro de un rango
lista = [1,2,3,4,5,7,8]
print(arr)
print(lista)

arr.shape = (4,2) #Le da forma al array(fila,columna)
print("Cambiando la forma del array a (4,2)\n",arr)

#La suma de arreglos es != a  la de arreglos
print("Suma de arrays: ",arr + arr) 
print("Resta de arrays: ",arr - arr) 
print("Producto de arrays: ",arr * arr) 
print("Elevacion de arrays: ",arr ** arr) 
print("Division de arrays: ",arr // arr) #Division para la parte entera
print("Suma de lista: ",lista + lista) 


    