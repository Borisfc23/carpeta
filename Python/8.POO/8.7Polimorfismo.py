#El polimorfismo dice que puedes tener el mimos mentodo con diferente resultado 
class Animales():
    def __init__(self,nombre,mensaje):
        self.nombre = nombre
        self.mensaje = mensaje
    def hablar(self):
        print(self.mensaje)

class Perro(Animales):
    def __init__(self, nombre, mensaje,raza,color):
        super().__init__( nombre, mensaje)
        self.raza = raza
        self.color = color
        print("{} dice {} de raza {} y color {}".format(self.nombre,self.mensaje,self.raza,self.color))
    def hablar(self):
        print("Yo digo Guau!")

class Pez(Animales):
    def hablar(self):
        print("Yo no hablo")
perro = Perro("Fido", "Guau", "Chihuaua", "blanco")
# pez = Pez("pececito","")
perro.hablar()

# animales = [Perro("Fido","Guau!"),Pez("pececito","")]
# for i in animales:
#     print(i.hablar())