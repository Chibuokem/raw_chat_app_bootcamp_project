// JavaScript Document
$(document).ready(function(){
	$(".myclass").css("background-color","black");
	
});
$(document).ready(function(){
	$("#me").css("background-color","green");
	
});
$(document).ready(function(){
	$("h1").css("background-color","red");
	
});

$(document).ready(function(){
	var title=$("#cauchy").attr("id");
	$(".buokem").text(title);
});

$(document).ready(function(){
	var title=$("#fbk").attr("href");
	alert(title);
});

$(document).ready(function(){
	/*$(".onyia").attr("id","village");
	
	if($("#header").hasClass("head")){
	  alert ("yes");	
	}
	else{
	  alert("no");	
	}*/
	$("li").eq(0).text("cauchy is wonderful");
	//to filer and get a div with a particullar class
	$("div").filter(".buokem").text("this is the buokem div");
	
});
$/*<!--(document).ready(function(){
	$("#onyi").addClass("class","new");
	$("#onyi").removeAttr("class");-->*/
	
	function myfunction(){
		var message=$("#msg").val();
			$(".undersubmit").text(message);
		
	}
	
	$(document).keypress(function(e) {
    if(e.which == 13) {			//enter key function
		var message=$("#msg").val();
			alert(message);
        
    }
});

//to find something through a div
$("p").find("span").addClass("selected");


$(document).ready(function(){
	
	var div=$("div").filter(".same");
	div.css("background-color","yellow");
	
	var divv=$("div").not(".same");
	divv.css("background-color","orange");
	
	var first=$("ul").first().text("cauchy is really wondeful");
	var firstt=$("ul").last().text("cauchy is really wondeful last");
	
	var first=$("ul").first().text("cauchy is really wondeful");
	
	$(".styling").css({"color":"red","background-color":"green","height":"200px"});
	//$(".same").
	window.onscroll=function(){
		if($(window).scrollTop()>=30){
			alert('cauchy is wonderful');
		}
	}
	
	$('div').click(function(){
		
		
	}
	
});

