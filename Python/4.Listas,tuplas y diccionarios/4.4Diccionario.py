Diccionario = {1:"Manuel Garcia",2:"Andrea Martinez",3:"Armando Cortez"}
agregar = {3:"Boris Flores",4:"Lucia Ramirez"}
print(type(Diccionario))
print(Diccionario)
print(Diccionario[3]) #Imprime el valor 3
for c,v in Diccionario.items():#Imrpime la clave y el valor
    print(c,v)
print(2 in Diccionario) #Devuelve si la llave 2 esta en el diccionario

value = Diccionario.values() #Transforma un diccionario en lista y se desaparecen las llaves
print("Manuel Garcia" in value)

# Ejercicio 1
# En el siguiente diccionario se encuentran capitales de los paises en el mundo, debes realizar un programa que pida un pais al usuario, y 
# muestre la capital de ese pais, en dado caso el pais no este en el diccionario, se debe mostrar un mensaje diciendo que ese pais no se encuentra.

dic_pais = {"Guatemala": "Ciudad de Guatemala", "El Salvador": "San Salvador", "Honduras": "Honduras","Nicaragua": "Managua", "Costa Rica": "San Jose", 
"Panama": "Panama", "Argentina": "Buenos Aires", "Colombia": "Bogota", "Venezuela": "Caracas", "España": "Madrid"}

input_pais = input("Ingrese un pais\n")
letra = input_pais.capitalize() #Transforma la primera letra en mayuscula
print(letra)
if (letra in dic_pais):
    print(f"Su capital es: ",dic_pais[letra])
else:
    print("Pais no se encuentra")

#Ejercicio 2
# En el desarrollo de un videojuego se te encarga configurar y balancear cada clase de personaje. Partiendo de que la estadística base es 2,
#  debes cumplir las siguientes condiciones:
# + El caballero tiene el doble de vida y defensa que un guerrero.
# + El guerrero tiene el doble de ataque y alcance que un caballero.
# + El arquero tiene la misma vida y ataque que un guerrero, pero la mitad de su defensa y el doble de su alcance.
# + Muestra como quedan las propiedades de los tres personajes.

caballero = { 'vida':2, 'ataque':2, 'defensa': 2, 'alcance':2 }
guerrero  = { 'vida':2, 'ataque':2, 'defensa': 2, 'alcance':2 }
arquero   = { 'vida':2, 'ataque':2, 'defensa': 2, 'alcance':2 }

caballero['vida'] = guerrero['vida']*2
caballero['defensa'] = guerrero['defensa']*2

guerrero['ataque'] = caballero['ataque']*2
guerrero['alcance'] = caballero['alcance']*2

arquero['vida'] = guerrero['vida']
arquero['ataque'] = guerrero['ataque']
arquero['defensa'] = guerrero['defensa']/2
arquero['alcance'] = guerrero['alcance']*2

print(caballero,guerrero,arquero)

