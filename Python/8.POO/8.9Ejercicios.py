# Ejercicio 1
# Realizar un programa que conste de una clase llamada Alumno que tenga como atributos el nombre y la nota del alumno. Definir los métodos para 
# inicializar sus atributos, imprimirlos y mostrar un mensaje con el resultado de la nota y si ha aprobado o no.

class Alumno():    

    def __init__(self,nombre,nota):
        self.nombre = nombre
        self.nota = nota
    def mostrar(self):
        if nota > 12:
            print("Hola {} tienes {} de nota".format(self.nombre,self.nota)," APROBADO")
        else:
            print("Hola {} tienes {} de nota".format(self.nombre,self.nota)," DESAPROBADO")

nombre = input("Como te llamas\n")
nota = int(input("Nota\n"))
alumno = Alumno(nombre, nota)
print(alumno.mostrar())

# Ejercicio 2
# Escribir una clase en python que calcule pow(x, n)
# x = es la base
# n = es el exponente

class Exponente():
    def __init__(self,x,n):
        self.x = x
        self.n = n
    def elevar(self):
        print(pow(self.x, self.n))
        
exxpo = Exponente(3, 2)
print(exxpo.elevar())

# Ejercicio 3
# Realizar un programa en el cual se declaren dos valores enteros por teclado utilizando el método __init__. Calcular después la suma, resta, 
# multiplicación y división. Utilizar un método para cada una e imprimir los resultados obtenidos. Llamar a la clase Calculadora.

class Calculadora():

    def __init__(self):
        self.v1 = int(input("Ingrese Primer Numero\n"))
        self.v2 = int(input("Ingrese Segundo Numero\n"))
    
    def suma(self):
        print(self.v1 + self.v2)

    def resta(self):
        print(self.v1 - self.v2)

    def multiplicación(self):
        print(self.v1 * self.v2)

    def division(self):
        print(self.v1 / self.v2)


cal = Calculadora()
cal.suma()
cal.resta()
cal.multiplicación()
cal.division()
lista = [cal.suma(),cal.resta(),cal.multiplicación(),cal.division()]
for item in lista:
    print(item)
    
# Ejercicio 4
# Escribir una clase que se llame Areas(). A partir de un constructor se deben pasar los valores de Base y Altura. Luego, se debe calcular area
# de un cuadrado, triangulo y pentagono

class Areas():
    
    def __init__(self,b,h):
        self.b = b
        self.h = h
    
    def cuadrado(self):
        print(self.b*self.h)

    def triangulo(self):
        print(self.b*self.h/2)

area = Areas(12, 3)
print(area.cuadrado())
print(area.triangulo())

# Ejercicio 6
# Crear una clase Fabrica que tenga los atributos de Llantas, Color y Precio; luego crear dos clases mas que hereden de Fabrica, las cuales
#  son Moto y Carro. Crear metodos que muestren la cantidad de llantas, color y precio de ambos transportes. Por ultimo, crear objetos para cada 
#  clase y mostrar por pantalla los atributos de cada uno

class Fabrica():

    def __init__(self,llantas,color,precio):
        self.llantas = llantas
        self.color = color
        self.precio = precio

class Moto(Fabrica):
    def datos(self):
        print("CARRO ==>Llantas: {}, Precio: {}, Color: {}".format(self.llantas,self.precio,self.color))

class Carro(Fabrica):
    def datos(self):
        print("MOTO ==>Llantas: {}, Precio: {}, Color: {}".format(self.llantas,self.precio,self.color))

moto = Moto(2,"NEGRO",1000)
moto.datos()
carro = Carro(4,"Rojo",30000)
carro.datos()

# Ejercicio 1
# Crear una clase llamada Marino(), con un metodo que sea hablar, en donde muestre un mensaje que diga "Hola...". Luego, crear una clase Pulpo()
#  que herede Marino, pero modificar el mensaje de hablar por "Soy un Pulpo". Por ultimo, crear una clase Foca(), heredada de Marino, pero 
#  que tenga un atributo nuevo llamado mensaje y que muestre ese mesjae como parametro

class Marino():
    def hablar(self):
        print("Hola..")

class Pulpo(Marino):
    def hablar(self):
        print("Soy un Pulpo")

class Foca(Marino):
    def hablar(self,msj):
        self.msj = msj
        print(self.msj)

marino = Marino() 
marino.hablar()

pulpo = Pulpo()
pulpo.hablar()

foca = Foca()
foca.hablar("Hola ser una foca macho")

