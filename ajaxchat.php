<?php 
session_start();


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
	//code for sending msg o db on click
	$("#sendchat").click(function(){
		//alert('uche');
		var mesg=$("#msgUC").val();
		var id=$('body').attr('id');
		
		//alert(msg)
		if(mesg.length>0){
		
			$.post("display_chat.php", {msg: mesg,idd:id} ,{})
			.done(function(data){
				
					
					$("#chat").html(data);
				
			});
		}
	});
	
	//code for always checking in 2s interval for any new msg
	
	setInterval(function(){ 
	
			$.post("display_chat.php")
			.done(function(data){
				
					
					$("#chat").html(data);
				
			});
	
	 },2000);
	
	
});

</script>


		
		
	
<link href="chatinterfacecss.css" type="text/css" rel="stylesheet">
<link href="bootstrap.css" type="text/css" rel="stylesheet"/> 
</head>

<body id='<?php echo $id ?>' onload="ajax();">


   <div class="wrapper">
   <div class="shape">3G0 Group chat</div>
   
  <div class="chat" id="chat_box">
    <div class="messages" id="chat">
     
    </div>
    <form method="post" action="javascript:;">
   <textarea id="msgUC" name="msg" placeholder="Message" class="form-control" ></textarea>
    <button class="button" type="submit" name="submit" id="sendchat" data-username="" data-id="">Send</button>
    </form>
  </div>
  <div class="footer"></div>
  </div>
  <?php 
		/*if(isset($_POST['submit'])){ 
		
		$name = $_POST['name'];
		$msg = $_POST['msg'];
		$time =  date("h:i:sa");
		$chatid=
		$query = "INSERT INTO chat (sent_by,message,time_stamp) values ('$username','$msg','$time')";
		
		$run = $con->query($query);
		
		if($run){
			echo "<embed loop='false' src='chat.wav' hidden='true' autoplay='true'/>";
		}
		
		
		}*/
		?>
</body>
</html>