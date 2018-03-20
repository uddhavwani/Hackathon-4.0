<?
	
?>
<!DOCTYPE html>
<html>
<head>
<title>Turismo| Home</title>
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
</head>
<body>
	<!-- banner -->
	<div class="banner">
		<div class="top-banner">
			<div class="container">
				
				<div class="clearfix"> </div>
			</div>
		</div>
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
								<li><a class="active" href="index.php">Home</a></li>
								<li><a href="#places">Places</a></li>
					
								<li><a href="contact.php">Contact</a></li>
								<div class="clearfix"> </div>
							</ul>	
						</div>	
					</nav>		
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<div id="kb" class="carousel kb_elastic animate_text kb_wrapper" data-ride="carousel" data-interval="6000" data-pause="hover">
            <!-- Wrapper for Slides -->
            <div class="carousel-inner" role="listbox">
                <!-- First Slide -->
                <div class="item active">
					<div class="slider">
						<div class="carousel-caption kb_caption slider-grid">
							<h3>Udaipur</h3>
							<p>City of Lakes.</p>
						</div>
					</div>
                </div>

                <!-- Second Slide -->
                <div class="item">
					<div class="slider slider1">
						<div class="carousel-caption kb_caption kb_caption_right slider-grid">
							<h3>Jaipur</h3>
							<p>Pink City.</p>
						</div>
					</div>
                </div>

                <!-- Third Slide -->
                <div class="item">
					<div class="slider slider2">
						<div class="carousel-caption kb_caption kb_caption_center slider-grid">
						   <h3>Chittorgarh</h3>
							<p>City of Forts.</p>
						</div>
					</div>
                </div>

            </div>
            <!-- Navigation Buttons -->
            
			
    </div>
	<!-- offer -->
	<div class="offer">
		<div class="container" align="center">
			
			<div class="wthree-offer-grid">
			
				<h4>VISIT</h4>
				<form method='GET' target='page2.php'>
					<div class="row wow fadeInUp animated" data-wow-delay=".5s">
						<div class="container">
							<div class="col-sm-6  col-sm-offset-3">
								<div class="input-group-lg">
									<input type="text" id="autocomplete" onfocus="geolocate()" class="form-control" name="place" placeholder="Enter your Place...">
								</div><!-- /input-group -->
							</div>
						</div>
					</div><!-- /.row -->
					<div class="clearfix"></div>
					
					<br/><!-- 
					<button type="submit" class="btn btn-primary" onsubmit>
						Go
					</button>
					 -->
				</form>
			</div>
		</div>
	</div>
	<!-- //offer -->
	 
	<div class="about" id="places">
		<div class="container">
			<div class="w3l-about-heading">
				<h2>Popular Places</h2>
				<p>Must Visit....</P>
			</div>
			<div class="row">
			<div class="more-bottom-grids" style="max-height:500px; overflow:hidden; display:inline-block; color:black;" >
				<div class="col-md-4 more-bottom-grid" >
					<div class="more-bottom-grid-info">
						<div class="more-bottom-grid-img">
							<img src="assets/images/udaipur.jpg" alt="" style="height:200px;">
						</div>
						<div class="more-bottom-grid-text">
							<h5><a href="place.php?place=Udaipur&lat=24.585445&lng=73.71247900000003">Udaipur</a></h5>
							<p><strong>"City of Lakes," the "Venice of the East," the "Kashmir of Rajasthan," </strong><br>
							Tourist point: city palace, Fateh Sagar Lake, Aquarium, Pichola Lake, Jag Mandir, Kesariyaji Temple, Monsoon Palace, Sukhadia Circle, Saheliyon-ki-Bari, Moti Magri, Gulab Bagh and Zoo, Sajjangarh biological park.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 more-bottom-grid" >
					<div class="more-bottom-grid-info">
						<div class="more-bottom-grid-img">
							<img src="assets/images/j1.jpg" alt="" style="height:200px">
						</div>
						<div class="more-bottom-grid-text">
							<h5><a href="place.php?place=Jaipur&lat=26.9124336&lng=75.78727090000007">Jaipur</a></h5>
							<p><strong>Pink City</strong><br>
							Tourist point: Amer Fort, City Palace, Jal Mahal, Diggi Palace, Hawa Mahal, Jaigarh Fort, Nahargarh Fort, Moti Dungri Fort, Rambagh Palace, Albert Hall Museum, City Palace, Jaipur Wax Museum, Nahargarh Fort, Sheesh Mahal, Nahargarh Fort</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 more-bottom-grid" >
					<div class="more-bottom-grid-info">
						<div class="more-bottom-grid-img">
							<img src="assets/images/chittorgh.jpg" alt="" style="height:200px;">
						</div>
						<div class="more-bottom-grid-text">
							<h5><a href="place.php?place=Chittorgarh&lat=24.8887435&lng=74.62692160000006" >Chittorgarh</a></h5>
							<p><strong> Former capital of the Sisodia Rajput Dynasty of Mewar.</strong><br>
							 Tourist Points: Chittor Fort, Vijaya Stambha, Meera Temple,Kumbha Palace , Padmini Palace, Gaumukh Kund, Rana Ratan Mahal, Government Museum,Bhimlat Kund<br><br>
						</div>
					</div>
				</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			
			<!--div class="row">
				<div class="col-md-3 col-sm-12">
					<div class="panel panel-default large">
						<div class="panel-body"><h4>Udaipur</h4></div>
					</div>
				</div>
				<div class="col-md-3 col-sm-12">
					<div class="panel panel-default">
						<div class="panel-body"><h4>Udaipur</h4></div>
					</div>
				</div>
				<div class="col-md-3 col-sm-12">
					<div class="about-grid-info about-grid-info1 effect-1">
						<h4>Jaipur</h4>
					</div>
				</div>
				<div class="col-md-3 col-sm-12">
					<div class="about-grid-info effect-1">
						<h4>Udaipur</h4>
					</div>
				</div-->
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about -->
	
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-grids">
				<div class="clearfix"> </div>
				<div class="copyright">
				<p>© 2018  All Rights Reserved. Developed By Team Players Developers  </p>
			</div>
			</div>
			
		</div>
	</div>
	<script>
      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
		 autocomplete.setComponentRestrictions(
            {'country': ['ind']});

      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();
		//alert(place.geometry.location.lat() + ", ==> "+ place.geometry.location.lng());
		var lat = place.geometry.location.lat();
		var lng = place.geometry.location.lng();
		window.location = "place.php?place="+place.name+"&lat="+lat+"&lng="+lng;

        //for (var component in componentForm) {
        //  document.getElementById(component).value = '';
        //  document.getElementById(component).disabled = false;
        //}
		

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        //for (var i = 0; i < place.address_components.length; i++) {
        //  var addressType = place.address_components[i].types[0];
        //  if (componentForm[addressType]) {
        //    var val = place.address_components[i][componentForm[addressType]];
        //    document.getElementById(addressType).value = val;
        // }
        //}
      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    </script>
	<!-- //footer -->
	
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVmbBtd4yZtv4qUom76tO68d-SYPU9N6o&libraries=places&callback=initAutocomplete"
        async defer></script>
	<script src="js/SmoothScroll.min.js"></script>
</body>	
</html>
