<!DOCTYPE html>
<?php
  require_once('../BusinessLogic/Employee.php');

  session_start();
  $_SESSION['username'] = 'admin';

  if(!empty($_POST)){
    $result = addNewEmployee($_POST);
  }
  $employees = getEmployeeByName();
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style>
    label{
      width: 120px;
      display: inline-block;
    }
  </style>
</head>
<body>
  <?php if (isset($result)): ?>
      <?php if ($result): ?>
        <div class="">
          Add new employee successfully!
        </div>
      <?php else: ?>

      <?php endif; ?>
  <?php endif; ?>
  <form action="" method="POST">
    <div>
      <label for="employeeNumber">Employee Code</label>
      <input type="text" name="employeeNumber"/>
    </div>
    <div>
      <label for="firstname">Firstname</label>
      <input type="text" name="firstName"/>
    </div>
    <div>
      <label for="lastname">Lastname</label>
      <input type="text" name="lastName"/>
    </div>
    <input type="submit" value="Save" />
  </form>

  <?php foreach ($employees as $employee): ?>
    <div class="">
      <span>
        <a href="employeeDetail.php?number=<?php echo $employee['employeeNumber'] ?>">
          <?php echo $employee['employeeNumber'] ?>
        </a>
      </span>
      <span><?php echo $employee['firstName'] ?></span>
      <span><?php echo $employee['lastName'] ?></span>
    </div>
  <?php endforeach; ?>
</body>
</html>
