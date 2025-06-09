<?php 
session_start();

$user="root";
$pass="";
$server="localost";
$dbname="testtdb";

try{
    $conn=new PDO("mysql:hosy=$server;dbname=$dbname",$user,$pass);
}catch(PDOException $e){
    echo "error:" . $e->getMessage();
}
?>