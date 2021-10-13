import turtle

s = turtle.Screen()
t = turtle.Turtle()

s.bgcolor("red") #Cambiar el color del fondo del lienso
s.title("Proyecto-I") #Poner titulo al lienso

t.shapesize(5,8,1) #Medida del lapiz ancho,largo,borde
t.fillcolor("blue") #Color del lapiz

t.pencolor("white") #Cambia el color del rasto k deja el lapiz
t.pensize(4) #Cambia el grosor dek rastro
t.forward(250)

t.color("green","yellow") #Cambia el ratro, lapiz
t.right(90)
t.forward(250)

turtle.done()