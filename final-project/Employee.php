<?php

require_once 'Connection.php';
class Employee
{
    public function save($data, $files)
    {
        $con = mysqli_connect('localhost','root','','cmpi_stock');
        $name = $data['name'];
        $contact = $data['contact'];
        $dob = $data['dob'];
        $target_dir = "assets/images/";
        $target_file = $target_dir . basename($_FILES["photo_url"]["name"]);
        if($files['photo_url'])
        {
            move_uploaded_file($files["photo_url"]["tmp_name"], $target_file);
        }
        $photo_url = $target_dir.$files['photo_url'] ['name'];
        $notes = $data['notes'];
        $sql = "INSERT INTO employees (name, contact, dob, photo_url, notes) VALUES('$name', '$contact', '$dob', '$photo_url', '$notes')";
        $result = mysqli_query($con,$sql);

        if($result===true)
        {
            return "Successfully Saved";
        }
        else{
            return "Saving Failed!".$con->error;
        }
    }
    public function getEmployees()
    {
        $con = new Connection();
        $sql = "SELECT * FROM employees";
        $result = mysqli_query($con->connect(),$sql);
        return $result;
    }
    public function editEmployee($id)
    {
        $con = new Connection();
        $sql = "SELECT * FROM employees WHERE id=$id";
        $result = mysqli_query($con->connect(),$sql);
        return  $result;
    }
    public function updateEmployee($row,$files)
    {
        $con = new Connection();
        $id = $row['id'];
        $name = $row['name'];
        $contact = $row['contact'];
        $dob = $row['dob'];
        $target_dir = "assets/images/";
        $target_file = $target_dir . basename($_FILES["photo_url"]["name"]);
        $notes = $row['notes'];
        $photo_url ='';
        $sql = '';
        if($files['photo_url']['name']!=null)
        {
            //return "if";
            move_uploaded_file($files["photo_url"]["tmp_name"], $target_file);
            $photo_url = $target_dir.$files['photo_url'] ['name'];
            $sql = "UPDATE employees SET name='$name',contact='$contact',dob='$dob',photo_url='$photo_url',notes='$notes' WHERE id='$id'";
        }
        else{
            //return "else";
            $sql = "UPDATE employees SET name='$name',contact='$contact',dob='$dob',notes='$notes' WHERE id='$id'";
        }
        //$sql = "UPDATE employees SET name='$name',contact='$contact',dob='$dob',photo_url='$photo_url',notes='$notes' WHERE id='$id'";
        $result = mysqli_query($con->connect(),$sql);

        if($result===true)
        {
            return "Successfully Updated";
        }
        else{
            return "Updating Failed!";
        }
    }
    public function deleteEmployee($id)
    {
        $con = new Connection();
        $sql = "DELETE FROM employees WHERE id='$id'";
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