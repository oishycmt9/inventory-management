<?php
require_once 'Employee.php';

$employee = new Employee();
$edit = $employee->editEmployee($_GET['emp_id']);

    $name = '';
    $contact = '';
    $dob = '';
    $photo_url = '';
    $notes = '';
    $message = '';
        while($row = $edit->fetch_assoc()){
            $id = $row['id'];
            $name = $row['name'];
            $contact = $row['contact'];
            $dob = $row['dob'];
            $photo_url = $row['photo_url'];
            $notes = $row['notes'];

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
                    Edit Employee
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" method="post" action="index.php?id=show-employees" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="name">Name:</label>
                            <div class="col-sm-10">
                                <input type="hidden" class="form-control" id="id" value="<?php echo $id; ?>" name="id">
                                <input type="text" class="form-control" id="name" value="<?php echo $name; ?>" name="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="contact">Contact:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="contact" placeholder="Enter Contact" name="contact" value="<?php echo $contact; ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="dob">Date of Birth:</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="dob" name="dob" value="<?php echo $dob; ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="photo_url">Photo:</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control-file" id="photo_url" name="photo_url" autocomplete="photo_url">
                                <img src="<?php echo $photo_url; ?>" style="height: 40px; width: 40px; border-radius: 50%;">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="notes">Notes:</label>
                            <div class="col-sm-10">
                                <textarea type="text" class="form-control" id="notes" placeholder="Enter Employee Details" name="notes"  required><?php echo $notes; ?></textarea>
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
