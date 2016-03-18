<!DOCTYPE html>
<?php
  require_once 'BusinessLogic/Employee.php';
  if(isset($_GET['id'])){
    $id = $_GET['id'];
  }else{
    $id = null;
  }

  // $id = (isset($_GET['id']))? $_GET['id']: null;
  $result = getEmployeeById($id);
 ?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
<?php if (!is_null($result)): ?>

<?php else: ?>
  <h3>Invalid id</h3>
<?php endif; ?>
</body>
</html>
