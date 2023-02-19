<?php
require_once 'Category.php';

$category = new Category();
$edit = $category->editCategory($_GET['cat_id']);

    $name = '';
    $description = '';
    $message = '';

        while($row = $edit->fetch_assoc()){
            $id = $row['id'];
            $name = $row['name'];
            $description = $row['description'];
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
                    Edit Category
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" action="index.php?id=show-categories" method="post" >
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="name">Name:</label>
                            <div class="col-sm-10">
                                <input type="hidden" class="form-control" id="id" value="<?php echo $id; ?>" name="id">
                                <input type="text" class="form-control" id="name" value="<?php echo $name; ?>" name="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="description">Description:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="description" name="description"><?php echo $description; ?> </textarea>
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