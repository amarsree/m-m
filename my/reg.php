	<!DOCTYPE html>
	<html lang="en">
	<head>
	<?php include 'head.php'; ?>
	</head>
	<body >

	<?php  include 'header.php'; ?>
	

	    		<?php 
	    		if(isset($_POST['email']))
	 {
	    			$email=$_POST['email'];
	    			include "dbconn.php";
	    			$rset=mysqli_query($conn,"SELECT email FROM `reg` WHERE email='$email'");
	    			$rows =mysqli_num_rows($rset);
					if($rows==0)
							{
								$fname=$_POST['fname'];
								$lname=$_POST['lname'];
								$pswd=$_POST['pswd'];
							/*	$day=$_POST['day'];
								$month=$_POST['month'];
								$year=$_POST['year'];
								$dob=$year."-".$month."-".$day;
						$mno=$_POST['mno'];
								*/
								
								/*mysqli_query($conn,"insert into reg (fname,lname,email,pswd,mno,dob) values('$fname','$lname','$email','$pswd','$mno','$dob')");*/
								mysqli_query($conn,"insert into reg (fname,lname,email,pswd) values('$fname','$lname','$email','$pswd');");
$rset = mysqli_query($conn, "select max(uid) as mx from reg");
	 // $row=mysqli_fetch_array($rset);
	 $row=mysqli_fetch_array($rset);
	 $uid=$row['mx'];
   // echo $uid;
$result = $conn-> query ("CREATE TABLE `m\$m`.`$uid` ( `mid` INT(4) NOT NULL AUTO_INCREMENT , `user` VARCHAR(25) NOT NULL , `msg` TEXT NOT NULL , `email` VARCHAR(30) NOT NULL , `time_stamp` TIMESTAMP NOT NULL , PRIMARY KEY (`mid`)) ENGINE = MyISAM");
						//	echo "insert into reg (fname,lname,email,pswd) values('$fname','$lname','$email','$pswd')";
								?>
							<script type="text/javascript">
							//alert("login.php?id=2");
										window.location.href = 'login.php?id=2';
										</script>
								<?php
							}
									else
									{
										?>
										<script type="text/javascript">
										//alert("forget.php?id=1");
										window.location.href = 'forget.php?id=1';
										</script>
			<?php					
									
									
	 								}

	    		}else
	    		{
	    			?>
<h1 class=" heading ">Be a part of us and stay connected to us </h1>
	<div class="container">
	        <div class="row centered-form">
	        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
	        	<div class="panel panel-default">
	        		<div class="panel-heading">
				    		<h3 class="panel-title">Please sign up for m$m <small>You dream we Do</small></h3>
				 			</div>
				 			<div class="panel-body">
				    		<form id='form' role="form" action="" method="post" >
				    			<div class="row">
				    				<div class="col-xs-6 col-sm-6 col-md-6">
				    					<div class="form-group">
				                <input type="text" name="fname" id="frist_name" class="form-control input-sm" placeholder="First Name"><span class="error_msg" id="error_msg_fname"></span>
				    					</div>
				    				</div>
				    				<div class="col-xs-6 col-sm-6 col-md-6">
				    					<div class="form-group">
				    						<input type="text" name="lname" id="form_lastname" class="form-control input-sm" placeholder="Last Name"><span class="error_msg" id="error_msg_lname"></span>
				    					</div>
				    				</div>
				    			</div>

				    			<div class="form-group">
				    				<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address"><span class="error_msg" id="error_msg_email">sss</span>
				    			</div>

				    			<div class="row">
				    				<div class="col-xs-6 col-sm-6 col-md-6">
				    					<div class="form-group">
				    						<input type="password" name="pswd" id="pswd" class="form-control input-sm" placeholder="Password"><span class="error_msg" id="error_msg_psw"></span>
				    					</div>
				    				</div>
				    				<div class="col-xs-6 col-sm-6 col-md-6">
				    					<div class="form-group">
				    						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
				    					</div>
				    				</div>
				    			</div>
				    			
				    			<input type="submit" value="Register" class="btn btn-info btn-block" >
				    		
				    		</form>
				    	</div>
		    		</div>
	    		</div>
	    	</div>
	    </div>
<?php

	    		}
			?>
<script src="reg_val.js"></script>

	
   
	<?php  include 'footer.php'; ?>

	</body>
	</html>
