USE Northwind
GO
--Ejercicio 1
--El top 10 de productos comprados por nombre, orden descendente por unidades 
--vendidas.

SELECT TOP 10 p.ProductName, SUM(od.Quantity) AS 'Cant Vendidas'
FROM Products p
    INNER JOIN [Order Details] od ON p.ProductID=od.ProductID
GROUP BY p.ProductName
ORDER BY 'Cant Vendidas' DESC

--Ejercicio 2
--Encuentra el producto que tiene el segundo precio mas alto en la compa�ia

SELECT
    TOP 1
    p1.ProductName, p1.UnitPrice 'Segndo'
FROM Products p1
WHERE p1.UnitPrice<(SELECT MAX(p2.UnitPrice)
FROM Products p2)
GROUP BY p1.ProductName,p1.UnitPrice
Order by 'Segndo' DESC

--SELECT * FROM  Products a WHERE  
--2 = (SELECT count(DISTINCT b.UnitPrice) FROM Products b WHERE a.UnitPrice <=b.UnitPrice);

SELECT *
FROM Products p
ORDER BY p.UnitPrice DESC
OFFSET 1 ROW
FETCH NEXT  1 ROWS ONLY

--Ejercicio 3: La diferencia entre group by y partition by es k el group reduce la cantidad de registros y el partition no lo reduce
--Crea un rank de productos vendidos ordenados por ciudad y cantidad de USA
SELECT p.ProductName, c.Country, c.City, od.Quantity,
    DENSE_RANK() OVER(PARTITION BY c.City ORDER BY Quantity DESC) AS 'Categoria'
FROM Customers c
    INNER JOIN Orders o ON c.CustomerID=o.CustomerID
    INNER JOIN [Order Details] od ON o.OrderID=od.OrderID
    INNER JOIN [Products] p ON od.ProductID=p.ProductID
WHERE Country='USA'
ORDER BY Quantity DESC

--Ejercicio 4
--Encontrar las ordenes que tardaron mas de 2 dias en entregarse despues de ser 
--realizados por el usuario, donde el valor sea mayor de 10,000.Mostrar numero de dias
--,fecha de la orden, customer id y pais de envio
SELECT o.OrderID, o.CustomerID, o.OrderDate, o.ShippedDate, o.ShipCountry,
    DATEDIFF(DAY,o.OrderDate,O.ShippedDate) as 'DIAS',
    SUM(od.Quantity*od.UnitPrice) as 'MONTO'
FROM Orders o
    INNER JOIN [Order Details] od ON o.OrderID=od.OrderID
GROUP BY o.OrderID,o.CustomerID,o.OrderDate,o.ShippedDate,o.ShipCountry
HAVING SUM(od.Quantity*od.UnitPrice)>10000 AND DATEDIFF(DAY,o.OrderDate,O.ShippedDate)>2
ORDER by MONTO ASC

--Ejercicio 5
--Encuentra el top 10 de clientes mas valiosos en 2018
SELECT TOP 10
    c.CompanyName, c.Country, c.City,
    SUM(od.Quantity*od.UnitPrice) as 'Total SALE'
FROM Customers c
    INNER JOIN Orders o ON c.CustomerID=o.CustomerID
    INNER JOIN [Order Details] od ON o.OrderID=od.OrderID
WHERE YEAR(o.OrderDate)='2017'
GROUP BY c.CompanyName,c.Country,c.City
ORDER BY 'Total SALE' DESC


--Ejercicio 6
--Muestra los productos que generaron un monto total de venta mayor o igual 30,000 y 
--muestra las unidades vendidas de cada producto en 2018
SELECT p.ProductName, SUM(od.Quantity) AS 'CANT VENDIDA',
    SUM(od.Quantity*od.UnitPrice) as 'TOTAL'
FROM Orders o
    INNER JOIN [Order Details] od ON o.OrderID=od.OrderID
    INNER JOIN [Products] p ON od.ProductID=p.ProductID
WHERE YEAR(o.OrderDate)='2018'
Group by p.ProductName
HAVING SUM(od.Quantity*od.UnitPrice)>=30000
ORDER BY 'TOTAL' DESC
--Ejercicio 7
--Clasifica a los clientes de acuerdo al total de ventass
-->=30000 Nivel A
-->=20000 Y <30000 NIVEL B
--<20000 NIVEL C

