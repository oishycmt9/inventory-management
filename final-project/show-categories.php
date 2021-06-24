<?php
require_once 'Category.php';

$message = '';
$category = new Category();
if(isset($_POST['btn']))
{
    $message = $category->updateCategory($_POST);
}
$categories = $category->getCategories();

?>
<!--<div class="well">-->
<!--    <h2 class="text-center text-success">-->
<!--        --><?php //echo $message; ?>
<!--    </h2>-->
<!--</div>-->
<!--<div class="panel-heading">-->
<!--    Add Category-->
<!--</div>-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel-heading">
                <h2 class="text-center text-success">
                    <?php echo $message; ?>
                </h2>
            </div>
            <div class="well">
                <h3 class="text-center">All Categories</h3>
            </div>
            <table class="table table-sm table-striped">
                <thead class="bg-primary">
                 <tr>
                     <th>ID</th>
                     <th>Name</th>
                     <th>Description</th>
                     <th>Action</th>
                 </tr>
                </thead>
                <tbody>
                <?php $n=1; ?>
                <?php
                while ($rows = $categories->fetch_assoc())
                {
                    ?>
                    <tr>
                    <td><?php echo $n++; ?></td>
                    <td><?php echo $rows['name']; ?></td>
                    <td><?php echo $rows['description']; ?></td>
                        <td>
                            <a class="btn btn-primary" href="index.php?id=edit-category&cat_id=<?php echo $rows['id']; ?>" ><span class="glyphicon glyphicon-edit"></span> </a>
                            <a class="btn btn-danger" href="index.php?id=delete-category&cat_id=<?php echo $rows['id']; ?>" ><span class="glyphicon glyphicon-trash"></span> </a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
