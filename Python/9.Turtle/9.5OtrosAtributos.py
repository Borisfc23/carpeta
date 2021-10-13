import turtle

s = turtle.Screen()
t = turtle.Turtle()

t.shape("turtle") #Cambiar la forma del lapia a una tortuga

t.begin_fill() #Los comando que ingreseses dentro del begin y end se ejecutan
t.color("blue","red")
t.circle(100)
t.end_fill()

t.begin_fill()
t.color("white","black")
t.circle(50)
t.end_fill()

t.penup() #Elimina el rastro 
t.speed(1)
t.forward(220)
t.pendown() #Aparece el rastro
t.pencolor("black")
t.right(90)
t.forward(220)
t.right(90)
t.forward(120)

t.undo() #Deshacer la ultima accion.
t.clear() #Limpia toda la pantalla
t.reset() #Borra todas las acciones ejecutadas

t.forward(100)
t.stamp() #Deja una marca en su posicion
t.forward(100)

turtle.done()