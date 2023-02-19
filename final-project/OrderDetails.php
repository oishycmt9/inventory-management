<?php
require_once 'Connection.php';

class OrderDetails{

    public function save($data){
        $con = new Connection();

        $order_id = $data['order_id'];
        $product_id = $data['product_id'];
        $quantity = $data['quantity'];

        $sql = "INSERT INTO order_details (order_id,product_id,quantity) VALUES ($order_id,$product_id,$quantity)";
        $result = mysqli_query($con->connect(),$sql);

            if($result===true){
                return "Saved Successfully!";
            }else{
                return "Saving Failed!";
            }
    }

    public function getOrders(){
        $con = new Connection();
        $sql = "SELECT * FROM orders ORDER BY id DESC ";
        $result = mysqli_query($con->connect(),$sql);
        return $result;
    }

    public function getProducts(){
        $con = new Connection();
        $sql = "SELECT * FROM products";
        $result = mysqli_query($con->connect(),$sql);
        return $result;
    }

    public function getDetails($id){
        $con = new Connection();
        $sql = "SELECT o.id AS id, o.order_id AS order_id, p.name AS product, o.quantity AS quantity FROM order_details AS o INNER JOIN products AS p ON o.product_id=p.id WHERE o.order_id=$id";
        $result = mysqli_query($con->connect(),$sql);
        return $result;
    }
}