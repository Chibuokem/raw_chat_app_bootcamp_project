<?php


require("chatdatabse.php");

$createtable="create table if not exists 
users(id int(11) 
auto_increment, 
primary key(id),
user_name varchar(225),
 Name text,
 password varchar(225),
  email varchar(225),
 image varchar(225))";
   
$sql = $db->query($createtable) or die($db->error);
if(isset($sql)){
	echo "users table creation successful.<br/>";
}
else{
	echo"users table was not created.<br/>";}

?>