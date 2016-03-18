<?php
require_once 'DBAdapter.php';
function addNewEmployee($param){
    if(!is_numeric($param['employeeNumber'])) return false;
    if(empty($param['firstName'])) return false;
    if(empty($param['lastName'])) return false;

    // Insert into table employee
    $sql = "INSERT INTO employees(employeeNumber, firstName, lastName)
            VALUES(?, ?, ?)";
    query($sql, array($param['employeeNumber'],
                      $param['firstName'],
                      $param['lastName']));
    return true;
}

function getEmployee($where=''){
  $sql = "SELECT employeeNumber,firstName, lastName FROM employees {$where}";
  return query($sql);
}

function getEmployeeByName($name='j'){
  return getEmployee("WHERE firstName LIKE '%{$name}%'");
}

function getEmployeeById($id){
  $sql = "SELECT * FROM employees WHERE employeeNumber=?";
  $result = query($sql, array($id));
  return $result;
}