SELECT c.CompanyName, SUM(od.Quantity*od.UnitPrice) AS TOTAL,
    CASE 
	WHEN (SUM(od.Quantity*od.UnitPrice)>=30000) THEN 'LVL-A'
	WHEN (SUM(od.Quantity*od.UnitPrice)<30000 and SUM(od.Quantity*od.UnitPrice)>=20000) THEN 'LVL-B'
	ELSE 'LVL-C'
	END
	AS 'NIVEL'
FROM Customers c
    INNER JOIN Orders o ON c.CustomerID=o.CustomerID
    INNER JOIN [Order Details] od ON o.OrderID=od.OrderID
GROUP BY c.CompanyName
ORDER BY TOTAL DESC


--Ejercicio 8
--�Que clientes generaron ventas por arriba del promedio del total de ventas? filtrar por a�o
SELECT c.CompanyName, c.Country, c.City, SUM(od.Quantity*od.UnitPrice) AS TOTAL
FROM Customers c
INNER JOIN Orders o ON c.CustomerID=o.CustomerID
INNER JOIN [Order Details] od ON o.OrderID=od.OrderID
WHERE YEAR(o.OrderDate)='2018'
GROUP BY c.CompanyName,c.Country,c.City
HAVING SUM(od.Quantity*od.UnitPrice)>(SELECT AVG(Quantity*UnitPrice)
FROM [Order Details])
ORDER BY TOTAL DESC


--Ejercicios 9
--�Que clientes no han comprado en los ultimos 40 meses?

SELECT c.CompanyName, MAX(o.OrderDate) as 'Ultima Compra', DATEDIFF(MONTH,MAX(o.OrderDate),GETDATE()) AS 'Diferencia'
FROM Customers c
INNER JOIN Orders o ON c.CustomerID=o.CustomerID
GROUP BY c.CompanyName
HAVING DATEDIFF(MONTH,MAX(o.OrderDate),GETDATE())>40


--Ejercicio 10
--Numero de ordenes por clientes

SELECT c.CustomerID, c.CompanyName, (SELECT COUNT(OrderID)
FROM Orders o
WHERE c.CustomerID=o.CustomerID) as 'Cant'
FROM Customers c
ORDER BY 'Cant' DESC

--Ejercicio 11
--Encuentra la duracion de dias entre ordenes de cada cliente

SELECT o1.CustomerID, o1.OrderDate, o2.OrderDate as 'fecha ultima', DATEDIFF(DAY,o1.OrderDate,o2.OrderDate) as 'diferencia'
FROM Orders o1
INNER JOIN Orders o2 ON o1.OrderID=o2.OrderID-1
ORDER BY o1.CustomerID ASC


--Ejercicio 12
--Muestra los empleados con mas ventas
--Calcula un bonos por sus ventas del 2%

SELECT TOP 3
    e.FirstName+' '+e.LastName, Sum(od.Quantity*od.UnitPrice) as 'TOT VENDIDO', Sum(od.Quantity*od.UnitPrice)*0.02 AS BONO
FROM Employees e
    INNER JOIN Orders o ON e.EmployeeID=o.EmployeeID
    INNER JOIN [Order Details] od ON o.OrderID=od.OrderID
GROUP BY e.FirstName+' '+e.LastName

--Ejercicio 13
--Cuantos empleados tienes por posicion(PUESTO LABORAL)  y por ciudad

SELECT e.Title, e.City, COUNT(e.EmployeeID) AS 'CANTIDAD'
FROM Employees e
GROUP BY e.Title,e.City

--Ejercicio 14
--Cuanto timpo llevan trabajando tus empleados 

SELECT e.FirstName+' '+e.LastName, e.Title, e.HireDate, DATEDIFF(YEAR,e.HireDate,GETDATE()) AS 'TIEMPO'
FROM Employees e

--Ejercicio 15
--CUANTO EMPLEADO SON MAYORES DE 70 A�OS
SELECT e.FirstName+' '+e.LastName, e.HireDate, DATEDIFF(YEAR,e.BirthDate,GETDATE()) AS 'edad'
FROM Employees e
where DATEDIFF(YEAR,e.BirthDate,GETDATE())>=70

