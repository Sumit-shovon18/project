<?php
include('db.php');
session_start(); 

 $error="";
// store session data
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
$username=$_POST['username'];
$password=$_POST['password'];

$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUser($conobj,"admin",$username,$password);
if ($userQuery->num_rows > 0) {
 
  $_SESSION['username']=$_POST['username'];
  $_SESSION['password']=$_POST['password'];
  if(isset($_SESSION['username'])){
    header("location: Admin/admin.php");
    }
   }
 else {
  $userQuery=$connection->CheckUser($conobj,"student",$username,$password);
  if ($userQuery !== false && $userQuery->num_rows > 0) {
 
    $_SESSION['username']=$_POST['username'];
    $_SESSION['password']=$_POST['password'];
    if(isset($_SESSION['username'])){
      header("location: student.php");
      }
     }
     else {
      $userQuery=$connection->CheckUser($conobj,"librarian",$username,$password);
      if ($userQuery !== false && $userQuery->num_rows > 0) {
     
        $_SESSION['username']=$_POST['username'];
        $_SESSION['password']=$_POST['password'];
        if(isset($_SESSION['username'])){
          header("location: librarian.php");
          }
         }
         else {
          $userQuery=$connection->CheckUser($conobj,"faculty",$username,$password);
          if ($userQuery !== false && $userQuery->num_rows > 0) {
         
            $_SESSION['username']=$_POST['username'];
            $_SESSION['password']=$_POST['password'];
            if(isset($_SESSION['username'])){
              header("location: Faculty/Home.php");
              }
             }
            }
        }
     

$error = "Username or Password is invalid";
}
$connection->CloseCon($conobj);

}
}


?>
