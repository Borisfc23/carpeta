def cuenta_atras(num):
    num -=1
    if num > 0:
        print(num)
        cuenta_atras(num)
    else:
        print(num,"boom")
    print("Fun de funcion ",num)

cuenta_atras(5)

def factorial(n):
    if n ==1:
        num = 1
    else:
        num = n * factorial(n-1)
    return num
print("faltorial de 4 es:",factorial(4))
