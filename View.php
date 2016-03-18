<!DOCTYPE html>
<?php require_once 'BusinessLogic/Auhten.php'; ?>
<?php
  if(!empty($_POST)){
    if(login($_POST['username'], $_POST['password'])){

    }
  }
 ?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <form class="" action="View.php" method="post">
    <input type="text" name="username" value="name">
    <input type="text" name="password" value="name">
    <input type="submit" name="name" value="Submit">
  </form>
</body>
</html>
