<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="script.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">m$m</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="index.php">insert new record</a></li>
      <li><a href="acc.php">add</a></li>
      
    </ul>
  </div>
</nav>



	<div class="panel-body col-md-6 col-md-offset-3">
 <?php 
         
          if(isset($_POST['event_id'])){
            include "dbconn.php";
              $event_id=$_POST['event_id'];
              $date=$_POST['date'];
              $event_category=$_POST['event_category'];
              $package=$_POST['package'];
              $expediter=$_POST['expediter'];
              $profit=$_POST['profit'];
             
             mysqli_query($conn,"insert into account (event_id,date,event_category,package,expediter,profit) values('$event_id','$date','$event_category','$package','$expediter','$profit');");
             echo('a new record inserted.....');
          }
?>



 	
	<form role="form" method="post" action="" accept-charset="UTF-8">

	 <input type="event_id" id="event_id" class="form-control" name="event_id" placeholder="event_id">
     <br>

      <input type="date" id="date" class="form-control" name="date">
     <br>

            <label for="event_category" class="m-t-10">event category</label>
                        <select id="event_category" class="form-control" name="event_category">
                            <option value="birthday">birthday</option>
                            <option value="anniversary/wedding">anniversary/wedding</option>
                            <option value="bon voyague">bon voyague</option>
                            <option value="proposal">proposal</option>
                            <option value="get well soon">get well soon</option>
                           
                        </select>
                     <br>

      <input type="number" id="package" class="form-control" name="package" placeholder="package">
     <br>

      <input type="number" id="expediter" class="form-control" name="expediter" placeholder="expediter">
     <br>

     <input type="number" id="profit" class="form-control" name="profit" placeholder="profit">
     <br>

     <center><input type="submit" class="btn btn-primary m-t-10" id="submitbtn" name="submit" value="Submit"></center>


</form>





</body>
</html>
