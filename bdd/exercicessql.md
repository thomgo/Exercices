# Exercices de programmation SQL

Vous trouverez dans ce document une série d'exercices qui vont vous obliger à réaliser des requêtes sql de plus en plus complexes.

Pour réaliser ces exercices, vous utiliserez une base de données libre, mise à disposition par la w3school sur laquelle vous pouvez réaliser des requêtes pour vous entraîner.

[Aller à la base de données](https://www.w3schools.com/sql/trysql.asp?filename=trysql_asc)

Le contexte : la base de données est celle d'une entreprise de vente de produits. Vous avez été engagé comme développeur pour réaliser un espace d'administration complet permettant une gestion et une visualisation aisée de la base de données de l'entreprise. Pour ce faire vous aller devoir réaliser un ensemble de requêtes.

## Exercices 1

Ecrivez les requêtes pour :
* Afficher le contenu de la table Employees
* Afficher le contenu de la table Products
* Afficher le contenu de la table OrderDetails

## Exercices 2
Ecrivez les requêtes pour :
* Ajouter un client dans la table Customers
* Ajouter un produit dans la table Products
* Supprimer le client ajouté dans table Customers
* Supprimer le produit ajouté dans la table Products
* Modifier les détails de la commande 10252, id des détails 14 dans la table OrderDetails pour passer sa quantité de 40 à 20
* Modifier le nom, la ville et le pays du client d'id 50

## Exercices 3

Ecrivez les requêtes pour :
* Afficher tous les clients français
* Afficher tous les clients français vivant à Paris
* Afficher tous les clients français vivant à Paris ou Lille
* Afficher uniquement le nom, l'unité et le prix des produits de la catégorie boissons et du fournisseur Bigfoot Breweries

## Exercices 4
Ecrivez les requêtes pour :
* Afficher le nom et le prénom des 3 premiers employés
* Afficher le nom et le prénom des 3 derniers employés
* Afficher le nom des produits et leur prix du plus cher au moins cher pour tous ceux dont le prix est compris entre 10 et 30 euros
* Afficher le nom, le fournisseur, la catégorie et le prix de tous les produits qui ont les fournisseurs suivants : Exotic Liquid, Specialty Biscuits, Ltd , Plutzer Lebensmittelgroßmärkte AG et les catégories suivantes : Boissons et Confection, en les classant du moins cher au plus cher.

## Exercices 5
Ecrivez les requêtes pour :
* Afficher le nom et la description des catégories en majuscules
* Afficher le nom et la description des catégories en majuscules en leur donnant pour allias "NameToUpper" et "DescriptionToUpper"
* Afficher tous les clients dont la longueur du nom est comprise entre 20 et 30 caractères.
* Afficher le prix moyen des produits avec pour allias "PrixMoyen"
* Afficher le prix moyen des produits arrondi à 2 décimales
* Afficher le prix moyen des produits de la catégorie condiments
* Afficher le nombre de commandes passées par le client portant l'id 25

## Exercice 6 (jointures)
Ecrivez les requêtes pour :
* Obtenir depuis la table Orders l'id et la date de la commande ainsi que le nom du client et son pays d'origine
* Afficher en plus des informations précédentes le nom et le prénom de l'employé ayant traité la commande
* Afficher en plus des informations précédentes la quantité de produit commandés, le nom du produit et le prix à l'unité du produit.
* Afficher en plus des informations précédentes une colonne "Amount" contenant le prix total de la commande arrondi à deux décimales

# Correction

## Exercices 1
```
SELECT * FROM Employees
SELECT * FROM Products
SELECT * FROM OrderDetails

```

## Exercices 2
```
INSERT INTO Customers(CustomerName, ContactName, Address, City, PostalCode, Country) VALUES("Thomas Gossart", "Thomas Gossart", "Imaginaire", "Ville", 45654, "France")
INSERT INTO Products(ProductName, SupplierID, CategoryID, Unit, Price) VALUES("SaucePoivre", 21, 3, "20 sachet", 45)
DELETE FROM Customers WHERE CustomerID = 94
DELETE FROM Products WHERE ProductId = 78
UPDATE OrderDetails SET Quantity = 20 WHERE OrderDetailID = 14
UPDATE Customers SET CustomerName = "Jorge", City = "Stockholm", Country = "Sweden" WHERE CustomerId = 50

```

## Exercices 3
```
SELECT * FROM Customers WHERE Country = "France"
SELECT * FROM Customers WHERE Country = "France" AND City = "Paris"
SELECT * FROM Customers WHERE Country = "France" AND (City = "Paris" OR City = "Lille")
SELECT ProductName, Unit, Price FROM Products WHERE CategoryID = 1 AND SupplierID = 16

```

## Exercices 4
```
SELECT LastName, FirstName FROM Employees LIMIT 0, 3
SELECT LastName, FirstName FROM Employees ORDER BY EmployeeID DESC LIMIT 0, 3
SELECT ProductName, Price FROM Products WHERE Price >= 10 AND Price <= 30 ORDER BY Price DESC
SELECT ProductName, SupplierID, CategoryID, Price FROM Products WHERE (SupplierID = 1 OR SupplierID = 8 OR SupplierID = 12) AND (CategoryID = 1 OR CategoryID = 3) ORDER BY Price ASC

```

## Exercices 5
```
SELECT UPPER(CategoryName), UPPER(Description) FROM Categories
SELECT UPPER(CategoryName) AS NameToUpper, UPPER(Description) AS DescriptionToUpper FROM Categories
SELECT * FROM Customers WHERE LENGTH(CustomerName)BETWEEN 20 AND 30
SELECT AVG(Price) AS PrixMoyen FROM Products
SELECT ROUND(AVG(Price), 2) AS PrixMoyen FROM Products
SELECT ROUND(AVG(Price), 2) AS PrixMoyen FROM Products WHERE CategoryID = 2
SELECT COUNT(*) AS "NombreCommande" FROM Orders WHERE CustomerID = 25

```
## Exercices 6
```
SELECT o.OrderID, o.OrderDate, c.CustomerName, c.Country FROM Orders AS o INNER JOIN Customers as c ON o.CustomerID = c.CustomerID
SELECT o.OrderID, o.OrderDate, c.CustomerName, c.Country, e.LastName, e.FirstName FROM Orders AS o INNER JOIN Customers as c ON o.CustomerID = c.CustomerID INNER JOIN Employees as e ON o.EmployeeID = e.EmployeeID
SELECT o.OrderID, o.OrderDate, c.CustomerName, c.Country, e.LastName, e.FirstName, od.Quantity, p.ProductName, p.Price FROM Orders AS o INNER JOIN Customers as c ON o.CustomerID = c.CustomerID INNER JOIN Employees as e ON o.EmployeeID = e.EmployeeID INNER JOIN OrderDetails AS od ON o.OrderID = od.OrderID INNER JOIN Products AS p ON od.ProductID = p.ProductID WHERE c.Country = "USA"
SELECT o.OrderID, o.OrderDate, c.CustomerName, c.Country, e.LastName, e.FirstName, od.Quantity, p.ProductName, p.Price, ROUND((od.Quantity * p.Price), 2) AS Amount FROM Orders AS o INNER JOIN Customers as c ON o.CustomerID = c.CustomerID INNER JOIN Employees as e ON o.EmployeeID = e.EmployeeID INNER JOIN OrderDetails AS od ON o.OrderID = od.OrderID INNER JOIN Products AS p ON od.ProductID = p.ProductID WHERE c.Country = "USA"

```
