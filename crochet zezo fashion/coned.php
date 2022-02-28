<?php

$dns = "mysql:host=localhost;dbname=shop_db";
$user = "root";
$password = "";

$option = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
);

try{
    $con = new PDO($dns , $user , $password , $option);
    $con->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
    echo "";
}


catch(PDOException $e){
    echo "فشل في الاتصال " .$e->getMessage();
}

?>