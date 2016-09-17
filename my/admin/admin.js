$(document).ready(function(){
	msg_his();
}); 
user = "admin"
$(function(){
	$("#send1").click(function(){
	msg=$("#textarea").val();
	$("#textarea").val('');
	send2(msg);
	})
});
$(function(){
	$("#textarea").keypress(function(e){
	var	msg= $("#textarea").val();
						if(e.keyCode == 13){
						e.preventDefault();
						msg=$("#textarea").val();
						$("#textarea").val('');
						send2(msg);
				}
	});
})

function send2(msg){
 	uid=$(".msg_send").attr("id")
	if (uid===undefined) {
		alert("un");
	}else{
	insertdb(msg,uid)
	sendmsg1(user,msg);
	}
	
}

/*click event to load chat data*/
$(function(){
	$(".name_hold").on("click","#wrap", function(){
		var uid=$(this).children('#uid').val();
		$('.hig').removeClass("hig");
		$(this).addClass("hig");
		$(".msg_con").empty();
		load1(uid);
		$('.msg_send').attr( 'id', uid );
	});
});

/*functions*/
function msg_his() {
	 $.getJSON("msg_his.php", function(data)
	{ 
	$.each(data,function(key,val)
		{
		//sendmsg1(val.user,val.msg);
			msg_his_ins(val.user,val.msg,val.time_stamp,val.uid)
		});
	});

}
function msg_his_ins(user,msg,time,uid){
	$(".name_hold").append('<div class="wrap" id="wrap"><div class="border"><p class="name">'+user+'</p><span id="'+uid+'" class="msg">'+msg+'</span><div class="div_right"><p>'+time+'</p></div></div><input type="hidden" id="uid" name="uid" value="'+uid+'"></div>');
	
}
function load1(uid)
{
	 $.ajax({
 		type: "POST",
  		url: "onload.php",
		data: { uid : uid },
						success: function(a)
						{
						a = $.parseJSON(a);
						$.each(a, function(key, val)
							{
					 		sendmsg1(val.user,val.msg);
							});


						}
			});
}

function sendmsg1(name,msg)
{
	$(".msg_con").append("<p>"+name+"</p><span>"+msg+"</span>");
	$('.msg_dis').scrollTop($('.msg_dis')[0].scrollHeight);
}
function  insertdb(msg,uid){
	alert(msg);
	alert(uid);
	 $.ajax(
	 {
 		type: "POST",
  		url: "insertmsg1.php",
		data: { msg : msg, uid : uid },
			  success: function(){
			  	
			  }
		});

}