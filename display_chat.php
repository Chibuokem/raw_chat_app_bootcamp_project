<?php
$host = "localhost"; 
$user = "root";
$pass = ""; 
$db_name = "chatapp"; 

$con = new mysqli($host,$user,$pass,$db_name);

/*uche*/
       if(isset($_POST['msg'])){
		$name = $_POST['name'];
		$msg = $_POST['msg'];
		
		//$name = "uchechuwu";
		//$msg = "messaging";
		
		$time =  date("h:i:sa");
		$query = "INSERT INTO chat (sent_by,message,time_stamp) values ('$username','$msg','$time')";
		
		$run = $con->query($query);
		

	   }


$query = "SELECT * FROM chat ORDER BY id ASC";

	$run = $con->query($query);
	
	while($row = $run->fetch_array()) :
		?>
			<div id="chat_data">
				<span style="color:green;"><?php echo $row['sent_by']; ?></span> :
				<span style="color:brown;"><?php echo $row['message']; ?></span>
                <span style="color:#666; font-size:10px;"><?php echo $row['time_stamp']; ?></span>
				
			</div>
			<?php endwhile;?>


