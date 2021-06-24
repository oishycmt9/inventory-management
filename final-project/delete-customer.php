<?php
require_once 'Customer.php';
$message = '';
$customer = new Customer();
$delete = $customer->deleteCustomer($_GET['cus_id']);


?>
<?php echo $message; ?>
<a class="btn btn-primary" href="index.php?id=show-customers">Back to Customer List</a>
