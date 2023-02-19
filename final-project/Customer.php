<?php
require_once 'Connection.php';

class Customer{

    public function save($data){
        $con = new Connection();

        $name = $data['name'];
        $contact = $data['contact'];
        $address = $data['address'];
        $city = $data['city'];
        $postal_code = $data['postal_code'];
        $country = $data['country'];

        $sql = "INSERT INTO customers (name, contact, address, city, postal_code, country) VALUES('$name', '$contact', '$address', '$city', '$postal_code', '$country')";
        $result = mysqli_query($con->connect(),$sql);

            if($result===true)
            {
                return "Successfully Saved";
            }
            else{
                return "Saving Failed!";
            }
    }

    public function getCustomers(){
        $con = new Connection();

        $sql = "SELECT * FROM customers";
        $result = mysqli_query($con->connect(),$sql);
        return $result;
    }

    public function editCustomer($id){
        $con = new Connection();

        $sql = "SELECT * FROM customers WHERE id=$id";
        $result = mysqli_query($con->connect(),$sql);
        return  $result;
    }

    public function updateCustomer($row){
        $con = new Connection();

        $id = $row['id'];
        $name = $row['name'];
        $contact = $row['contact'];
        $address = $row['address'];
        $city = $row['city'];
        $postal_code = $row['postal_code'];
        $country = $row['country'];

        $sql = "UPDATE customers SET name='$name',contact='$contact',address='$address',city='$city',postal_code='$postal_code',country='$country' WHERE id='$id'";
        $result = mysqli_query($con->connect(),$sql);

        if($result===true){
            return "Successfully Updated";
        }else{
            return "Updating Failed!";
        }
    }

    public function deleteCustomer($id){
        $con = new Connection();
        $sql = "DELETE FROM customers WHERE id='$id'";
        $result = mysqli_query($con->connect(),$sql);

            if($result===true){
                return "Record Deleted Successfully!";
            }else{
                return "Error: Record is not Deleted!";
            }
    }
}