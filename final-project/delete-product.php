<?php
require_once 'Product.php';
$message = '';
$product = new Product();
$delete = $product->deleteProduct($_GET['pro_id']);


?>
<?php echo $message; ?>
<a class="btn btn-primary" href="index.php?id=show-products">Back to Product List</a>
