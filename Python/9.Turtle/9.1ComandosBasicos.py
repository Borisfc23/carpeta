import turtle

# s = turtle.Screen() #Pantalla o lienso
# t = turtle.Turtle() #Aparece una flecha o puntero

t.forward(100)
t.right(90)
t.forward(100) #Indica que se mueva hacia delante 100px
t.right(90) #Gira a la derecha 90 grados
t.forward(100)
t.left(90)
t.backward(100)

# Otra forma de hacer
for x in range(0, 4):    
    turtle.forward(50)
    turtle.left(90)

# turtle.done() #Para que se quede abierto la pantalla

# turtle.color('red', 'blue')
# turtle.begin_fill()
# grados = 0
# turtle.speed(15)
# for x in range(1, 40):
#     for x in range(0, 4):
#         turtle.forward(50)
#         turtle.left(90)
#     turtle.left(grados + 10)
# turtle.end_fill()
