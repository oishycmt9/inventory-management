<?php
require_once 'Product.php';

$product = new Product();
$categories = $product->getCategories();
$suppliers = $product->getSuppliers();
$edit = $product->editProduct($_GET['pro_id']);

    $name = '';
    $supplier_id = '';
    $category_id = '';
    $unit = '';
    $price = '';
    $message = '';
        while($row = $edit->fetch_assoc()){
            $id = $row['id'];
            $name = $row['name'];
            $supplier_id = $row['supplier_id'];
            $category_id = $row['category_id'];
            $unit = $row['unit'];
            $price = $row['price'];

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
                    Edit Product
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" method="post" action="index.php?id=show-products">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="name">Name:</label>
                            <div class="col-sm-10">
                                <input type="hidden" class="form-control" id="id" value="<?php echo $id; ?>" name="id">
                                <input type="text" class="form-control" id="name" value="<?php echo $name; ?>" name="name">
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
                                        <option value="<?php echo $rows['id']; ?>" <?php echo $rows['id']==$supplier_id?'selected':''; ?> ><?php echo $rows['name']; ?></option>
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

                                        <option value="<?php echo $rows['id']; ?>" <?php echo $rows['id']==$category_id?'selected':''; ?>><?php echo $rows['name']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="unit">Unit:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="unit" placeholder="Enter Unit" name="unit" value="<?php echo $unit; ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="price">Price</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="price" placeholder="Enter Price" name="price" value="<?php echo $price; ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default" name="btn">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
