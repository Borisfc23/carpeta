import turtle

s = turtle.Screen()
t = turtle.Turtle()

t.speed(5) #Rgular la velocidad del 1 al 10
t.circle(50) #Dibujar circulos especificando su radio
t.dot(30) #Rellenar el lapiz o tortuga

t.hideturtle() #Desaparecen el lapiz
t.speed(1)
t.circle(80)
t.showturtle()
t.circle(70)
t.setx(70) #Se mueve en el eje x
t.sety(-170) #Se mueve en el eje y

turtle.done()