<?php
require_once 'OrderDetails.php';

$message = '';
$orderDetails = new OrderDetails();
$orders = $orderDetails->getOrders();
$products = $orderDetails->getProducts();

    if(isset($_POST['btn'])){
        $message = $orderDetails->save($_POST);
    }
?>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well">
                <h5 class="text-center text-success">
                    <?php echo $message; ?>
                </h5>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Add Product
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" method="post" action="">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="order_id">Order ID:</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="order_id" name="order_id" required>
                                    <option value="">--Select Order Id--</option>
                                    <?php
                                    while ($rows = $orders->fetch_assoc())
                                    {
                                    ?>
                                        <option value="<?php echo $rows['id']; ?>"><?php echo $rows['id']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="product_id">Product:</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="product_id" name="product_id" required>
                                    <option value="">--Select Product--</option>
                                    <?php
                                    while ($rows = $products->fetch_assoc())
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
                            <label class="control-label col-sm-2" for="quantity">Quantity:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="quantity" name="quantity" required>
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

