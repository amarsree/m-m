<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'head.php'; ?>
</head>
<body >

<?php  include 'header.php'; ?>

<hr>
<div class="container">
    <div class="row">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="text-center">
                          <h3><i class="fa fa-lock fa-4x"></i></h3>                      <h2 class="text-center">Enter your new password</h2>
                          <p>You can reset your password here.</p>
                            <div class="panel-body">
                              
                              <form class="form" id="form" method="post" action="" name="form_pass">
                                <fieldset>
                                  <div class="form-group">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                      
                                      <input name="pass" id="emailInput" placeholder="Password" class="form-control" type="password">
                                     
                                    </div>
                                      <br>
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                      
                                      <input name="pass1" id="emailInput" placeholder="Re-enter Password" class="form-control" type="password">
                                      <br>
                                     
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <input class="btn btn-lg btn-primary btn-block" name="submit" value="Reset My Password" type="submit">
                                  </div>
                                </fieldset>
                              </form>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php  include 'footer.php'; ?>
<script>
	$(function(){
		$("#error_msg_psw").hide();

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
	}


		$("#form").submit(function(event){
			alert();
			event.preventDefault();	
		});
	});
</script>
</body>
</html>
