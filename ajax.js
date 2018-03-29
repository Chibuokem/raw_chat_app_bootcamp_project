// JavaScript Document
/*$(document).ready(function(){
 $("#pageload").click(function(){
	 $("#loadHere").load("load.php",function(responseTxt,statusTxt,xhr){
		 if(statusTxt=="success")
		 alert("external content loaded sucessfully");
		 if(statusTxt=="error")
		 alert("Error:"+xhr.status+":"+xhr.statusText);
	 });
 })
	 
});*/
	 
	 	
	
	
$(document).ready(function(){
	$("#sendchat").click(function(){
		var msg=$("#chatid").val();
		if(msg.length>0){
			$.get("serverPage.php",{message:msg},function(data,status){
				if(status=="success"){
					$("#seeChat").html(data);
				}
				else{
					alert("Network error , try again later");
				}
			})
		}
	})
})
