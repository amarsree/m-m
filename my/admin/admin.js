user ="admin"
$(function(){
	$("#send1").click(function(){
		msg=$("#textarea").val();
	$("#textarea").val('');
	insertdb(msg);
	sendmsg1(user ,msg);
	})
});
$(function(){
	$("#textarea").keypress(function(e){
	var	msg= $("#textarea").val();

					if(e.keyCode == 13){
						e.preventDefault();
						$("#textarea").val('');
						insertdb(msg)
					sendmsg1(user,msg);
				}
	});
})

$(function(){alert();
	$(".name_hold").on("click",".wrap", function(){
		//$('.msg_con p').
		a=$(".wrap p").html('a');
	alert (a);
	});
});


$( document ).ready(function() {
	load1();
	msg_his();
});
function load1(){
	 $.getJSON("onload.php", function(data)
	{ 
	$.each(data,function(key,val)
		{
			
			sendmsg1(val.user,val.msg);
		});
	});
};

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
	$(".name_hold").append('<div class="wrap" id="'+uid+'"><div class="border"><p class="name">'+user+'</p><span id="'+uid+'" class="msg">'+msg+'</span><div class="div_right"><p>'+time+'</p></div></div><input type="button" id="uid" name="uid" value="'+uid+'"></div>');
	
}

function sendmsg1(name,msg){
	$(".msg_con").append("<p>"+name+"</p><span>"+msg+"</span>");
	$('.msg_dis').scrollTop($('.msg_dis')[0].scrollHeight);
}

function insertdb(msg){
	 $.ajax({
 				 type: "POST",
  				url: "chat/insertmsg1.php",
			  data: { msg : msg },
			 // success: function(a){
			  //	alert(a);
			//  }
			});

}


