class A():
    def __init__(self):
        self.contador = 0

    def incrementar(self):
        self.contador +=1

    def cuenta(self):
        return self.contador

class B():
    #Encapsulacion se hace con 2guion bajo __
    #Busca poner en privado las variables y metodos
    def __init__(self):
        self.__contador = 0

    def incrementar(self):
        self.__contador +=1

    def cuenta(self):
        return self.__contador

#Sin encapsular
a = A()
a.incrementar()
print(a.cuenta())
print(a.contador)

#Encapsulacion __
b = B()
b.incrementar()
print(b.cuenta())
print(b._B__contador)