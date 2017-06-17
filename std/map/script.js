$(document).ready(function(){

var lat = $('#lat').val();
var lng = $('#lng').val();
//alert(lat+'fdf');
//alert(lng);
myMap(lat,lng);

  
});

/*functions decleraations*/
/*getting lat and lng */




/*function for displaying map with marker*/
function myMap(lat,lng) {
 // alert(lat);
 //alert(lng);
  var myCenter = new google.maps.LatLng(lat,lng);
  var mapCanvas = document.getElementById("map_area");
  var mapOptions = {
    center: myCenter,
    zoom: 8,
  };
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({
    position:myCenter,
    title: 'Hello World!'
  });
  marker.setMap(map);

}

/*fun calling*/



