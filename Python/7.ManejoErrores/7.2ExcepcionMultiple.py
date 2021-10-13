while True:
    try:
        num1 = int(input("Ingrese un numero\n"))
        resultado = 100/num1
        print(resultado)
        break
    # except ZeroDivisionError:
    except ValueError:    
        print("Division Erronea")


#De esta forma puedes saber que tipo de error es
while True:
    try:
        num1 = int(input("Ingrese un numero\n"))
        resultado = 100/num1
        print(resultado)
        break
    except Exception as e:    
        print("Error: ",type(e).__name__) 