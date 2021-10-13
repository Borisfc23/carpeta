import turtle

s = turtle.Screen()
t = turtle.Turtle()

t.forward(100)
t.right(90)
t.forward(100)
print(t.pos()) #Devuelve la posicion del lapiz
print(t.xcar()) #Devuelve la posicion X del lapiz
print(t.ycar()) #Devuelve la posicion Y del lapiz
turtle.done()