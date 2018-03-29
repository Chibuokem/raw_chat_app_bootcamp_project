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




<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="bootstrap.css" rel="stylesheet" type="text/css">
</head>

<body>
			<div class="container">
                    <div class="row">
                        <nav class="navbar ">
                        <a href="index.php">Home</a>
                        <a href="login.php">Login</a>
                        
                        </nav>
                     <div class="row" >
                     	<div class="jumbotron">
                        <h1 class="text-center">Welcome to TEAM A'S Chat app</h1>
                        </div>
                     </div> 
                     <div class="row">
                     	<div class="col-md-5">
                        <h3>Registration</h3>
                        </div>
                     </div> 
                     <div class="row">
                     	<div class="col-md-12">
                          <form  method="POST"   >
                            <input type="text" name="name" class="form-control" placeholder="Enter your name" required/><br/>
                              <input type="text" name="username" class="form-control" placeholder="Enter your username"  required/><br/>
                                 
                                 <input type="email" name="email" class="form-control" placeholder="Enter your Email Address"><br/>
                                 <input type="password" name="password" class="form-control" placeholder="Enter your password" required><br/>
                                 <input type="password" name="password2" class="form-control" placeholder="Confirm your password"required><br/>
                                 <input type="submit" name="submit" class="btn btn-primary" value="Register">
                            </form>
                        </div>
                     </div>
                        
                    </div>
            
            
            
            
            
            
            </div>
</body>
</html>