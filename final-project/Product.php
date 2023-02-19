<?php
require_once 'Connection.php';

class Product{

    public function save($data){
        $con = new Connection();

        $name = $data['name'];
        $supplier_id = $data['supplier_id'];
        $category_id = $data['category_id'];
        $unit = $data['unit'];
        $price = $data['price'];

        $sql = "INSERT INTO products (name, supplier_id, category_id, unit, price) VALUES('$name', '$supplier_id', '$category_id', '$unit', '$price')";
        $result = mysqli_query($con->connect(),$sql);

            if($result===true){
                return "Successfully Saved";
            }else{
                return "Saving Failed!";
            }
    }

    public function getCategories(){
        $con = new Connection();
        $sql = "SELECT * FROM categories";
        $result = mysqli_query($con->connect(),$sql);
        return $result;
    }

    public function getSuppliers(){
        $con = new Connection();
        $sql = "SELECT * FROM suppliers";
        $result = mysqli_query($con->connect(),$sql);
        return $result;
    }

    public function getProducts(){
        $con = new Connection();
        $sql = "SELECT * FROM products";
        $result = mysqli_query($con->connect(),$sql);
        return $result;
    }

    public function editProduct($id){
        $con = new Connection();
        $sql = "SELECT * FROM products WHERE id=$id";
        $result = mysqli_query($con->connect(),$sql);
        return  $result;
    }

    public function updateProduct($row){
        $con = new Connection();

        $id = $row['id'];
        $name = $row['name'];
        $supplier_id = $row['supplier_id'];
        $category_id = $row['category_id'];
        $unit = $row['unit'];
        $price = $row['price'];

        $sql = "UPDATE products SET name='$name',supplier_id='$supplier_id',category_id='$category_id',unit='$unit',price='$price' WHERE id='$id'";
        $result = mysqli_query($con->connect(),$sql);

            if($result===true){
                return "Successfully Updated";
            }else{
                return "Updating Failed!";
            }
    }
    
    public function deleteProduct($id){
        $con = new Connection();
        $sql = "DELETE FROM products WHERE id='$id'";
        $result = mysqli_query($con->connect(),$sql);

            if($result===true){
                return "Record Deleted Successfully!";
            }else{
                return "Error: Record is not Deleted!";
            }
    }
}