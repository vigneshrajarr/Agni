$("#preloader").show();

$(document).ready(function(){
	setTimeout(function(){
		$("#preloader").fadeOut();
		$("#container").fadeIn();
	$("#overlay").show();
	$("#preloader").hide();
	$(".description").hide();
    $(".vertical_div").mouseover(function(){
		$(this).css("-webkit-filter","grayscale(0%)");
		$(this).css("filter","grayscale(0%)");
		$(".vertical_div").css("-webkit-filter","grayscale(0%)");
		$(this).children().next().children().children().next().slideDown("fast");
		//$(this).children().css("background-color","rgba(0,0,0,0.4)");
	});
	//form
	$("#elementname").hide();
	$("#elementc_password").hide();
	$("#elementphone").hide();
	$("#elementroll").hide();
	$("#elementdep").hide();
	$("#elementbatch").hide();
	$("#loginalert").hide();
	$("#registerbutton").hide();
	$("#registeralert").click(function(){
		$("#elementname").slideDown();
		$("#elementc_password").slideDown();
		$("#elementphone").slideDown();
		$("#elementroll").slideDown();
		$("#elementdep").slideDown();
		$("#elementbatch").slideDown();
		$("#lineModalLabel").text("Sign Up");
		$("#registeralert").hide();
		$("#registerbutton").show();
		$("#loginalert").show();
		$("#loginbutton").hide();
	});
	$("#loginalert").click(function(){
		$("#elementname").slideUp();
		$("#elementc_password").slideUp();
		$("#elementphone").slideUp();
		$("#elementroll").slideUp();
		$("#elementdep").slideUp();
		$("#elementbatch").slideUp();
		$("#lineModalLabel").text("Sign In");
		$("#registeralert").show();
		$("#loginalert").hide();
		$("#loginbutton").show();
		$("#registerbutton").hide();
	});
	$(".vertical_div").click(function() {
		$("#popup").show();
		$("#popup").animate({
			height:"100%",
			width:"100%",
			opacity:"1",
		},200);
	});
	$(document).keydown(function(e){
		if(e.keyCode==27)
		{
			$("#popup").fadeOut();
		}
	});
	$(".event").click(function(){
		$("#popup").fadeIn();
//		$("#popup").css({"z-index":"99"});
	});
	$("#eventsclose").click(function(){
		$("#popup").fadeOut();
	});
	$("#loginbutton").click(function(){
		if($("#username").val()=="" || $("#password").val()=="")
			return false;
		var username=$("#username").val();
		var password=$("#password").val();
		$.ajax({
		url:"backend.php?type=1&username="+username+"&password="+password,
		type:"GET",
		success:function(data)
			{
				alert(data);
			}
			
	});
	});
	$("#registerbutton").click(function(){
		var name=$("#name").val();
		var username=$("#username").val();
		var password=$("#password").val();
		var cpassword=$("#c_password").val();
		var phone=$("#phonenumber").val();
		var roll=$("#rollnumber").val();
		var department=$("#department").val();
		var batch=$("#batch").val();
		if($("#username").val()=="" || $("#password").val()=="" || $("#c_password").val()=="" || $("#phonenumber").val()=="" || $("#rollnumber").val()=="" || $("#departmnt").val()=="" || $("#batch").val()=="")
			return false;
		if(password != cpassword)
		{
			alert("Passwords didn't match.");
			return false;
		}
		if($("#phonenumber").val().length<10 || $("#phonenumber").val().length<10)
		{
			alert("Invalid phone number.");
			return false;
		}
		if($("#rollnumber").val().length<10 || $("#rollnumber").val().length<10)
		{
			alert("Invalid roll number.");
			return false;
		}
		$.ajax({
		url:"backend.php?type=2&name="+name+"&username="+username+"&password="+password+"&phone="+phone+"&roll="+roll+"&department="+department+"&batch="+batch,
		type:"GET",
		cache:false,
		success:function(data)
			{
				alert(data);
			}
	});
	});
	},4000);
	
	
});