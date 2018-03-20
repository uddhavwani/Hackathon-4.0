<!DOCTYPE html>
<html>
  <head>
    <title>TURISMO DEVELOPERS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- bootstrap-css -->
	<link href="assets/
	css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!--// bootstrap-css -->
	<!-- css -->
	<link rel="stylesheet" href="assets/css/style.css" type="text/css" media="all" />
	<!--// css -->
	<link rel="stylesheet" href="assets/css/ken-burns.css">
	<!-- font-awesome icons -->
	<link href="assets/css/font-awesome.css" rel="stylesheet"> 
	<!-- //font-awesome icons -->
	
	<script src="assets/js/jquery-1.11.1.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 45%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVmbBtd4yZtv4qUom76tO68d-SYPU9N6o&libraries=places&callback=initMap" async defer></script>
    
<script type="text/javascript">
if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function (p) {
        var LatLng = new google.maps.LatLng(p.coords.latitude, p.coords.longitude);
        var mapOptions = {
            center: LatLng,
            zoom: 15,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map"), mapOptions);
        var marker = new google.maps.Marker({
            position: LatLng,
            map: map,
            title: "<div style = 'height:60px;width:200px'><b>Your location:</b><br />Latitude: " + p.coords.latitude + "<br />Longitude: " + p.coords.longitude
        });
        google.maps.event.addListener(marker, "click", function (e) {
            var infoWindow = new google.maps.InfoWindow();
            infoWindow.setContent(marker.title);
            infoWindow.open(map, marker);
        });
    });
} else {
    alert('Geo Location feature is not supported in this browser.');
}
</script>
  </head>
  <body>
    <div id="map"></div>
	<div class="a-grid" >
		<div class="container">
			<div class="w3l-about-heading">
				<h2>Nearby Places..</h2>
				<p>These are some places that you can visit.Have a look............</p>
			</div>
			<div  id="nearby_places" >
			</div>
		</div>
	</div>
	<!-- //a-about -->
    </div>    
	
  </body>
</html>