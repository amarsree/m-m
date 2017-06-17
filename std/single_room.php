<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>eCommerce Product Detail</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
   </head>
<link rel = "stylesheet" type = "text/css" href = "css/style_single_page.css" />
    <?php include 'head.php'; ?>

  <body>
	  <?php include 'nav.php'; ?>

	<div class="container">
	
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						

<?php 


    $rid = $_GET['rid'];
    $rid = stripslashes($rid);
   // $rid = mysql_real_escape_string($rid);
//echo $rid;

    if (is_numeric($rid)){

    	include "dbconn.php";
	$rset = mysqli_query($conn, "select * from rooms where rid='$rid';");
	$row=mysqli_fetch_assoc($rset);

}

?>


						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src="uploads/<?php echo $rid.'.jpg' ?>" /></div>
						  <div class="tab-pane" id="pic-2"><img src="http://placekitten.com/400/252" /></div>
						  <div class="tab-pane" id="pic-3"><img src="http://placekitten.com/400/252" /></div>
						  <div class="tab-pane" id="pic-4"><img src="http://placekitten.com/400/252" /></div>
						  <div class="tab-pane" id="pic-5"><img src="http://placekitten.com/400/252" /></div>
						<ul class="preview-thumbnail nav nav-tabs">
						  <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						  <li><a data-target="#pic-2" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						  <li><a data-target="#pic-3" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						  <li><a data-target="#pic-4" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						  <li><a data-target="#pic-5" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						</ul>
						</div>
						
					</div>
					<div class="details col-md-6">
						<h3 class="product-title"> <?php echo $row['lname']; ?> </h3>
						<div class="rating">
							<!-- <div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div> -->
							<!-- <span class="review-no">41 reviews</span> -->
						</div>


				<!-- rent  -->
						<h4 class="price">Room rent: <span> <?php echo $row['rent']; ?> </span></h4>
					<!-- status  -->
						<h4 class="price">Status: <span> <?php echo $row['status']; ?> </span></h4>
					<!-- for  -->
						<h4 class="price">for: <span> <?php echo $row['for_g']; ?> </span></h4>	
						

				<!-- discription -->
				<h5 class="colors">Discription</h5>
						<p class="product-description"> <?php echo $row['discription']; ?>  </p>
				<!-- conditions -->
				<h5 class="colors">Conditions</h5>
						<p class="product-description"> <?php echo $row['conditions']; ?>  </p>
				<!-- about_owner -->
				<h5 class="colors">About owner</h5>
						<p class="product-description"> <?php echo $row['about_owner']; ?>  </p>
					



						<input type="hidden" id="lat" value="<?php echo $row['lat'];?>">
					<input type="hidden" id="lng" value="<?php echo $row['lng'];?>">

					




						<div id='map_area'>
						<script type="text/javascript" src="map/jquery.googlemap.js">
						</script>
						<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC69RBujiOkY2UzvcJCPgsuVUVkKFKeYXI"></script>
						<script type="text/javascript" src="map/jquery.googlemap.js"></script>
						<script type="text/javascript" src="map/script.js">
							</script>

						</div>
		
				<!-- <p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
						<h5 class="sizes">sizes:
							<span class="size" data-toggle="tooltip" title="small">s</span>
							<span class="size" data-toggle="tooltip" title="medium">m</span>
							<span class="size" data-toggle="tooltip" title="large">l</span>
							<span class="size" data-toggle="tooltip" title="xtra large">xl</span>
						</h5>
						<h5 class="colors">colors:
							<span class="color orange not-available" data-toggle="tooltip" title="Not In store"></span>
							<span class="color green"></span>
							<span class="color blue"></span>
						</h5>
						<div class="action">
							<button class="add-to-cart btn btn-default" type="button">add to cart</button>
							<button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
  </body>
</html>
