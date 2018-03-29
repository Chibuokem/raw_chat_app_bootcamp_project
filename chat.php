<?php 
session_start();
if(!isset($_SESSION['username'])){
header("Location:login1.php");	
}

if(isset($_SESSION['username'])){
  $username=$_SESSION['username'];	
}
$host = "localhost"; 
$user = "root";
$pass = ""; 
$db_name = "chatapp"; 

$con = new mysqli($host,$user,$pass,$db_name);

function formatDate($date){
	return date('g:i a', strtotime($date));
}
?>

<!doctype html>
<html>
<head>
<script src="jquery-3.1.1.min.js" type="text/javascript"></script>
<meta charset="utf-8">
<title>Team A chat</title>
<script>

 $(document).ready(function(){
	$('#chat').scrollTo(0,0);
	
});
		function ajax(){
		
		var req = new XMLHttpRequest();
		
		req.onreadystatechange = function(){
		
		if(req.readyState == 4 && req.status == 200){
		
		document.getElementById('chat').innerHTML = req.responseText;
		} 
		}
		req.open('GET','display_chat.php',true); 
		req.send();
		
		}
		setInterval(function(){ajax()},1000);
		
		
		
		
	</script>
<link href="chatinterfacecss.css" type="text/css" rel="stylesheet">
<link href="bootstrap.css" type="text/css" rel="stylesheet"/> 
</head>

<body onload="ajax();">


   <div class="wrapper">
   <div class="shape">3G0 Group chat</div>
   
  <div class="chat" id="chat_box">
    <div class="messages" id="chat">
     
    </div>
    <form method="post" action="chat.php">
   <textarea name="msg" placeholder="Message" class="form-control" ></textarea>
    <button class="button" type="submit" name="submit">Send</button>
    </form>
  </div>
  <div class="footer"></div>
  </div>
  <?php 
		if(isset($_POST['submit'])){ 
		
		$name = $_POST['name'];
		$msg = $_POST['msg'];
		$time =  date("h:i:sa");
		$chatid=
		$query = "INSERT INTO chat (sent_by,message,time_stamp) values ('$username','$msg','$time')";
		
		$run = $con->query($query);
		
		if($run){
			echo "<embed loop='false' src='chat.wav' hidden='true' autoplay='true'/>";
		}
		
		
		}
		?>
</body>
</html>