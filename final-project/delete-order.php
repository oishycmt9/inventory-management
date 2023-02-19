<?php
require_once 'Order.php';

$order = new Order();
$delete = $order->deleteOrder($_GET['ord_id']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="well">
        <h2 class="text-center text-success">
            <?php echo $delete; ?>
        </h2>
    </div>
    
    <a class="btn btn-primary" href="index.php?id=show-orders">Back to Order List</a>
</body>
</html>


