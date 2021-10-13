nombre = input("¿Cómo se llama?")
print(f"Me alegro de conocerle, {nombre}")

cantidad = int(input("Dígame una cantidad en soles: "))
print(f"{cantidad} soles son {round(cantidad / 3.9, 2)} dolares")

# Ejercicio 2
# Se desea tener un algoritmo que permita determinar y mostrar el promedio que ha obtenido un alumno en un determinado curso, conociendo las 
# notas de: tres prácticas, el examen parcial y el examen final.
# Considere:
# PP = ( P1 + P2 +P3 ) / 3 PROM = ( PP + 2*EP + 3*EF ) / 6
# Donde: P1, P2, P3 : Practicas
# PP: promedio de práctica
# PROM: promedio
# EP: examen parcial
# EF: examen final

p1 = int(input("Ingrese nota de P1\n"))
p2 = int(input("Ingrese nota de P2\n"))
p3 = int(input("Ingrese nota de P3\n"))
ep = int(input("Ingrese nota de EP\n"))
ef = int(input("Ingrese nota de EF\n"))
pp = (p1 + p2 + p3)/3
pf = (pp + 2*ep + 3*ef)/6
print(f"Tu Promedio Final es: {round(pf,2)}")

#Ejercicio 1
#Hallar las raices con la formula de la ecuacion general para una ecuacion de segundo grado
#Ejm: 3x^2 - 5x + 2 = 0    x = 1   x = 2/3

from math import sqrt
print("ax^2 + bx + c")
a = int(input("Ingrese en valor de a\n"))
b = int(input("Ingrese en valor de b\n"))
c = int(input("Ingrese en valor de c\n"))
num_float  = float(input("Ingrese su medida exacta en mts. Ejm 1.72"))
x1 = 0
x2 = 0
if ((b**2)-4*a*c) < 0:
   print("NO SE PUEDE RESOLVER") 
else:
    x1 = (-b + sqrt(b**2 -4*a*c))/(2*a)
    x2 = (-b - sqrt(b**2 -4*a*c))/(2*a)
    print(f"La solucion es: \nx1 = {x1} y x2 = {x2}")
