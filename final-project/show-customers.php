<?php
require_once 'Customer.php';

$message = '';
$customer = new Customer();
$customers = $customer->getCustomers();
if(isset($_POST['btn']))
{
    $message = $customer->updateCustomer($_POST);
}
?>
<div class="container">
    <div class="row">
        <div class="col-md-11">
            <div class="panel-heading">
                <h2 class="text-center text-success">
                    <?php echo $message; ?>
                </h2>
            </div>
            <div class="well">
                <h3 class="text-center">All Customers</h3>
            </div>
            <table class="table table-sm table-striped">
                <thead class="bg-primary">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Postal Code</th>
                    <th>Country</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $n=1; ?>
                <?php
                while ($rows = $customers->fetch_assoc())
                {
                    ?>
                    <tr>
                        <td><?php echo $n++; ?></td>
                        <td><?php echo $rows['name']; ?></td>
                        <td><?php echo $rows['contact']; ?></td>
                        <td><?php echo $rows['address']; ?></td>
                        <td><?php echo $rows['city']; ?></td>
                        <td><?php echo $rows['postal_code']; ?></td>
                        <td><?php echo $rows['country']; ?></td>
                        <td>
                            <a class="btn btn-primary" href="index.php?id=edit-customer&cus_id=<?php echo $rows ['id']; ?>" ><span class="glyphicon glyphicon-edit"></span> </a>
                            <a class="btn btn-danger" href="index.php?id=delete-customer&cus_id=<?php echo $rows ['id']; ?>" ><span class="glyphicon glyphicon-trash"></span> </a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
