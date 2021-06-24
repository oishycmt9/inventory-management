<?php
require_once 'Employee.php';
$message = '';
$employee = new Employee();
$delete = $employee->deleteEmployee($_GET['emp_id']);


?>
<?php echo $message; ?>
<a class="btn btn-primary" href="index.php?id=show-employees">Back to Employee List</a>
