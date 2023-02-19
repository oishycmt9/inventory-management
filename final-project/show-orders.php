<?php
require_once 'Order.php';

$message = '';
$order = new Order();
$orders = $order->getOrders();
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well">
                <h3 class="text-center">All Orders</h3>
            </div>
            <table class="table table-sm table-striped">
                <thead class="bg-primary">
                <tr>
                    <th>ID</th>
                    <th>Customer</th>
                    <th>Employee</th>
                    <th>Order Date</th>
                    <th>Shipper</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $n=1; ?>
                <?php
                while ($rows = $orders->fetch_assoc())
                {
                    ?>
                    <tr>
                        <td><?php echo $n++; ?></td>
                        <td><?php echo $rows['customer']; ?></td>
                        <td><?php echo $rows['employee']; ?></td>
                        <td><?php echo $rows['order_date']; ?></td>
                        <td><?php echo $rows['shipper']; ?></td>
                        <td><a href="index.php?id=show-details&oid=<?php echo $rows['id']; ?>" >Order Details</a>
                        <a class="btn btn-danger" href="index.php?id=delete-order&ord_id=<?php echo $rows['id']; ?>" ><span class="glyphicon glyphicon-trash"></span></a></td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
