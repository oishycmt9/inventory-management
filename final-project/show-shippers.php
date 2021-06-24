<?php
require_once 'Shipper.php';

$message = '';
$shipper = new Shipper();
if(isset($_POST['btn']))
{
    $message = $shipper->updateShipper($_POST);
}
$shippers = $shipper->getShippers();
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel-heading">
                <h2 class="text-center text-success">
                    <?php echo $message; ?>
                </h2>
            </div>
            <div class="well">
                <h3 class="text-center">All Shippers</h3>

            </div>
            <table class="table table-sm table-striped">
                <thead class="bg-primary">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $n=1; ?>
                <?php
                while ($rows = $shippers->fetch_assoc())
                {
                    ?>
                    <tr>
                        <td><?php echo $n++; ?></td>
                        <td><?php echo $rows['name']; ?></td>
                        <td><?php echo $rows['phone']; ?></td>
                        <td>
                            <a class="btn btn-primary" href="index.php?id=edit-shipper&shi_id=<?php echo $rows ['id']; ?>" ><span class="glyphicon glyphicon-edit"></span> </a>
                            <a class="btn btn-danger" href="index.php?id=delete-shipper&shi_id=<?php echo $rows ['id']; ?>" ><span class="glyphicon glyphicon-trash"></span> </a>
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
