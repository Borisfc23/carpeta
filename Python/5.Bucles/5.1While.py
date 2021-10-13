i = 0
while i < 5:
    i+=1
    print("Estoy iterando, voy por el salto: {}".format(i))
    if i == 2:
        continue
    if i == 3:
        break

# Ejercicio 1
# Escribir un programa que pida un numero al usuario y muestre las tablas de multiplicar de ese numero

num = int(input("Ingrese un numero\n"))
a = 0
while a < num:
    a+=1
    print(f"{num}x{a}=",num*a)
# Ejercicio 2
# Escribir un programa que pregunte al usuario su edad y muestre por pantalla todos los años que ha cumplido (desde 1 hasta su edad).

edad = int(input("Ingrese su edad\n"))
b = 0
while b < edad:
    b+=1
    print(b)