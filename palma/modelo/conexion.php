<?php
//Es la conexion con la BD, hasta el dia 02/28 a las 14:52 funciona
$conexion=new mysqli ("localhost","root", "", "comercial","3306");
$conexion->set_charset("utf8");

if ($conexion->connect_errno ){
    die("mal" .$conexion->connect_errno);
} else{
    echo"";
}
?>