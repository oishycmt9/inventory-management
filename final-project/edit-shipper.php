<?php
require_once 'Shipper.php';

$shipper = new Shipper();
$edit = $shipper->editShipper($_GET['shi_id']);

    $name = '';
    $phone = '';
    $message = '';
        while($row = $edit->fetch_assoc()){
            $id = $row['id'];
            $name = $row['name'];
            $phone = $row['phone'];
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
                    Edit Shipper
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" method="post" action="index.php?id=show-shippers">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="name">Name:</label>
                            <div class="col-sm-10">
                                <input type="hidden" class="form-control" id="id" value="<?php echo $id; ?>" name="id">
                                <input type="text" class="form-control" id="name" value="<?php echo $name; ?>" name="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="phone">Phone:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="phone" placeholder="Enter Phone" name="phone" value="<?php echo $phone; ?>" required>
                            </div>
                        </div>
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default" name="btn">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>