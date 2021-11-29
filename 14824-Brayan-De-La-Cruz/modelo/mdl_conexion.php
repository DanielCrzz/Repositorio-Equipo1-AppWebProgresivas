<?php
class conexion{
    public function connect_db(){
        $con = mysqli_connect("localhost","root","root","proyectoweb");
        $con -> set_charset("UTF8");
        return $con;
    }
}
?>