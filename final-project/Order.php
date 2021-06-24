<?php

require_once 'Connection.php';
class Order
{
    public function save($data)
    {
        $con = new Connection();
        $customer_id = $data['customer_id'];
        $employee_id = $data['employee_id'];
        $order_date = $data['order_date'];
        $shipper_id = $data['shipper_id'];
        $sql = "INSERT INTO orders (customer_id,employee_id,order_date,shipper_id) VALUES ($customer_id,$employee_id,'$order_date','$shipper_id')";
        $result = mysqli_query($con->connect(),$sql);
        if($result===true)
        {
            $order_id = $this->getOrderID();
            return $order_id;
        }
        else{
            return "Saving Failed!";
        }
    }
    public function getCustomers()
    {
        $con = new Connection();
        $sql = "SELECT * FROM customers";
        $result = mysqli_query($con->connect(),$sql);
        return $result;
    }
    public function getEmployees()
    {
        $con = new Connection();
        $sql = "SELECT * FROM employees";
        $result = mysqli_query($con->connect(),$sql);
        return $result;
    }
    public function getOrderID()
    {
        $con = new Connection();
        $sql = "SELECT max(id) as id FROM orders";
        $result = mysqli_query($con->connect(),$sql);
        while($row = $result->fetch_assoc())
        {
            return $row['id'];
        }
    }
    public function getShippers()
    {
        $con = new Connection();
        $sql = "SELECT * FROM shippers";
        $result = mysqli_query($con->connect(),$sql);
        return $result;
    }
    public function getOrders()
    {
        $con = new Connection();
//        $sql = "SELECT * FROM orders";
        $sql = "SELECT o.id AS id, c.name AS customer, e.name AS employee, o.order_date AS order_date, s.name AS shipper FROM orders AS o INNER JOIN customers AS c ON o.customer_id=c.id INNER JOIN employees AS e ON o.employee_id=e.id INNER JOIN shippers AS s ON o.shipper_id=s.id";
        $result = mysqli_query($con->connect(),$sql);
        return $result;
    }
    public function deleteOrder($id)
    {
        $con = new Connection();
        $sql = "DELETE FROM orders WHERE id='$id'";
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