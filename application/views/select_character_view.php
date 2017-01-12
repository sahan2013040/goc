<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" /> -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="/goc/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="/goc/css/style.css">
		<script src="/goc/js/jquery-1.9.js"></script>
		<script src="/goc/js/jquery.mobile-1.4.5.min.js"></script>
		<script src="/goc/js/bootstrap.js"></script>
		<script type="text/javascript" src="/goc/js/raphael.min.js"></script>
		<script type="text/javascript" src="/goc/js/wheelnav.min.js"></script> 
		<script src="/goc/js/action.js"></script>
        <script src="/goc/js/myFunctions.js"></script>
		<script type="application/javascript">
			
			$( document ).ready(function() {
			var isiPad = /ipad/i.test(navigator.userAgent.toLowerCase());
			var isiPhone = /iphone/i.test(navigator.userAgent.toLowerCase());
			if (isiPad){
			console.log("ipad ");
			} else if (isiPhone){
			console.log("iphone ");
			} else {
			console.log("another device");
			}
		
                 
			var piemenu = new wheelnav('piemenu');
            piemenu.wheelRadius = piemenu.wheelRadius * 0.83;
            piemenu.createWheel();
			});
			
      
		</script>  
	</head>
	<body>

			<div>
				<h2 class="title col-centered"> Select Character </h2>
			</div>
			<br>
            <div id=menucontainer>
               <div id='piemenu' data-wheelnav
							data-wheelnav-slicepath='PieSlice'
							data-wheelnav-marker data-wheelnav-markerpath='DropMarker'
							data-wheelnav-navangle='0'
							data-wheelnav-titleheight='40'
							data-wheelnav-cssmode 
							data-wheelnav-init>
							<div  data-wheelnav-navitemimg='/goc/images/jaime.png'></div>
							<div  data-wheelnav-navitemimg='/goc/images/Arya.png'></div>
							<div  data-wheelnav-navitemimg='/goc/images/jon_snow.png'></div>
							<div  data-wheelnav-navitemimg='/goc/images/Cersei.png'></div>
							<div  data-wheelnav-navitemimg='/goc/images/tyrion.png'></div>
							<div  data-wheelnav-navitemimg='/goc/images/daenarys.png'></div>
						</div>
            </div>

			<br> <br>
		</div>
	</body>