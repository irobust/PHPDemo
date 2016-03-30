<?php
require_once '../BusinessLogic/Employee.php';
$employees = getEmployee();
?>
<table class="table table-strip">
  <thead>
    <tr>
      <th>Employee Number</th>
      <th>Name</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($employees as $employee): ?>
          <tr>
            <td><a href="?id=<?php echo $employee['employeeNumber'] ?>#employeeDetail"><?php echo $employee['employeeNumber'] ?></a></td>
            <td><?php echo $employee['firstName'].' '.$employee['lastName'] ?></td>
          </tr>
    <?php endforeach; ?>
  </tbody>
</table>
