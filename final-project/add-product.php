<?php
require_once 'Product.php';

$message = '';

$product = new Product();
$categories = $product->getCategories();
$suppliers = $product->getSuppliers();

    if(isset($_POST['btn'])){
        $message = $product->save($_POST);
    }
?>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well">
                <h2 class="text-center text-success">
                    <?php echo $message; ?>
                </h2>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Add Product
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" method="post" action="">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="name">Name:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="supplier_id">Supplier:</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="supplier_id" name="supplier_id" required>
                                    <option value="">--Select Supplier--</option>
                                    <?php
                                    while ($rows = $suppliers->fetch_assoc())
                                    {
                                    ?>
                                    <option value="<?php echo $rows['id']; ?>"><?php echo $rows['name']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="category_id">Category:</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="category_id" name="category_id" required>
                                    <option value="">--Select Category--</option>
                                    <?php
                                    while ($rows = $categories->fetch_assoc())
                                    {
                                    ?>
                                        <option value="<?php echo $rows['id']; ?>"><?php echo $rows['name']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="unit">Unit:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="unit" placeholder="Enter Unit" name="unit" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="price">Price</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="price" placeholder="Enter Price" name="price" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default" name="btn">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>