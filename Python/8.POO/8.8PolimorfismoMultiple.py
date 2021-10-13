class A():
    def mensaje(self):
        print("Esta es la clase A")
    def primera(self):
        print("Esta dentro de la clase A")

class B():
    def mensaje(self):
        print("Esta es la clase B")
    def segunda(self):
        print("Esta dentro de la clase B")

class C(A,B):
    pass

c = C()
c.primera()
c.segunda()