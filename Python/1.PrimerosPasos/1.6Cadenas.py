# Cadenas

a = "Uno"
b = ", Dos"
cadena = 'Hola, buenas tardes'

print(cadena[3]) #Abstrae la tercer posicion de la cadena
print(cadena[:-1]) #Iprime hasta la penultima letra
print(cadena[:5]) #Abstrae hasta la quinta posicion de la cadena
print(a + b) #Concatenar cadenas
print(len(cadena)) #Arroja la longitud de la cadena
print(cadena.upper()) #Poner todo en mayuscula
print(cadena.lower()) #Poner todo en minuscula

#Ejercicios
cadenap = "Hoy es domingo de python"

print(cadenap[0:2]) #Imprimir los 2 primeros caracteres
print(cadenap[-6:]) #Imprimir los ultimos 6 caracteres
print(cadenap[::2]) #Imprimir cada 2 posiciones
print(cadenap[:4]) #Imprimir cada 2 posiciones
print(cadenap[::-1]) #Invertir la cadena
print(cadenap + cadenap[::-1])

variable = "separado"
print(variable.replace('eparado', ',e,p,a,r,a,d,o'))

my_string = 'Hello, what are doing'
split_strings = my_string.split() #Dividimos la cadena y se pone cada palabra em una lista
split_strings.insert(3, 'you')
final_string = ' '.join(split_strings)
print(final_string)

#Ejercicio
mensaje = "Hola"
if len(mensaje) >= 3 and len(mensaje) <=12:
    print(True)
else:
    print(False)

