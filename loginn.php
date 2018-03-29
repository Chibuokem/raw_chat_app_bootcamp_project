<?php
session_start();
$server="localhost";
$username="root";
$password="";
$database="chatapp";
$connection=  new MySQLI($server,$username,$password,$database);

session_start();
 if (isset($_POST["submit"])){
 $username=$_POST["username"];
 $password=$_POST["password"];
  $_SESSION['username']= $row['username'];
   
	$query="SELECT * FROM users WHERE user_name=? AND password=? LIMIT 1";
   $statement=$connection->prepare($query);
  	$statement->bind_param("ss",$username,$password);
   $statement->execute();
   $statement->bind_result($id,$user_name,$Name,$password,$email,$image);
   if($statement->fetch()){
  
	header("location:chat.php");   
   }





	else{
		echo "login error";
	}
 }
?>

