<?php
require_once 'Employee.php';

$message = '';
$employee = new Employee();
$employees = $employee->getEmployees();
if(isset($_POST['btn']))
{
    $message = $employee->updateEmployee($_POST, $_FILES);
}

?>
<div class="container">
    <div class="row">
        <div class="col-md-11">
            <div class="panel-heading">
                <h2 class="text-center text-success">
                    <?php echo $message ; ?>
                </h2>
            </div>
            <div class="well">
                <h3 class="text-center">All Employees</h3>
            </div>
            <table class="table table-sm table-striped">
                <thead class="bg-primary">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Date of Birth</th>
                    <th>Photo</th>
                    <th>Notes</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $n=1; ?>
                <?php
                while ($rows = $employees->fetch_assoc())
                {
                    ?>
                    <tr>
                        <td><?php echo $n++; ?></td>
                        <td><?php echo $rows['name']; ?></td>
                        <td><?php echo $rows['contact']; ?></td>
                        <td><?php echo $rows['dob']; ?></td>
                        <td>
                            <img src="<?php echo $rows['photo_url']; ?>" alt="" style="width:50px; height:50px; border-radius: 50%;">
                        </td>
                        <td><?php echo $rows['notes']; ?></td>
                        <td>
                            <a class="btn btn-primary" href="index.php?id=edit-employee&emp_id=<?php echo $rows['id']; ?>" ><span class="glyphicon glyphicon-edit"></span> </a>
                            <a class="btn btn-danger" href="index.php?id=delete-employee&emp_id=<?php echo $rows['id']; ?>" ><span class="glyphicon glyphicon-trash"></span> </a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>
