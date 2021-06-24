<?php

require_once 'Supplier.php';

$message = '';
if(isset($_POST['btn']))
{
    $supplier = new Supplier();
    $message = $supplier->save($_POST);
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
                    Add Supplier
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
                            <label class="control-label col-sm-2" for="contact_name">Contact Name:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="contact_name" placeholder="Enter Contact Name" name="contact_name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="contact">Contact:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="contact" placeholder="Enter Contact" name="contact" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="address">Address:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="city">City:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="city" placeholder="Enter City" name="city" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="postal_code">Postal Code:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="postal_code" placeholder="Enter Postal Code" name="postal_code" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="country">Country:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="country" placeholder="Enter Country" name="country" required>
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