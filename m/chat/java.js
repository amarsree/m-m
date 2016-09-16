$(document).ready(function(){
		$('.chat_head').click(function() {
		$('.wrap').slideToggle();	
		});
		
		$('textarea').keypress(
		function(e){
		if(e.keyCode == 13){
		var msg = $(this).val();
		$(this).val('');
		$("<div class='msg_a'>"+msg+"</div>").insertBefore('.msg_insert');
	//$('#scroll').scrollTop($('#scroll')[0].scrollHeight);
	$('.chat_message_wrapper').mouseover(function(){
		alert();
	})
		}
		})
	});