<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" /> -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link rel="stylesheet" type="text/css" href="../css/jquery.scrollable.css" />
		<script src="../js/jquery-3.1.1.min.js"></script>
		<script src="../js/jquery.mobile-1.4.5.min.js"></script>
		<script src="../js/bootstrap.js"></script>
		<script type="text/javascript" src="../js/jquery.scrollable.js"></script>
		<script type="application/javascript">
			$(document).ready(function() {
			             var isiPad = /ipad/i.test(navigator.userAgent.toLowerCase());
			             var isiPhone = /iphone/i.test(navigator.userAgent.toLowerCase());
			             if (isiPad) {
			                 console.log("ipad ");
			             } else if (isiPhone) {
			                 console.log("iphone ");
			             } else {
			                 console.log("another device");
			             }
			         });
			
			     $(function() {
                      console.log("clicked");
			         var root = $(".wizard").scrollable();
			
			         // some variables that we need
			         var api = root.scrollable(),
			             drawer = $("#drawer");
			
			
			             // update status bar
			             $("#status li").removeClass("active").eq(0).addClass("active");
			
			         // if tab is pressed on the next button seek to next page
			         root.find("button.next").keydown(function(e) {
			             if (e.keyCode == 9) {
			
			                 // seeks to next tab by executing our validation routine
			                 api.next();
			                 e.preventDefault();
			             }
			         });
			     });
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
						<em id="stBtnL" class="leftImage"> </em> Start Treasure Hunt <!-- <em class='rightImage'> -->
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
				<h2 class="title col-centered"> Pub Crawl </h2>
			</div>
			<br>
			<div id="ipadClues" class="container-fluid visible-md hiden-xs" style="background: rgba(0, 0, 0, 0.50);width: 95%;height: 300px;margin-left: 2%;">
				<div id="wizard" class="carousel slide wizard" data-ride="carousel" data-interval="false">
					 <!--Indicators--> 
					<ul id="status" class="carousel-indicators" style="left: 25%;top: 20%;">
						<li data-target=".wizard" data-slide-to="0" class="active" style="margin-left: -5px;">
							<p style="
								text-indent: 0%;
								color: white;
								font-size: 16px;
								">1</p>
						</li>
						<li style="margin-left: 25px;" data-target=".wizard" data-slide-to="1">
							<p style="
								text-indent: 0%;
								color: white;
								font-size: 16px;
								">2</p>
						</li>
						<li style="margin-left: 25px;" data-target=".wizard" data-slide-to="2">
							<p style="
								text-indent: 0%;
								color: white;
								font-size: 16px;
								">3</p>
						</li>
						<li style="margin-left: 25px;" data-target=".wizard" data-slide-to="3">
							<p style="
								text-indent: 0%;
								color: white;
								font-size: 16px;
								">4</p>
						</li>
					</ul>
					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<div class="item active">
							<p align="center" style="margin: 10% 40% 10% 15%;color:#fff;font-family:Arial;font-size:20px">Go through the place, that hosts the chairs,<br>The price is hidden on the ???? </p>
						</div>
						<div class="item">
							<p align="center" style="margin: 10% 40% 10% 15%;color:#fff;font-family:Arial;font-size:20px">Go through the place, that hosts the chairs,<br>The price is hidden on the ???? </p>
						</div>
						<div class="item">
							<p align="center" style="margin: 10% 40% 10% 15%;color:#fff;font-family:Arial;font-size:20px">Go through the place, that hosts the chairs,<br>The price is hidden on the ???? </p>
						</div>
						<div class="item">
							<p align="center" style="margin: 10% 40% 10% 15%;color:#fff;font-family:Arial;font-size:20px">Go through the place, that hosts the chairs,<br>The price is hidden on the ???? </p>
						</div>
					</div>
					<!-- Left and right controls -->
					<a class="left carousel-control" href=".wizard" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href=".wizard" role="button" data-slide="next" style="left: 60%;">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
					</a>
				</div>
            </div>
            <!--iphone div-->
            
            <div id="iphoneClues" class="container-fluid visible-xs hiden-md" style="background: rgba(0, 0, 0, 0.50);width: 95%;height: 250px;margin-left: 2%;">
				<div class="carousel slide wizard" data-ride="carousel" data-interval="false" style="height: 250px;">
					 <!--Indicators--> 
					<ul id="status" class="carousel-indicators" style="left: 20%;top: 20%;">
						<li data-target=".wizard" data-slide-to="0" class="active" style="margin-left: -5px;">
							<p style="
								text-indent: 0%;
								color: white;
								font-size: 16px;
								">1</p>
						</li>
						<li style="margin-left: 25px;" data-target=".wizard" data-slide-to="1">
							<p style="
								text-indent: 0%;
								color: white;
								font-size: 16px;
								">2</p>
						</li>
						<li style="margin-left: 25px;" data-target=".wizard" data-slide-to="2">
							<p style="
								text-indent: 0%;
								color: white;
								font-size: 16px;
								">3</p>
						</li>
						<li style="margin-left: 25px;" data-target=".wizard" data-slide-to="3">
							<p style="
								text-indent: 0%;
								color: white;
								font-size: 16px;
								">4</p>
						</li>
					</ul>
					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<div class="item active">
							<p align="center" style="margin: 30% 20% 10% 19%;color:#fff;font-family:Arial;font-size:20px;">Go through the place, that hosts the chairs,<br>The price is hidden on the ???? </p>
						</div>
						<div class="item">
							<p align="center" style="margin: 30% 20% 10% 19%;color:#fff;font-family:Arial;font-size:20px;">Go through the place, that hosts the chairs,<br>The price is hidden on the ???? </p>
						</div>
						<div class="item">
							<p align="center" style="margin: 30% 20% 10% 19%;color:#fff;font-family:Arial;font-size:20px;">Go through the place, that hosts the chairs,<br>The price is hidden on the ???? </p>
						</div>
						<div class="item">
							<p align="center" style="margin: 30% 20% 10% 19%;color:#fff;font-family:Arial;font-size:20px;">Go through the place, that hosts the chairs,<br>The price is hidden on the ???? </p>
						</div>
					</div>
					<!-- Left and right controls -->
					<a class="left carousel-control" href=".wizard" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href=".wizard" role="button" data-slide="next" style="left: 85%;">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
			<br> <br>
			<div class="col-md-12">
				<button type="submit" class="btn btn-secondary btn-lg btn-block button">
				<img src="../images/scanqr.png" height="50px" width="50px" style="margin: 0px 10px 0px -50px;">SCAN QR CODE </button>
				<br>  
				<button type="submit" class="btn btn-secondary btn-lg btn-block button">
				END EVENT </button>
				<br>  
			</div>
           
		</div>
	</body>