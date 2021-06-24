<?php
require_once 'Connection.php';
class Category
{
    public function save($data)
    {
        $con = new Connection();
        $name = $data['name'];
        $description = $data['description'];
        $sql = "INSERT INTO categories (name,description) VALUES('$name','$description')";
        $result = mysqli_query($con->connect(),$sql);
        if($result===true)
        {
            return "Successfully Saved";
        }
        else{
            return "Saving Failed!";
        }
    }
    public function getCategories()
    {
        $con = new Connection();
        $sql = "SELECT * FROM categories";
        $result = mysqli_query($con->connect(),$sql);
        return $result;
    }
    public function editCategory($id)
    {
        $con = new Connection();
        $sql = "SELECT * FROM categories WHERE id=$id";
        $result = mysqli_query($con->connect(),$sql);
        return  $result;
    }
    public function updateCategory($row)
    {
        $con = new Connection();
        $id = $row['id'];
        $name = $row['name'];
        $description = $row['description'];
        $sql = "UPDATE categories SET name='$name',description='$description' WHERE id='$id'";
        $result = mysqli_query($con->connect(),$sql);
        if($result===true)
        {
            return "Successfully Updated";
        }
        else{
            return "Updating Failed!";
        }
    }
    public function deleteCategory($id)
    {
        $con = new Connection();
        $sql = "DELETE FROM categories WHERE id='$id'";
        $result = mysqli_query($con->connect(),$sql);
        if($result===true)
        {
            echo "<h1 class='text-success text-center'>Record Deleted Successfully!</h1>";
        }
        else{
            echo "Error: ";
        }

    }

}