<!DOCTYPE html>
<html lang="en">

<head>
	<title>Contact Me-sbastola.com.np</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Bootstrap -->
    <link href='http://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lora:700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Josefin+Slab:700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
	 <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
      function initialize() {
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
          center: new google.maps.LatLng(27.708496 , 85.34657),
          zoom: 15,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</head>

<body>

	<section>
		<div class="top-bar">
<div class="container">
			<!--<div class="row"><div class="col-md-3"><center><a href="tel:+9779843458128">+977(984) 345 - 8128
			</a></center></div>
            <div class="col-md-3"><center><a href="tel:+19893125578">+1(989) 312 - 5578
			</a></center></div>
			<div class="row"><div class="col-md-3"><center><a href="mailto:bastolasuraj@hotmail.com">bastolasuraj@hotmail.com
			</a></center></div>
            <div class="col-md-3"><center><a href="mailto:bastolasuraj@gmail.com">bastolasuraj@gmail.com
			</a></center></div>
		</div>
</div>-->
</div>
</div>
	</section>
    
    <?php
		//include "inc/top.php";
	?>
    
<section>
    <div class="descripta">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-2">
                <center><a href="tel:+9779843458128">
                <img src="img/1426937930_phone-512.png" width="150px"></a>
                </center>
                </div>
                <div class="col-md-2">
                <center><a href="mailto:bastolasuraj@hotmail.com">
                <img src="img/1426937930_email-512.png" width="150px"></a>
                </center>
                </div>
                <div class="col-md-2">
                <center><a href="http://www.facebook.com/bastolasuraj">
                <img src="img/1426937930_facebook-512.png" width="150px"></a>
                </center>
                </div>
                <div class="col-md-2">
                <center><a href="http://www.twitter.com/bastolasuraj">
                <img src="img/1426937937_twitter-512.png" width="150px"></a>
                </center>
                </div>
                <div class="col-md-2">
                <center><a href="https://plus.google.com/u/1/+%E0%A4%B8%E0%A5%81%E0%A4%B0%E0%A4%9C%E0%A4%AC%E0%A4%BE%E0%A4%B8%E0%A5%8D%E0%A4%A4%E0%A5%8B%E0%A4%B2%E0%A4%BE/posts">
                <img src="img/1426938028_google_plus-512.png" width="150px"></a>
                </center>
                </div>
                <div class="col-md-2">
                <center><a href="https://www.instagram.com/bastolasuraj">
                <img src="img/1431121457_instagram-512.png" width="150px"></a>
                </center>
                </div>
            </div>
        </div>
    </div>
    
    </section>    

	
    
    <section>
    
    <div id="map-canvas"></div>
   
    </section>
<section>
    	<div class="footer">
        	<div class="container">
            	<div class="row">
                	<div class="col-md-4">
                    &copy; All Rights Reserved. Suraj Bastola 2015
                    </div>
                    <div class="col-md-4">
                    Website Designed by: Suraj Bastola
                    </div>
                    <div class="col-md-4">
                    Always yours one of the well wishers.
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>