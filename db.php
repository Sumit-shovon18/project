<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "librarymanagement";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
 
 return $conn;
 }
 function CheckUser($conn,$table,$username,$password)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username."' AND password='". $password."'");
 return $result;
 }


 function ShowAll($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
 return $result;
 }
 function ShowAllforUser($conn,$table,$username)
 {
$result = $conn->query("SELECT * FROM  $table WHERE `user_id` = '" .$username."'");
// print_r($result);
 return $result;
 }
 function ShowTopRatingBooks($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table WHERE `status` = 'In Stock' ORDER BY `rating` DESC LIMIT 8");
 return $result;
 }
 function ShowAllStockBooks($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table WHERE `status` = 'In Stock' ORDER BY `rating` DESC");
 return $result;
 }
function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>