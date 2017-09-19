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



<div class="jumbotron text-center">
  <div class="container">
  <div class="row">
      
      <div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 ">

          <?php 
         
          if(isset($_POST['email'])){
            include "dbconn.php";
              $name=$_POST['name'];
              $email=$_POST['email'];
              $date=$_POST['date'];
              $event_to=$_POST['event_to'];
              $relation=$_POST['relation'];
              $event_category=$_POST['event_category'];
              $event_location=$_POST['event_location'];
              $description=$_POST['description'];
              $contact_number=$_POST['contact_number'];
             
             mysqli_query($conn,"insert into data1 (name,email,date,event_to,relation,event_category,event_location,description,contact_number) values('$name','$email','$date','$event_to','$relation','$event_category','$event_location','$description','$contact_number');");
             echo('a new record inserted.....');
          }
?>




            <div class="panel panel-primary">
                <div class="panel-heading">Thank you for Sign Up!</div>
                <div class="panel-body">
                    <form role="form" method="post" action="" accept-charset="UTF-8">
                    
                        <input type="text" id="name" class="form-control" name="name" placeholder="Example: John">
                        
                        <br>
                        <input type="text" id="email" class="form-control" name="email" placeholder="email" >

                         <br>
                        <input type="date" id="date" class="form-control" name="date">

                        <br>
                        <input type="text" id="event_to" class="form-control" name="event_to" placeholder="event to" >

                         <br>
                        <input type="text" id="relation" class="form-control" name="relation" placeholder="relation">

                         <br>
                        <input type="text" id="contact_number" class="form-control" name="contact_number" placeholder="contact number" >
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
                        
                        <input type="text" id="event_location" class="form-control" name="event_location" placeholder="event location">
                        <br>
                        
            
                        <input type="text" id="description" class="form-control" name="description" placeholder="description">
                        
                        
                        <center><input type="submit" class="btn btn-primary " id="submitbtn" name="submit" value="Submit"></center>
                        
                    </form>
                    
                      


                </div>
            </div>
        </div>  
    </div>


</div> 

      
<!-- <table border="1">
<tr>
  <th>id</th>
  <th>name</th>
  <th>date</th>
  <th>event to</th>
  <th>relation</th>
  <th>event category</th>
  <th>contact number</th>
  <th>event location</th>
  <th>description</th>
</tr>
<tr>
<td>dsdsd</td>
<td>dsd</td>
<td>sdsd</td>
<td>sdsd</td>
<td>sdsds</td>
<td>dsdsdsdsd</td>
</tr>
</table> -->




</div>
</div>
</body>
</html>
