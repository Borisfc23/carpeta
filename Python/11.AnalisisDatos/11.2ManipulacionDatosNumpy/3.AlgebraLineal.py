import numpy as np
print("Producto escalar entre vectores")
a = np.array([1,2,3],dtype=float)
b = np.array([0,1,1],dtype=float)
print(np.dot(a, b)) #Producto escalar para vector o array unidireccional

print("Producto entre matrices")
a = np.array([[5,2],[4,8]],float)
b = np.array([[2,4],[5,3]],float)
print(a @ b) #Producto entre matrices

print("Producto entre matriz con vector")
x = np.array([[0,1,4],[5,2,3],[1,4,8]],float)
y = np.array([2,3,5],float)
print(x,"\n-----------")
print(y,"\n-----------")
print(np.matmul(x,y))

print("Hallar una Determinante de una Matriz")
a = np.array([[8,5],[3,4]])
print(a,"\n----------")
print(np.linalg.det(a))

print("Autovalores y Autovectores")
vals,vecs = np.linalg.eig(a)
print("Autovalor: ",vals,"\n-------")
print("Autovector: ",vecs,"\n-------")
A = np.array([
    [-1,1,0],
    [-4,3,0],
    [1,0,2]
    ])
vals,vec = np.linalg.eig(A)
print(vals)
print(vec)
