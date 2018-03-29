<?php


require("chatdatabse.php");

$createtable="create table if not exists 
chat(id int(11) 
auto_increment, 
primary key(id),
message text,
 username varchar(225),
 sent_to varchar(225),
  sent_by varchar(225),
 time_stamp varchar(225),
status varchar(225) )";
   
$sql = $db->query($createtable) or die($db->error);
if(isset($sql)){
	echo "chat table creation successful.<br/>";
}
else{
	echo"chat table was not created.<br/>";}

?>