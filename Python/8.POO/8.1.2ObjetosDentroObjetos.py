class Videojuego:
    
    # Constructor de clase
    def __init__(self, titulo, genero, lanzamiento):
        self.titulo = titulo
        self.genero = genero
        self.lanzamiento = lanzamiento
        print('Se creó el videojuego:', self.titulo)

    def __str__(self):
        return '{} ({})'.format(self.titulo, self.lanzamiento)

vj= Videojuego("The Last of Us", "Acción", 2013)
print(str(vj))
class Catalogo:
    vjuegos = []  # Esta lista contendrá objetos de la clase Videojuego

    def __init__(self, vjuegos=[]):
        self.vjuegos = vjuegos

    def agregar(self, v):  # v será un objeto de clase Videojuego
        self.vjuegos.append(v)

    def mostrar(self):
        for v in self.vjuegos:
            print(v) # Print toma por defecto str(v)

v1 = Videojuego("The last of us Part II","Accion",2020)
c = Catalogo([vj,v1])
c.agregar(Videojuego("Pokemon", "RPG", 1996))
print("---Lista de VideoJuegos---")
c.mostrar()
    