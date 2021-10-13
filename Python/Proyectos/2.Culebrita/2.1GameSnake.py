import turtle
import time
import random

retraso = 0.1
marcador = 0
marcador_alto = 0

#Pantalla
s = turtle.Screen()
s.setup(750,650)
s.bgcolor("yellow")
s.title("Proyecto-II Snake")

#Serpiente
serpiente = turtle.Turtle()
serpiente.speed(1)
serpiente.shape("square")
serpiente.penup()
serpiente.goto(0,0)
serpiente.direction = 'stop'
serpiente.color('green')

#Comida
comida = turtle.Turtle()
comida.shape("circle")
comida.color("black")
comida.penup()
comida.goto(0,100)
comida.speed(0)

cuerpo = []
texto = turtle.Turtle()
texto.speed(0)
texto.color("black")
texto.penup()
texto.hideturtle()
texto.goto(0,-260)
texto.write("Marcador: 0\tMarcador Alto:0",align="center",font=("verdana",24,"normal"))

#Direcciones
def arriba():
    serpiente.direction = 'up'
def abajo():
    serpiente.direction = 'down'
def derecha():
    serpiente.direction = 'right'
def izquierda():
    serpiente.direction = 'left'
def parar():
    serpiente.direction = "Stop"

s.listen() #PANTALLA ESCUCHA

#Programando las teclas
s.onkeypress(arriba,'Up') #PRESIONA LA FLECHA ARRIBA
s.onkeypress(abajo,'Down') #PRESIONA LA FLECHA ABAJO
s.onkeypress(derecha,'Right') #PRESIONA LA FLECHA DERECHA
s.onkeypress(izquierda,'Left') #PRESIONA LA FLECHA IZQUIERDA
s.onkeypress(parar,' ') #PRESIONA LA FLECHA IZQUIERDA

def movimiento():
    if serpiente.direction == 'up':
        y = serpiente.ycor() #Devuelve posicion en Y
        serpiente.sety(y + 20)
    if serpiente.direction == 'down':
        y = serpiente.ycor() 
        serpiente.sety(y - 20)
    if serpiente.direction == 'right':
        x = serpiente.xcor() #Devuelve posicion en x
        serpiente.setx(x + 20)
    if serpiente.direction == 'left':
        x = serpiente.xcor() 
        serpiente.setx(x - 20)
    if serpiente.direction == 'space':
        x = serpiente.xcor() 
        y = serpiente.ycor() 
        serpiente.goto(x,y)

#Movimiento
while True:
    s.update() #Actualizar pantalla

    #Colision con el borde de la pantalla
    if(serpiente.xcor() > 350 or serpiente.xcor() < -350 or serpiente.ycor() > 315 or serpiente.ycor() < -315):
        time.sleep(1)
        for i in cuerpo:
            i.clear()
            i.hideturtle()
        serpiente.home()
        serpiente.direction = 'stop'
        cuerpo.clear()

        marcador = 0
        texto.clear()
        texto.write("Marcador: {}\tMarcador Alto: {}".format(marcador,marcador_alto),align="center",font=("verdana",24,"normal"))

    if serpiente.distance(comida) < 20: #Permite la distancia entre objetos
        x = random.randint(-349,349)
        y = random.randint(-334,334)
        comida.goto(x,y)
        
        nuevo_cuerpo = turtle.Turtle()
        nuevo_cuerpo.shape("square")
        nuevo_cuerpo.color("green")
        nuevo_cuerpo.penup()
        nuevo_cuerpo.goto(0,0)
        nuevo_cuerpo.speed(0)
        cuerpo.append(nuevo_cuerpo)

        marcador += 10
        if marcador > marcador_alto:
            marcador_alto = marcador
            texto.clear()
            texto.write("Marcador: {}\tMarcador Alto:{}".format(marcador,marcador_alto),align="center",font=("verdana",24,"normal"))
        

    total = len(cuerpo)
    for i in range(total -1,0,-1):
        x = cuerpo[i - 1].xcor()
        y = cuerpo[i - 1].ycor()
        cuerpo[i].goto(x,y)

    if total > 0:
        x = serpiente.xcor()
        y = serpiente.ycor()
        cuerpo[0].goto(x,y)
            

    movimiento()

    #Colision con su propio cuerpo
    for i in cuerpo:
        if i.distance(serpiente) < 20:
            for i in cuerpo:
                i.clear()
                i.hideturtle()
            serpiente.home()
            cuerpo.clear()
            serpiente.direction = 'stop'
            marcador = 0
            texto.clear()
            texto.write("Marcador: {}\tMarcador Alto: {}".format(marcador,marcador_alto),align="center",font=("verdana",24,"normal"))
    time.sleep(retraso)

turtle.done()