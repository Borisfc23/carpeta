class Persona():
    nombre = False

    def __init__(self,nombre,apellido): #Funcion __init__ es el constructor
        self.nombre = nombre
        self.apellido = apellido
        print("Has creado el objeto persona con nombre: {} {}".format(nombre,apellido))

    #El self en POO funciona como una variable global
    def datos(self):
        self.nombre = True

persona = Persona("Boris","Flores")
