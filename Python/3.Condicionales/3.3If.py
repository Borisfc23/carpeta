num1 = int(input("Ingrese Primer numero\n"))
num2 = int(input("Ingrese Segundo numero\n"))

if num1 > num2:
    print(f"El primer numero es el mayor: {num1} > {num2}")
else:
    print(f"El Segundo numero es el mayor: {num1} < {num2}")

# Ejercicio 1
# Crear un programa que pida al usuario una letra, y si es vocal, muestre el mensaje "Es vocal". Sino, decirle al usuario que no es vocal

vocal = input("Ingrese una vocal\n")
if vocal in "aeiou":
    print("Es vocal")
else:
    print("No Es vocal")    

# Ejercicio 2
# Escribir un programa que, dado un número entero, muestre su valor absoluto. Nota: para los números positivos su valor absoluto es igual
#  al número (el valor absoluto de 52 es 52), mientras que, para los negativos, su valor absoluto es el número multiplicado por -1 
# (el valor absoluto de -52 es 52).    

numero = int(input("Ingrese una numero\n"))
if numero < 0:
    print(f"Valor absoluto: {numero*-1}")
else:
    print(f"Valor absoluto: {numero}")    