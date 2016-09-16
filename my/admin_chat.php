<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'head.php'; ?>
<link rel="stylesheet" href="css/admin.css">
<script src="chat/admin.js"></script>
</head>
<body >

<?php include 'header.php'; ?>
<div class="container-fluid">
<div class="row">
<div class="col-xs-12 col-sm-5 col-md-4 chat_list">
	<div class=" name_hold">
		<p class=" name">name</p>
		<span class="msg">hai</span>
		<div class="div_right">
			<p>2:30 pm</p>
		</div>
	</div>

</div>

<div class="col-xs-12 col-sm-6 col-md-7 chat_data">
<div class="msg_dis">
	<div class="msg_con" id="msg_con">
	<p>name</p>
	<span>mgs</span>
	<p>name</p>
	<span>mgs</span>
	<p>name</p>
	<span>mgs</span>
	</div>


</div>
	
	<div class=" msg_send">
		<textarea  cols="45" rows="1" id="textarea"></textarea>
		<input type="button" name="send" id="send1" value="send">
	</div>
</div>

</div>
 </div>  
<?php include 'footer.php'; ?>

</body>
</html>
