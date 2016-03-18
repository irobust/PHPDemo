<?php
require_once 'DBConfig.php';
function addNewEmployee($param){
    if(!is_numeric($param['employeeNumber'])) return false;
    if(empty($param['firstName'])) return false;
    if(empty($param['lastName'])) return false;

    global $db;
    // $db->pdo->prepare($sql);
    $db->insert('employees', array(
      'employeeNumber' => $param['employeeNumber'],
      'firstName'      => $param['firstName'],
      'lastName'       => $param['lastName']
    ));
    return true;
}

function getEmployee($where=array()){
  global $db;
  if(!empty($where))
    return $db->select('employees', '*', $where);
  else
    return $db->select('employees', '*');
}

function getEmployeeByName(){
  global $db;
  $sql = "SELECT * FROM employees WHERE firstName LIKE ?";
  $statement = $db->pdo->prepare($sql);
  $statement->execute(array('j%'));
  return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function getEmployeeById($id){
  return null;
}
