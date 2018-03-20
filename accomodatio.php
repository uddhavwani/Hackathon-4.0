<!DOCTYPE html>
<html>
  <head>
    <title>TURISMO | Accomodation</title>
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
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVmbBtd4yZtv4qUom76tO68d-SYPU9N6o&libraries=places&callback=initMap" async defer></script>
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
    <script>
	
      var map;
      var infowindow;

      function initMap() {
        var pyrmont = {lat: <?php echo $_GET['lat']?>, lng: <?php echo $_GET['lng']?>};

        map = new google.maps.Map(document.getElementById('map'), {
          center: pyrmont,
          zoom: 15
        });

        infowindow = new google.maps.InfoWindow();
		var types = ['restaurant','room','lodging'];
        var service = new google.maps.places.PlacesService(map);
		for(i = 0; i<types.length; i++)
		{
			service.nearbySearch({
			  location: pyrmont,
			  radius: 500,
			  type: [types[i]]
			}, callback);
		}
        
      }

      function callback(results, status) {
        if (status === google.maps.places.PlacesServiceStatus.OK) {
          for (var i = 0; i < results.length; i++) {
            createMarker(results[i]);
          }
        }
      }

      function createMarker(place) {
		  
		var dom = document.getElementById('nearby_places');
		var place_name = place.name;
		var address =  place.vicinity;
		var ratings = place.rating;
		var icon = place.icon;
		var link = "place.php?place="+place_name+"&lat="+place.geometry.location.lat()+"&lng="+place.geometry.location.lng();
						
		document.getElementById('nearby_places').innerHTML += "<div class=\"agileits-a-about-grids\"><div class=\"col-md-3 agileits-a-about-left\" id =\"nearby_places_img\"> <img src=\""+icon+"\"></img></div><div class=\"col-md-9 agileits-a-about-right\" id =\"nearby_places\"><h3>"+place_name + "</h3><br/><h4><b>Address : </b>"+address +"</h4><br/>Ratings : "+ ratings +"<br/>Search Near by Places <a href='"+ link+"'>Here.</a></div><div class=\"clearfix\"> </div></div>"
		
		
		
        var placeLoc = place.geometry.location;
        var marker = new google.maps.Marker({
          map: map,
          position: place.geometry.location
        });

        google.maps.event.addListener(marker, 'click', function() {
          infowindow.setContent(place.name);
          infowindow.open(map, this);
        });
		
      }
    </script>
  </head>
  <body>
    <div id="map"></div>
	<div class="header">
			<div class="container">
				<div class="logo">
					<h1>
						<a href="index.php"> Rajasthan Tourism</a>
					</h1>
				</div>
				<div class="top-nav">
					<nav class="navbar navbar-default">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">Menu						
							</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li><a href="index.php">Home</a></li>
								
								<li><a class="active" href="#">Accomodation</a></li>
								<li><a href="contact.php">Contact</a></li>
								<div class="clearfix"> </div>
							</ul>	
						</div>	
					</nav>		
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	<div class="a-grid" >
		<div class="container">
			<div class="w3l-about-heading" align="center">
				<h1><?php echo $_GET['place']?></h1>
				<h4>Places Near By <?php echo $_GET['place']?></h4>
				<p>These are some places that you can visit.Have a look............</p>
			</div>
			<div  id="nearby_places" >
			</div>
		</div>
	</div>
	<!-- //a-about -->
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-grids">
				<div class="clearfix"> </div>
				<div class="copyright">
				<p>© 2018  All Rights Reserved. Developed By Team Player's Developers</p>
			</div>
			</div>
			
		</div>
	</div>
    </div>    
  </body>
</html>
