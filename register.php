<?php
require("chatdatabse.php");
session_start();
 if(isset($_POST["submit"])){
		$name=$_POST["name"];
		$username=$_POST["username"];
		$email=$_POST["email"];
		$password=$_POST["password"];
		$password2=$_POST["password2"];
		
		 $_SESSION['username']=$username;
			
			
			
			$check="INSERT INTO users(Name,user_name,email,password)
	 VALUES('$name','$username','$email','$password')";
	// die($check);
	     
	$sql = $db->query($check) or die($db->error.' issues');
	 if(isset($sql)){
		 header("location:chat.php");
		 
	 }
		 		 
	
		 
		 else{
		echo "Registration failed"."<br/>";
		 }
	
		
 }
			
			
					
		
		
		
		
	






?>


