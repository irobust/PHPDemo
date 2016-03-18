<?php
// Declaration
$con = new PDO('mysql:dbname=classicmodels;host=localhost', 'root', '');

function query($sql, $param=array()){
  global $con;
  $statement = $con->prepare($sql);

  if(!empty($param)){
    $statement->execute($param);
  }else {
    $statement->execute();
  }
  $result = $statement->fetchAll(PDO::FETCH_ASSOC);
  return $result;
}
