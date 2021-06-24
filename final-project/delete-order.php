<?php
require_once 'Order.php';
$message = '';
$order = new Order();
$delete = $order->deleteOrder($_GET['ord_id']);


?>
<?php echo $message; ?>
<a class="btn btn-primary" href="index.php?id=show-orders">Back to Order List</a>

