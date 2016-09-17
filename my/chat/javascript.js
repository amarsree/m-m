$( document ).ready(function() {
    load();
});
$(function(){
$("#addClass").click(function () {
  $('#sidebar_secondary').addClass('popup-box-on');
 		
$('#chat').scrollTop($('#chat')[0].scrollHeight);
    });
  
    $("#removeClass").click(function () {
  $('#sidebar_secondary').removeClass('popup-box-on');
});  
  
  $("#addClass1").click(function () {

window.location.href = 'login.php?id=0';
});
    });


function load(){
	 $.getJSON("chat/onload.php", function(data){
$.each(data,function(key,val){
	//alert(val.user);
	if(val.user=="admin"){
		myid = $("ul:last").attr("id");
		if(myid==undefined){
			create_ul_left(val.msg);
		}else if(myid=="right"){
			create_ul_left_app(val.msg);
		}else{
			add_li(val.msg);
		}
	}else{
		send_insert(val.msg)
		}


});
});
}
function send_insert(msg){
	myid = $("ul:last").attr("id");
			if(myid==undefined){
			create_ul_right(msg)
		}else if(myid=="left"){
			create_ul_right_app(msg)
		}else{
			add_li(msg)
		}
}
function create_ul_left(msg){
$(".chat").html('<div class="chat_message_wrapper "><ul class="chat_message" id="left"><li><p>'+msg+'</p></li></ul></div>');

}
function create_ul_right(msg){
$(".chat").html('<div class="chat_message_wrapper chat_message_right"><ul class="chat_message" id="right"><li><p>'+msg+'</p></li></ul></div>');

}
function create_ul_left_app(msg){
$(".chat").append('<div class="chat_message_wrapper "><ul class="chat_message" id="left"><li><p>'+msg+'</p></li></ul></div>');

}
function create_ul_right_app(msg){
$(".chat").append('<div class="chat_message_wrapper chat_message_right"><ul class="chat_message" id="right"><li><p>'+msg+'</p></li></ul></div>');

}
function add_li(msg){
	$("ul:last").append("<li><p>"+msg+"</p></li>");
}



$(function(){

	$("#submit_message").keypress(function(e){
	var	msg= $("#submit_message").val();
					if(e.keyCode == 13){
					sendmsg();
				}
});

});
$(function(){
	$("#send").click(function(){
		sendmsg();
	})

})






function sendmsg() {
	var msg = $("#submit_message").val();
					$("#submit_message").val('');
		 $.ajax({
 				 type: "POST",
  				url: "chat/insertmsg.php",
			  data: { msg : msg },
			});
			send_insert(msg)
				 $('#chat').scrollTop($('#chat')[0].scrollHeight);
}

