<?php
require_once 'Shipper.php';
$message = '';
if(isset($_POST['btn']))
{
//    return print_r($_POST);
    $shipper = new Shipper();
    $message = $shipper->save($_POST);
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
                    Add Shipper
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
                            <label class="control-label col-sm-2" for="phone">Phone:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="phone" placeholder="Enter Phone" name="phone" required>
                            </div>
                        </div>
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default" name="btn">Save</button>
                        </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>


