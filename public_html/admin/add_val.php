<?php
include('../config.php');
session_start();
 if($_SESSION['pass']&&$_SESSION['val']==1)
 {
     $cname=$_POST['car_name'];
     $ccata=$_POST['id_cata'];
     $ceng=$_POST['id_engine'];
     $ctype=$_POST['id_type'];
     $cprice=$_POST['car_price'];
     $clink=$_POST['car_link'];
     $conn = new mysqli($servername, $username, $password, $dbname);
     $sql = "INSERT INTO car (name,catagory,engine,type,price,link) VALUES ('$cname','$ccata','$ceng','$ctype','$cprice','$clink')";
$result = $conn->query($sql);
header("Location: ./insert.php");
$_SESSION['msge']='1 Car Sucessfully Inserted !';
$_SESSION['val']=0;
}
else
 {
    header("Location: ./");
 }
?>
