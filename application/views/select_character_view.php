<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" /> -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<script src="../js/jquery-3.1.1.min.js"></script>
		<script src="../js/jquery.mobile-1.4.5.min.js"></script>
		<script src="../js/bootstrap.js"></script>
        <script type="text/javascript" src="../js/raphael.min.js"></script>
        <script type="text/javascript" src="../js/wheelnav.min.js"></script>
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
		
			});
			
        window.onload = function () {
           
			var piemenu = new wheelnav('piemenu');
piemenu.wheelRadius = piemenu.wheelRadius * 0.83;
piemenu.createWheel();
		
        };
		</script>  
	</head>
	<body>
		<img src="../images/logo_iPhone.png" width="100%" height="80%">
		<div id="ipadM" class="menu opened container-fluid visible-md hiden-xs" style="margin-top: 30px">
			<br>
			<img src="../images/user.png" id="userImg" width="50%" height="30%">
			<label class="username"> John Snow </label>
			<ul>
				<li>
					<button class="btn btn-secondary btn-lg btn-block menubutton">
						<em id="ctBtnL" class="leftImage"> </em> Create  Treasure  Hunt
						<!-- <em id="ctBtnR" class='rightImage'></em> --> 
					</button>
				</li>
				<li>
					<button class="btn btn-secondary btn-lg btn-block menubutton">
						<em id="stBtnL" class="leftImage"> </em> Start  Treasure  Hunt <!-- <em class='rightImage'> -->
					</button>
				</li>
				<li>
					<button class="btn btn-secondary btn-lg btn-block menubutton">
						<em id="profileBtnL" class="leftImage"> </em> Profile <!-- <em class='rightImage'></em> --> 
					</button>
				</li>
				<li>
					<button class="btn btn-secondary btn-lg btn-block menubutton">
						<em id="helpBtnL" class="leftImage"> </em> Help <!-- <em class='rightImage'> --> 
					</button>
				</li>
			</ul>
		</div>
		<div id="iphoneM" class="container-fluid visible-xs hiden-md">
			<table width="90%" cellspacing="0" cellpadding="0" border="0" id="Table_01">
				<tr>
					<td><a href="#"><img width="60%" height="14.5%" alt="" src="../images/ct.png"/></a></td>
					<td><a href="#"><img width="60%" height="15%" alt="" src="../images/st.png"/></a></td>
					<td><a href="#"><img width="60%" height="15%" alt="" src="../images/person.png"/></a></td>
					<td><a href="#"><img width="250%" height="65%" alt="" src="../images/help.png"/></a></td>
				</tr>
			</table>
		</div>
		<br> <br>
		<div id="content" class="container-fluid col-md-8 col-md-push-4">
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
  <div data-wheelnav-navitemimg='../images/user.png'></div>
  <div data-wheelnav-navitemimg='../images/user.png'></div>
  <div data-wheelnav-navitemimg='../images/user.png'></div>
  <div data-wheelnav-navitemimg='../images/user.png'></div>
  <div data-wheelnav-navitemimg='../images/user.png'></div>
  <div data-wheelnav-navitemimg='../images/user.png'></div>
</div>
            </div>

			<br> <br>
		</div>
	</body>