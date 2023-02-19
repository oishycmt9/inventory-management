<?php
require_once 'Supplier.php';

$supplier = new Supplier();
$edit = $supplier->editSupplier($_GET['sup_id']);

    $name = '';
    $contact_name = '';
    $contact = '';
    $address = '';
    $city = '';
    $postal_code = '';
    $country = '';
    $message = '';
        while($row = $edit->fetch_assoc()){
            $id = $row['id'];
            $name = $row['name'];
            $contact_name = $row['contact_name'];
            $contact = $row['contact'];
            $address = $row['address'];
            $city = $row['city'];
            $postal_code = $row['postal_code'];
            $country = $row['country'];
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
                    Edit Supplier
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" method="post" action="index.php?id=show-suppliers">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="name">Name:</label>
                            <div class="col-sm-10">
                                <input type="hidden" class="form-control" id="id" value="<?php echo $id; ?>" name="id">
                                <input type="text" class="form-control" id="name" value="<?php echo $name; ?>" name="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="contact_name">Contact Name:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="contact_name" placeholder="Enter Contact Name" name="contact_name" value="<?php echo $contact_name; ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="contact">Contact:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="contact" placeholder="Enter Contact" name="contact" value="<?php echo $contact; ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="address">Address:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address" value="<?php echo $address; ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="city">City:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="city" placeholder="Enter City" name="city" value="<?php echo $city; ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="postal_code">Postal Code:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="postal_code" placeholder="Enter Postal Code" name="postal_code" value="<?php echo $postal_code; ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="country">Country:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="country" placeholder="Enter Country" name="country" value="<?php echo $country; ?>" required>
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
