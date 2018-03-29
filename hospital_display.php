<?php
$db_host='localhost';
$db_user='root';
$db_pass='';
$db_name='hospital';
$db= mysqli_connect("$db_host","$db_user","$db_pass","$db_name") or die("cannot connect to database");

if($db->connect_error>0)
{
	die($db->connect_error);
}




session_start();

	$user_id=$_SESSION["id"];
/*if(!isset($_SESSION["id"])){
	header("location:index.php");
	
}*/

$result=$db->query("SELECT * FROM users ORDER BY DESC LIMIT 1" ) or die ($db->error);
$count=0;
while ($row=$result->fetch_assoc())
{
	
	$customer_name[]=$row['customer_name'];
	$email[]=$row['email'];
	$address[]=$row['address'];
	$phone_number[]=$row["phone"];
	$picture_ref[]=$row['picture'];
	$count++;
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="bootstrap.css" rel="stylesheet" type="text/css">
<link href="shop.css" rel="stylesheet" type="text/css">
<title>PROFILE</title>
</head>
<body >

<div class="container">
	<div class="jumbotron">
    	<h1 class="text-center">Profile</h1>
    </div>
           <div class="row  tablee ">
            <table  border="2" class="tablee table table-bordered" >
               
               <thead>
                <tr>
                    <th><h4>Name</h4></th>
                    <th><h4>Phone Number</h4></th>
                    <th><h4>Email</h4></th>
                    <th><h4>Address</h4></th>
                    <th><h4>Picture</h4></th>
                    </thead>
                    <tbody>
                <?php for($i=0;$i<$count;$i++){?>
               <tr>
               <td> <?php  echo $customer_name[$i];  ?>  </td>
               <td>
               <?php
                 echo $phone_number[$i];
               ?>
               </td>
               <td>
               <?php
                 echo $email[$i];
               ?>
               </td>
               <td>
               <?php
                 echo $address[$i];
               ?>
               </td>
               <td>
               <img src="<?php echo $picture_ref[$i];?>" width="100";>
               </td>
                <?php }?>
                </tr>
               </tbody>
            </div> 
 </div>
</body>
</html>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Profile</title>
<link href="bootstrap.css" rel="stylesheet" type="text/css">
<link href="shop.css" rel="stylesheet" type="text/css">
</head>

<body>
</body>
</html>