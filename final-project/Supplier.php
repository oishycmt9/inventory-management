<?php
require_once 'Connection.php';

class Supplier{

    public function save($data){
        $con = new Connection();

        $name = $data['name'];
        $contact_name = $data['contact_name'];
        $contact = $data['contact'];
        $address = $data['address'];
        $city = $data['city'];
        $postal_code = $data['postal_code'];
        $country = $data['country'];

        $sql = "INSERT INTO suppliers (name,contact_name,contact, address, city, postal_code, country) VALUES('$name','$contact_name', '$contact', '$address', '$city', '$postal_code', '$country')";
        $result = mysqli_query($con->connect(),$sql);

            if($result===true){
                return "Successfully Saved";
            }else{
                return "Saving Failed!";
            }
    }

    public function getSuppliers(){
        $con = new Connection();
        $sql = "SELECT * FROM suppliers";
        $result = mysqli_query($con->connect(),$sql);
        return $result;
    }

    public function editSupplier($id){
        $con = new Connection();
        $sql = "SELECT * FROM suppliers WHERE id=$id";
        $result = mysqli_query($con->connect(),$sql);
        return  $result;
    }

    public function updateSupplier($row){
        $con = new Connection();

        $id = $row['id'];
        $name = $row['name'];
        $contact_name = $row['contact_name'];
        $contact = $row['contact'];
        $address = $row['address'];
        $city = $row['city'];
        $postal_code = $row['postal_code'];
        $country = $row['country'];

        $sql = "UPDATE suppliers SET name='$name',contact_name='$contact_name',contact='$contact',address='$address',city='$city',postal_code='$postal_code',country='$country' WHERE id='$id'";
        $result = mysqli_query($con->connect(),$sql);

            if($result===true){
                return "Successfully Updated";
            }else{
                return "Updating Failed!";
            }
    }

    public function deleteSupplier($id){
        $con = new Connection();
        $sql = "DELETE FROM suppliers WHERE id='$id'";
        $result = mysqli_query($con->connect(),$sql);

            if($result===true){
                return "Record Deleted Successfully!";
            }else{
                return "Error: Record is not Deleted!";
            }
    }
}