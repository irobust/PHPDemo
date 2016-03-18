<?php
require_once 'DBAdapter.php';
function addNewEmployee($param){
    if(!is_numeric($param['employeeNumber'])) return false;
    if(empty($param['firstname'])) return false;
    if(empty($param['lastname'])) return false;

    // Insert into table employee
    $sql = "INSERT INTO employees(employeeNumber, firstName, lastName)
            VALUES(?, ?, ?)"
    query($sql, array('employeeNumber' => $param['employeeNumber'],
                      'firstName'      => $param['firstName'],
                      'lastName'       => $param['lastName']));
    return true;
}

function getEmployee($where=''){
  $sql = "SELECT firstName, lastName FROM employees {$where}";
  return query($sql);
}

function getEmployeeByName($name){
  return getEmployee("WHERE firstName LIKE '%{$name}%'");
}

function getEmployeeById($id){
  return null;
}