# Ejercicio 1
# Crear un programa con tres clases Universidad, con atributos nombre (Donde se almacena el nombre de la Universidad). Otra llamada Carerra, con 
# los atributos especialidad (En donde me guarda la especialidad de un estudiante). Una ultima llamada Estudiante, que tenga como atributos su nombre 
# y edad. El programa debe imprimir la especialidad, edad, nombre y universidad de dicho estudiante con un objeto llamado persona.

class Universidad():
    def __init__(self,Nombre):
        self.Nombre = Nombre

class Carrera():
    def carera(self,especialidad):
        self.especialidad = especialidad
        
class Estudiante(Universidad,Carrera):
       
    def mostrar(self,nombre,edad):
        self.nombre = nombre
        self.edad = edad
        print("Alumno: {} de edad: {} Universidad: {} y especialidad: {}".format(self.Nombre,self.edad,self.nombre,self.especialidad))
persona = Estudiante("UTP")
persona.carera("Ing Sistemas")
persona.mostrar("Pepe Torres",20)

# #Ejericio 10
# ### Crea una clase llamada _Punto_ con sus dos coordenadas X y Y.
# # + Añade un método constructor para crear puntos, si no se recibe una coordenada, su valor será cero.
# # + Redefine el método string para que al imprimir por pantalla el punto aparezca en formato (X,Y)
# # + Define el método Cuadrante que indique a qué cuadrante pertenece el punto: 
# # + Define el método Vector, cuyos parámetros sean otro par de coordenadas y que calcule el vector que une los dos puntos.
# # + Define el método Distancia, cuyos parámetros sean otro par de coordenadas y que calcule la distancia entre los dos puntos y la muestre por pantalla. 

import math
class  Punto:
    def __init__(self,x = 0,y = 0):
        self.x = x
        self.y = y
    def __str__(self): #este metodo retorna en los self
        return "({},{})".format(self.x,self.y)
    def Cuadrante(self):
        if self.x > 0 and self.y > 0:
            print(f"{self} pertenece al Primer cuadrante(I-C)")
        elif self.x < 0 and self.y > 0:
            print("({},{})".format(self.x,self.y)," pertenece al Segundo cuadrante(II-C)")
        elif self.x < 0 and self.y < 0:
            print("({},{})".format(self.x,self.y)," pertenece al Tercer cuadrante(III-C)")
        elif self.x > 0 and self.y < 0:
            print("({},{})".format(self.x,self.y)," pertenece al Cuarto cuadrante(IV-C)")
        elif self.x != 0 and self.y == 0:
            print("({},{})".format(self.x,self.y)," se encuentra en el Eje-X")
        elif self.x == 0 and self.y != 0:
            print("({},{})".format(self.x,self.y)," se encuentra en el Eje-Y")
        else:
            print("Se encuentra en el Origen de coordenada (0,0)")

    def vector(self, p):
        print(f"El vector que une los puntos {self} y {p} es igual a ({p.x-self.x}, {p.y-self.y})")

    def distancia(self, p):
        mod = math.sqrt( (p.x - self.x)**2 + (p.y - self.y)**2 )
        print(f"La distancia entre los puntos {self} y {p} es {mod}")

ax = Punto(-2,4)
ax.Cuadrante()

d = Punto(0,0)
vx = ax.vector(d)

dx = ax.distancia(d)

#Ejercicio 11
### Crea una clase llamada _Rectangulo_ con dos puntos (inicial y final) que formarán la diagonal del rectángulo.
# + Añade un método constructor para crear ambos puntos fácilmente, si no se envían se crearán dos puntos en el origen por defecto.
# + Añade al rectángulo un método llamado Mostrar_base que muestre la base.
# + Añade al rectángulo un método llamado Mostrar_altura que muestre la altura.
# + Añade al rectángulo un método llamado Mostrar_area que muestre el area.

class Rectangulo:
    def __init__(self, inicio=Punto(0,0), final=Punto(0,0)):
        self.inicio = inicio
        self.final = final
        self.base = abs(self.final.x - self.inicio.x)
        self.altura = abs(self.final.y - self.inicio.y)
        self.area = self.base * self.altura

    def mostrar_base(self):
        print(f"La base del rectángulo es {self.base}")

    def mostrar_altura(self):
        print(f"La altura del rectángulo es {self.altura}")

    def mostrar_area(self):
        print(f"El área del rectángulo es {self.area}")

rec = Rectangulo(a,c)
rec.mostrar_area()

#Ejercicio 20
