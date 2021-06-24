<?php
require_once 'Product.php';

$message = '';
$product = new Product();
if(isset($_POST['btn']))
{
    $message = $product->updateProduct($_POST);
}
$products = $product->getProducts();
?>
<div class="container">
    <div class="row">
        <div class="col-md-11">
            <div class="panel-heading">
                <h2 class="text-center text-success">
                    <?php echo $message; ?>
                </h2>
            </div>
            <div class="well">
                <h3 class="text-center">All Products</h3>
            </div>
            <table class="table table-sm table-striped">
                <thead class="bg-primary">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Supplier ID</th>
                    <th>Category ID</th>
                    <th>Unit</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $n=1; ?>
                <?php
                while ($rows = $products->fetch_assoc())
                {
                    ?>
                    <tr>
                        <td><?php echo $n++; ?></td>
                        <td><?php echo $rows['name']; ?></td>
                        <td><?php echo $rows['supplier_id']; ?></td>
                        <td><?php echo $rows['category_id']; ?></td>
                        <td><?php echo $rows['unit']; ?></td>
                        <td><?php echo $rows['price']; ?></td>
                        <td>
                            <a class="btn btn-primary" href="index.php?id=edit-product&pro_id=<?php echo $rows ['id']; ?>" ><span class="glyphicon glyphicon-edit"></span> </a>
                            <a class="btn btn-danger" href="index.php?id=delete-product&pro_id=<?php echo $rows ['id']; ?>" ><span class="glyphicon glyphicon-trash"></span> </a>
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
