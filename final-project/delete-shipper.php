<?php
require_once 'Shipper.php';
$message = '';
$shipper = new Shipper();
$delete = $shipper->deleteShipper($_GET['shi_id']);


?>
<?php echo $message; ?>
<a class="btn btn-primary" href="index.php?id=show-shippers">Back to Shipper List</a>
