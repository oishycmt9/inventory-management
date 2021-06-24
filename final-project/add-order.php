<?php
require_once 'Order.php';
$message = '';
$order = new Order();
if(isset($_POST['btn']))
{
    $message = $order->save($_POST);
}
$customers = $order->getCustomers();
$employees = $order->getEmployees();
$shippers = $order->getShippers();
?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well">
                <h5 class="text-center text-success">
                    <?php if($message!=null)
                    {
                       ?>
                        <a href="index.php?id=order-details">Add Product</a>
                    <?php
                    }
                    ?>
                </h5>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Add Order
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" method="post" action="">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="customer_id">Customer:</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="customer_id" name="customer_id" required>
                                    <option value="">--Select Customer--</option>
                                    <?php
                                    while ($rows = $customers->fetch_assoc())
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
                            <label class="control-label col-sm-2" for="employee_id">Employee:</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="employee_id" name="employee_id" required>
                                    <option value="">--Select Employee--</option>
                                    <?php
                                    while ($rows = $employees->fetch_assoc())
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
                            <label class="control-label col-sm-2" for="shipper_id">Shipper:</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="shipper_id" name="shipper_id" required>
                                    <option value="">--Select Shipper--</option>
                                    <?php
                                    while ($rows = $shippers->fetch_assoc())
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
                            <label class="control-label col-sm-2" for="order_date">Order Date:</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="order_date" name="order_date" required>
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

