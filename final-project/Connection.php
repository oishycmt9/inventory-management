<?php

class Connection
{
    public function connect()
    {
        $con = mysqli_connect('localhost','root','','cmpi_stock');
        return $con;
    }
}