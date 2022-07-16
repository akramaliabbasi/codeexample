

1.Customers table :
2 Orders table :

Write the followings sqls :

NOTE: there are many ways do these bellow queries but tried with one sampe at least.

1.select all purchases with name and dob of the customer ?

Query = "SELECT name, dob
  FROM Customer
 WHERE  id IN 
       (SELECT id 
          FROM Orders) ";


2.select all customers that don't have any purchases ?

Query = "SELECT name, dob
  FROM Customer
 WHERE  id NOT IN 
       (SELECT id 
          FROM Orders) ";



3.for each package purchased  , how many times it was purchased ?

Query = "SELECT id, MAX(package_purchased) FROM Orders ";

