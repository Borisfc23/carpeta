def suma(num1,num2 ):
    return num1 + num2

print("Suma: ",suma(15, 10))

def resta(numero1 = None, numero2 = None):
    if numero1 == None:
        print("No ingresaste valores")
        return
    return numero1 - numero2

print("Resta: ",resta(numero2 = 2, numero1 = 1))
print("Resta: ",resta(34, 14))
