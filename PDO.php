<?php
// Declaration
$con = new PDO('mysql:dbname=classicmodels;host=localhost', 'root', '');

// $con->query('CREATE TABLE ...');


// Query
$sql = "SELECT * FROM employees WHERE employeeNumber=:code OR firstName LIKE :name";
$statement = $con->prepare($sql);
$statement->execute(array(':code' => 1702,
                          ':name' => 'm%'));
$result = $statement->fetchAll(PDO::FETCH_ASSOC);

// View
foreach ($result as $key => $row) {
  echo "<div>{$row['firstName']} {$row['lastName']}</div>";
}
