  <!DOCTYPE html>
<html lang="en">

<head>
<?php include 'head.php'; ?>
</head>

<body>

   <?php include 'nav.php'; ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
    
            





<div class="container">
    <div class="row">
    <form class="form-horizontal" enctype="multipart/form-data" action="room_added.php" method="post">


<!-- Form Name -->
<legend>Fill form for adding room</legend>

<!-- Text input-->


<div class="form-group">
  <label class="col-md-4 control-label" for="lname">Loction Name</label>  
  <div class="col-md-4">
  <input id="lname" name="lname" type="text" placeholder="type the area room in.." class="form-control input-md" >
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Rent(sum of all members)">Rent</label>  
  <div class="col-md-4">
  <input id="Rent" name="rent" type="text" placeholder="rent for room" class="form-control input-md" >
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="total">Total</label>  
  <div class="col-md-4">
  <input id="total" name="total" type="text" placeholder="total members can stay in room" class="form-control input-md" >
    
  </div>
</div>


<div class="form-group">
<label class="col-md-4 control-label" for="Status">Status</label>  
  <div class="col-md-4">
        <input type="radio" name="status" value="FILLED">Filled
        <input type="radio" name="status" value="TOLET">Tolet
 </div>
</div>

<div class="form-group">
<label class="col-md-4 control-label" for="For">For</label>  
  <div class="col-md-4">
        <input type="radio" name="for" value="BOYS">Boys
        <input type="radio" name="for" value="GIRLS">Girls
       
 </div>
</div>






<!-- Button Drop Down -->
<!-- <div class="form-group">
  <label class="col-md-4 control-label" for="damage">Which of your windows is damaged?</label>
  <div class="col-md-4">
    <div class="input-group">
      <input id="damage" name="damage" class="form-control" placeholder="Select" type="text" required="">
      <div class="input-group-btn">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
          Please Select
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu pull-right">
          <li><a href="#">Windscreen</a></li>
          <li><a href="#">Side Window</a></li>
          <li><a href="#">Rear Window</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="regno">Registration Number</label>  
  <div class="col-md-4">
  <input id="regno" name="regno" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div> -->

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="discription">Discription</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="discription" name="discription"></textarea>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="conditions">conditions</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="conditions" name="conditions" placeholder="like can cook in room"></textarea>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="About_owner">About owner</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="About_owner" name="about_owner" placeholder="how he will be with students"></textarea>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="contact of owner">contact owner</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="contact" name="contact" placeholder="owner mobile number"></textarea>
  </div>
</div>


<div class="form-group">
    <label class="col-md-4 control-label" for="exampleInputFile">Photos inside room </label>
<div id='Uploadcontainer'>
<input name="file" type="file"/>
  <!--  <input type='file' name='file' class='uploadfile' /> -->
</div>
</div>
<!-- asking for location-->
<div class="form-group">
  <label class="col-md-4 control-label" for="loc coordnats">location coordants</label>
  <div class="col-md-4"> 

<div id="map_area">
  <script type="text/javascript" src="map/jquery.googlemap.js">
            </script>
            <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC69RBujiOkY2UzvcJCPgsuVUVkKFKeYXI"></script>
            <script type="text/javascript" src="map/jquery.googlemap.js"></script>
       <script type="text/javascript">


       </script> 
       
</div>

    <input type="text" name="lat" id="lat" value="">
    <input type="text" name="lng" id="lng"  value="">
    <input type="button" name="button" id="button"  value="Get current location">
    </div>
</div>
<!-- java scrips for picking location and getting current location -->
<script type="text/javascript" src="map/script1.js">
              </script>



<input type="Submit" name="submit" class="btn btn-primary btn-primary" value="Add">
</form>
<!-- <a href="" class="btn btn-primary btn-primary">Submit</a> -->

    </div>
</div>


                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

  
</body>

</html>
