<?php
class Connection{

    public function connect(){
        $con = mysqli_connect('localhost','root','','stock');
        return $con;
    }
}