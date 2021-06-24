<?php
require_once 'Supplier.php';
$message = '';
$supplier = new Supplier();
$delete = $supplier->deleteSupplier($_GET['sup_id']);


?>
<?php echo $message; ?>
<a class="btn btn-primary" href="index.php?id=show-suppliers">Back to Supplier List</a>
