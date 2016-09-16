$(function() {
$("#error_msg_fname").hide();
	$("#error_msg_lname").hide();
	$("#error_msg_email").hide();
	$("#error_msg_psw").hide();

	var error_username = false;
	var error_lastname = false;
	var error_email = false;
	var error_psw = false;





	$("#frist_name").focusout(function(){
		
		name();
	})

	$("#form_lastname").focusout(function(){
		
		lname();
	})
	$("#email").focusout(function(){

		email();
	})
	$("#password_confirmation").focusout(function(){
		psw();
	})

	


	function name() {
	var user_length = $("#frist_name").val().length;
		if (user_length<3 || user_length>20) {
	$("#error_msg_fname").html("should brtween 3 to 20 characters");
		$("#error_msg_fname").show();	
		 error_username = true;

	}else{
		$("#error_msg_fname").hide();
	}
	return error_username;
	}
	function lname() {

	var user_length = $("#frist_name").val().length;
		if (user_length<3 || user_length>20) {
	$("#error_msg_lname").html("should brtween 3 to 20 characters");
		$("#error_msg_lname").show();	
		error_lastname = true;
	}else{
		$("#error_msg_lname").hide();
	}
	return error_lastname;
	}
	function email() {
		
		 
	var pattren = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if (pattren.test($("#email").val())) {
		$("#error_msg_email").hide();
	}else{
		$("#error_msg_email").html("enter valid email");
		 $("#error_msg_email").show();
		 error_email = true;
	}
	return error_email;
	}

	function psw() {	
	if(($("#pswd").val()) == ($("#password_confirmation").val())){
		if((($("#password_confirmation").val())) == ""){
			$("#error_msg_psw").html("password should not be empty");
		$("#error_msg_psw").show();	
		error_psw = true;
		}else{
		$("#error_msg_psw").hide();
		}
	}else{
		$("#error_msg_psw").html("password donot match");
		$("#error_msg_psw").show();
			error_psw =	 true;
	}
	return error_psw;
	}

	$("#form").submit(function(){
	 error_username = false;
	 error_lastname = false;
	 error_email = false;
	 error_psw = false;
	name();
	lname();
	email();
	psw();
	if (error_username == false && error_lastname== false && error_email == false && error_psw == false) {
		return true;
	}else{
		return false;
	}	
	});

})