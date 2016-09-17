<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'head.php'; ?>
<link rel="stylesheet" href="admin.css">

</head>
<body >

<?php include 'header.php'; ?>
<div class="container-fluid">
<div class="row">
<!-- MESSAGES HISTRY -->
<div class="col-xs-12 col-sm-5 col-md-4 chat_list">
	<div class="name_hold">
	
	</div>
</div>


<!-- MESSAGES  -->
<div class="col-xs-12 col-sm-6 col-md-7 chat_data">
<div class="name">
	<h4></h4>
</div>
<div class="msg_dis">
	<div class="msg_con" id="msg_con">
		<p>name</p>
		<span>msg</span>
	</div>
</div>
	
	<div class="msg_send">
		<textarea  cols="45" rows="1" id="textarea"></textarea>
		<input type="button" name="send" id="send1" value="send">
	</div>
</div>

</div>
 </div>  
 <script src="admin.js"></script>
<?php include 'footer.php'; ?>

</body>
</html>
