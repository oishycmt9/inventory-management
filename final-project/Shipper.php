<?php
require_once 'Connection.php';

class Shipper{

    public function save($data){
        $con = new Connection();

        $name = $data['name'];
        $phone = $data['phone'];

        $sql = "INSERT INTO shippers (name,phone) VALUES('$name','$phone')";
        $result = mysqli_query($con->connect(),$sql);

            if($result===true){
                return "Successfully Saved";
            }else{
                return "Saving Failed!";
            }
    }

    public function getShippers(){
        $con = new Connection();
        $sql = "SELECT * FROM shippers";
        $result = mysqli_query($con->connect(),$sql);
        return $result;
    }

    public function editShipper($id){
        $con = new Connection();
        $sql = "SELECT * FROM shippers WHERE id=$id";
        $result = mysqli_query($con->connect(),$sql);
        return  $result;
    }

    public function updateShipper($row){
        $con = new Connection();

        $id = $row['id'];
        $name = $row['name'];
        $phone = $row['phone'];

        $sql = "UPDATE shippers SET name='$name',phone='$phone' WHERE id='$id'";
        $result = mysqli_query($con->connect(),$sql);
            if($result===true){
                return "Successfully Updated";
            }else{
                return "Updating Failed!";
            }
    }
    
    public function deleteShipper($id){
        $con = new Connection();
        $sql = "DELETE FROM shippers WHERE id='$id'";
        $result = mysqli_query($con->connect(),$sql);

            if($result===true){
                return "Record Deleted Successfully!";
            }else{
                return "Error: Record is not Deleted!";
            }
    }
}