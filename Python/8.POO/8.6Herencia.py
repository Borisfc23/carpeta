class Animales():
    def __init__(self,descripcion,especie,hablar):
        self.descripcion = descripcion
        self.especie = especie
        self.hablar = hablar

    def habla(self):
        print("Yo hago",self.hablar)

    def describir(self):
        print("Soy de la especie",self.especie)

class Perro(Animales):
    pass
class Abeja(Animales):
    def sonido(self,sonido):
        self.sonido = sonido
        print(self.sonido)

perro = Perro("perro","mamifero","guauu!")
perro.habla()
perro.describir()

abeja = Abeja("abeja","insecto","Brr!")
abeja.describir()
abeja.sonido("Brr!")