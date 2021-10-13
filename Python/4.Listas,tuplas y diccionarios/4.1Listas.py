Lista = ["Tomate","cebolla","huevos","leche","arroz","leche"]
Lista2 = [1, 2, 3, 4, 5]
Lista3 = [6, 7, 8, 9, 10]

print(Lista)
print(Lista.index("Tomate"))#Nos da el indice del elemento
print(Lista.count("leche"))#Cantidad de veces que existe el elemento
print(Lista[1])
print(Lista2)
print(Lista2[4])
print(Lista2[-1])#Imprime el ultimo elemento
print(Lista3)
print(Lista3[0])
print("leche" in Lista)
print(Lista2[0:2])
print(Lista2 + Lista3)
Lista[1] = "Calabaza"
print(Lista)
print("Tomate" in Lista)