<?php
 $uname=$_POST['user_name'];
 $pass=$_POST['password'];
 if($pass=='get123#qw'&&$uname=='admin')
 {
     session_start();
     $_SESSION['pass']=$pass;
     $_SESSION['msge']='Login Sucessfull !';
     header("Location: ./insert.php");
 }
  else
 {
    header("Location: ./");
 }
?>
