<?php
require_once 'Category.php';
$message = '';
$category = new Category();
$delete = $category->deleteCategory($_GET['cat_id']);


?>
<?php echo $message; ?>
<a class="btn btn-primary" href="index.php?id=show-categories">Back to Category List</a>
