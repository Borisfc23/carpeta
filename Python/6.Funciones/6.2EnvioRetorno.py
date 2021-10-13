def entero():
    return 12345

def decimal():
    return 52.345

def frase():
    return "frase del dia"

print(entero())
print(decimal())
print(frase())

def valores():
    return 1,2,3,4,5
a,b,c,d,e = valores()
print(a)
print(c)

# Ejercicio 1
# Crear una funcion que pida dos numeros. Si el primero es mayor al segundo, el programa debe retornar el valor 1; si el segundo es mayor
#  al primero, debe retornar -1; si ambos son iguales, debe retornar 0

def pedir():
    num1 = int(input("Primer Numero\n"))
    num2 = int(input("Segundo Numero\n"))
    if num1 > num2:
        return 1
    elif num2 > num1:
        return -1
    elif num1 == num2:
        return 0
print(f"Resutado: ",pedir())

# Ejercicio 2
# Escribir una función que calcule el total de una factura tras aplicarle el IVA. La función debe recibir la cantidad sin IVA y el porcentaje de 
# IVA a aplicar, y devolver el total de la factura. Si se invoca la función sin pasarle el porcentaje de IVA, deberá aplicar un 21%.
def tarifa():
    cant = int(input("Cantidad sin IVA\n"))
    porcentaje = int(input("Porcentaje de IVA\n"))
    if porcentaje > 0:
        return cant + cant*porcentaje/100
    else:
        return cant + cant*21/100

print(f"Tarifa total es",tarifa())