print(int("3"))#Transforma a numero entero
print(float("10.3")) #Transforma a numero flotante
print(bin(23)) #Transforma a binario
print(hex(1))
print(round(4.8)) #Redondea numeros
print(pow(2, 3)) #Elevacion

#FUNCIONES ANONIMAS

elevar_cuadrado = lambda x : x**2
print(elevar_cuadrado(3))

sumar = lambda x,y : x + y
print(sumar(3,4))