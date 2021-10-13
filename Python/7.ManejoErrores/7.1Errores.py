while True:
    try:
        edad = int(input("Ingrese su edad\n"))
        print("Tu edad es: ",edad)
        break
    except:
        print("Ingresaste un valor erroneo")
    finally:
        print("Finalizo el programa!")
