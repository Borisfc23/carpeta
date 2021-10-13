class Persona():
    def __init__(self,nombre,apellido):
        self.nombre = nombre
        self.apellido = apellido
        print("El objeto {} {} ha sido creado ".format(self.nombre,self.apellido))

    def __str__(self):
        return "El objeto tiene como atributo el nombre {} y apellido {}".format(self.nombre,self.apellido)

    def __del__(self):
        print("El objeto {} {} ha sido destruido ".format(self.nombre,self.apellido))

persona = Persona("Boris","Flores")
print(str(persona))