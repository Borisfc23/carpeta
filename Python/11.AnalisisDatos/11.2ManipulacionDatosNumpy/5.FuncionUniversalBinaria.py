import numpy as np
arr =np.array([5,36,17,18,9])
arr_2 =np.array([8,24,17,19,9])
print("Suma: ",np.add(arr,arr_2),"\n-------")
print("Restar: ",np.subtract(arr,arr_2),"\n-------")
print("Multiplicar: ",np.multiply(arr,arr_2),"\n-------")
print("Dividir: ",np.divide(arr,arr_2),"\n-------")
print("Array1 = Array2: ",np.array_equal(arr,arr_2),"\n-------")
print("Valores min entre amboas array: ",np.fmin(arr,arr_2),"\n-------")
print("Valores max entre ambos array: ",np.fmax(arr,arr_2),"\n-------")

