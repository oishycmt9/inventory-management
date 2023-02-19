<?php
require_once 'Supplier.php';

$message = '';
$supplier = new Supplier();
$suppliers = $supplier->getSuppliers();
if(isset($_POST['btn']))
{
    $message = $supplier->updateSupplier($_POST);
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
                <h3 class="text-center">All Suppliers</h3>
            </div>
            <table class="table table-sm table-striped">
                <thead class="bg-primary">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Contact Name</th>
                    <th>Contact</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Postal Code</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $n=1; ?>
                <?php
                while ($rows = $suppliers->fetch_assoc())
                {
                    ?>
                    <tr>
                        <td><?php echo $n++; ?></td>
                        <td><?php echo $rows['name']; ?></td>
                        <td><?php echo $rows['contact_name']; ?></td>
                        <td><?php echo $rows['contact']; ?></td>
                        <td><?php echo $rows['address']; ?></td>
                        <td><?php echo $rows['city']; ?></td>
                        <td><?php echo $rows['postal_code']; ?></td>
                        <td>
                            <a class="btn btn-primary" href="index.php?id=edit-supplier&sup_id=<?php echo $rows ['id']; ?>" ><span class="glyphicon glyphicon-edit"></span> </a>
                            <a class="btn btn-danger" href="index.php?id=delete-supplier&sup_id=<?php echo $rows ['id']; ?>" ><span class="glyphicon glyphicon-trash"></span> </a>
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
