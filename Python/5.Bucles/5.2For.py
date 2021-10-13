numeros = ["Uno","Dos","Tres"]
for i in numeros:
    print(i)

nombres = ["Juan","Boris","Allison","Jose"]
for j in nombres:
    print(f"Feliz Cumpleaños: ",j)

for i in range(1,11):#Imprime entre un rango
    print(i)

# Ejercicio 1
# Imprimir por pantalla los numeros del 1 al 10, luego, pedir al usuario dos numeros y mostrar el rango de numeros entre ambas cifras

lista_num = [1,2,3,4,5,6,7,8,9,10]
print(lista_num)
num1 = 0;
num1 = int(input("Ingrese Primer Numero del 1 al 10\n"))
num2 = int(input("Ingrese Segundo Numero del 1 al 10\n"))
print(f"Rango de numero entre [{num1}-{num2}]")
for x in range(num1,num2+1):
    print(x)
# if num2 > num1:
#     print(f"Rango de numero entre [{num1}-{num2}]")
#     for num1 in lista_num:
#         num1+=1
#         print(num1)    
#         if num1 == num2:
#             break
# else:
#     print("Erro, el Num-2 < Num-1")

# Ejercicio 2
# Escribir un programa que pida al usuario una palabra y la muestre por pantalla 10 veces.

palabra = input("Ingrese una palabra\n")
for z in range(1,11):
    print(palabra)