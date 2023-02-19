<?php
require_once 'OrderDetails.php';
$orderDetails = new OrderDetails();
$details = $orderDetails->getDetails($_GET['oid']);
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well">
                <h3 class="text-center">Orders Details</h3>
            </div>
            <table class="table table-sm table-striped">
                <thead class="bg-primary">
                <tr>
                    <th>ID</th>
                    <th>Order ID</th>
                    <th>Product</th>
                    <th>Quantity</th>
                </tr>
                </thead>
                <tbody>
                <?php
                while ($rows = $details->fetch_assoc())
                {
                    ?>
                    <tr>
                        <td><?php echo $rows['id']; ?></td>
                        <td><?php echo $rows['order_id']; ?></td>
                        <td><?php echo $rows['product']; ?></td>
                        <td><?php echo $rows['quantity']; ?></td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
