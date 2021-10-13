import turtle
import random

s = turtle.Screen()
#Personalizar pantalla
s.title("Primer Proyecto - Carrera de Tortuga")
s.bgcolor("yellow")

#Crear Players
jugador1 = turtle.Turtle()
jugador2 = turtle.Turtle()

#Personalizar Players
jugador1.hideturtle()
jugador1.shape("turtle")
jugador1.color("green","green")
jugador1.shapesize(2,2,2)
jugador1.pensize(2)

jugador2.hideturtle()
jugador2.shape("turtle")
jugador2.color("blue","blue")
jugador2.shapesize(2,2,2)
jugador2.pensize(2)

#Crear Metas
jugador1.penup()
jugador1.goto(250,70)
jugador1.pendown()
jugador1.circle(35)

jugador2.penup()
jugador2.goto(250,-70)
jugador2.pendown()
jugador2.circle(35)

#Crear Inicio
jugador1.penup()
jugador1.goto(-250,105)
jugador1.showturtle()

jugador2.penup()
jugador2.goto(-250,-35)
jugador2.showturtle()

#Desarrollo del Dado
dado = [5,3,1,6,2,4]

#Logica de Avance
for i in range(20):
    if jugador1.pos() >= (250,70):
        print("Tortuga Verde Gano!!!")
        break
    elif jugador2.pos() >= (250,70):
        print("Tortuga Azul Gano!!!")
        break
    else:                
        jugador1.speed(1)
        turno1 = random.choice(dado)
        print("Tu numero es: ",turno1,"\nAvanzas: ",turno1*20)
        jugador1.pendown()
        jugador1.forward(turno1*20)
        
        jugador2.speed(1)
        turno2 = random.choice(dado)
        print("Tu numero es: ",turno2,"\nAvanzas: ",turno2 * 20)
        jugador2.pendown()
        jugador2.forward(turno2 * 20)

turtle.done()