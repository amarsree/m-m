$(document).ready(function(){
	
initMap()

	var map, infoWindow;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map_area'), {
          center: { lat: 12.97, lng: 77.59 },
          zoom: 6
        });
        infoWindow = new google.maps.InfoWindow;
var bangalore = { lat: 12.97, lng: 77.59 };
 // var map = new google.maps.Map(document.getElementById('infoWindow'), {
  var map = new google.maps.Map(document.getElementById('infoWindow'), {
    zoom: 12,
    center: bangalore
  });

  // This event listener calls addMarker() when the map is clicked.
  google.maps.event.addListener(map, 'click', function(event) {
  	alert('dfs');
    addMarker(event.latLng, map);
  });



}

	alert('RDY');
	$("#button").click(function(event){
		alert("CLK");
	  if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
          
            var lat = position.coords.latitude;
            var lng = position.coords.longitude;
          $("#lat").val(lat);
          $("#lng").val(lng);
           myMap(lat,lng);

           /* infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            infoWindow.open(map);
            map.setCenter(pos);*/
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }


      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }



/*function defination for loading map*/
		      function myMap(lat,lng) {
		  alert(lat);
		 alert(lng);
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




});
 


  // Add a marker at the center of the map.
  //addMarker(bangalore, map);
function addMarker(location, map) {
	alert('dsf');
  // Add the marker at the clicked location, and add the next-available label
  // from the array of alphabetical characters.
  var marker = new google.maps.Marker({
	position: location,
    label: dsf,
    map: map
  });
}







 });