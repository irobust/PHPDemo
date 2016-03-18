<!DOCTYPE html>
<?php
  session_start();
  echo $_SESSION['username'];

  require_once '../BusinessLogic/Employee.php';
  $number = 0;
  if(isset($_GET['number'])){
    $number = (int) $_GET['number'];
  }

  // $number = (isset($_GET['number']))? (int) $_GET['number']: 0;

  $result = getEmployeeById($number);

?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
    <?php if (!empty($result)): ?>
      <div class="">
        <span>Name:</span>
        <span><?php echo $result[0]['firstName'].' '.$result[0]['lastName'] ?></span>
      </div>
      <div class="">
        <span>Email:</span>
        <span><?php echo $result[0]['email'] ?></span>
      </div>
      <div class="">
        <span>Job Title:</span>
        <span><?php echo $result[0]['jobTitle'] ?></span>
    <?php endif; ?>
</body>
</html>
