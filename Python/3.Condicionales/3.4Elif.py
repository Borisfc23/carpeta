num = int(input("Ingrese un numero del 1 al 3\n"))
if num == 1:
    print("Es el uno")
elif num == 2:
    print("Es el dos")
elif num == 3:
    print("Es el tres")
else :
    print("Es diferente del 1 al 3")

# Ejercicio 1
# Escribe un programa que pida dos palabras y diga si riman o no. Si coinciden las tres últimas letras tiene que decir que riman. Si coinciden 
# sólo las dos últimas tiene que decir que riman un poco y si no, que no riman.

palabra1 = input("Ingrese Primera palabra\n")
palabra2 = input("Ingrese Segunda palabra\n")

if len(palabra1) < 3 or len(palabra2):
    print("No exite rima por contar con menos de letras")
elif palabra1[-3:] == palabra2[-3:]:
    print("Riman mucho")
elif palabra1[-2:] == palabra2[-2:]:
    print("Riman un poco")    
else:
    print("No Riman")    

# Ejercicio 2
# Crear un programa que permita al usuario elegir un candidato por el cual votar. Las posibilidades son: candidato A por el partido rojo, candidato B 
# por el partido verde, candidato C por el partido azul. Según el candidato elegido (A, B ó C) se le debe imprimir el mensaje “Usted ha votado por el 
# partido [color que corresponda al candidato elegido]”. Si el usuario ingresa una opción que no corresponde a ninguno de los candidatos disponibles, 
# indicar “Opción errónea”.
# Pista: Si la letra ingresada por el usuario es en minúscula, el programa debe convertirla en mayúscula    

partido = input("Elige candidato [A] [B] [C]\n")
cPartido = partido.upper()
if cPartido == "A":
    print(f"Eligio partido Rojo [{cPartido}]")
elif cPartido == "B":
    print(f"Eligio partido Verde [{cPartido}]")
elif cPartido == "C":
    print(f"Eligio partido Azul [{cPartido}]")
else :
    print("Opcion erronea")
