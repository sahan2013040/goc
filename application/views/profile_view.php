<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" /> -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="/goc/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="/goc/css/style.css">
		<style type="text/css">
			.modal-contentBoth {
			background:url('/goc/images/brown_paper.jpg');
			background-repeat: no-repeat;
			background-size: cover;
			}
			.modalBoth:before {
			content: '';
			display: inline-block;
			height: 100%;
			vertical-align: middle;
			margin-right: -4px;
			}
			.modal-dialogBoth {
			display: inline-block;
			text-align: left;
			vertical-align: middle;
			}
		</style>
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
                
                
            $('#newsletterBtn').click(function () {
             loadMyView('<?php echo base_url() ?>index.php/menuController/newsletter');
            });
             $('#selectCharacterBtn').click(function () {
                loadMyView('<?php echo base_url() ?>index.php/menuController/selectCharacter');
            });
			  });
		</script>   
	</head>
	<body>
		<div class="container-fluid visible-md hidden-xs">
		<!-- iPad -->
		<div class="row">
			<div class="col-md-6">
				<div class="col-xs-8">
					<h2 class="title col-centered" style="font-family: Arial;"> Total Points  560 </h2>
				</div>
				<div class="col-xs-4" style="margin-top:5%;">
					<img src="/goc/images/Money_bag.png" width="100%" height="100%">
				</div>
				<div style="width: 95%;height:450px;background-color: rgba(0, 0, 0, 0.50);padding: 15% 10% 5% 10%;
					margin-top:40%;">
					<h3 class="title col-centered"> FAVOURITE PUBS</h3>
					<!-- for one pub-->
					<?php foreach($pubs as $pub){?>
					<div class="row col-md-12" style="margin-bottom: 5%;">
						<div class="col-xs-5">
							<img src="<?php echo $pub->icon;?>" width="100%" height="60%" class="img-responsive">
							<input type="hidden" value="<?php echo $pub->name;?>" name="pubid">
						</div>
						<div class="col-xs-5">
							<h4 class="form-check-label"> <?php echo $pub->name;?> </h4>
						</div>
					</div>
					<br>
					<?php } ?>
					<div class="col-md-12"> 
						<br>
						<button type="submit" id="emailiPad" class="btn btn-secondary btn-lg btn-block button" data-toggle="modal" 
							href="#emailFaviPad">
						EMAIL </button>
					</div>
					<div class="modal fade" id="emailFaviPad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog" style=" margin-left: 250px;">
							<div class="modal-contentBoth">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									<h4 class="modal-title title" style="color:black;"> EMAIL FAVOURITES</h4>
								</div>
								<div class="modal-bodyBoth">
									<div class="light">
										<form>
											<span><input type="text" class="search rounded" placeholder="Search"></span>
										</form>
									</div>
									<!-- For one user --> 
									<?php foreach($users as $u){?>
									<div class="form-group row">
										<div class="col-md-12">
											<div class="form-check">
												<label class="form-check-label" style="color:black;font-size:20px;">
												<input name="userCheck" class="form-check-input" type="checkbox" value="<?php echo $u->email;?>">
												<img src="/goc/images/user.png" style="width: 15%;height: 15%;padding-right: 2%;padding-left: 2%;">
												<?php echo $u->name;?>
												</label>
											</div>
										</div>
									</div>
									<?php } ?>
								</div>
								<div class="modal-footer">
									<div class= "row">
										<div class="col-xs-6">
											<button type="button" class="btn btn-default btn-lg btn-block buttonEmailFav" id="emailFavBtn">Email</button>
										</div>
										<div class="col-xs-6">
											<button type="button" id="canceliPad" class="btn btn-default btn-lg btn-block buttonEmailFav" data- 
												dismiss="modal">Cancel</button>
										</div>
									</div>
								</div>
							</div>
							<!-- /.modal-content -->
						</div>
						<!-- /.modal-dialog -->
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div>
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
						<div>
							<h2 class="title col-centered"> Newsletter </h2>
						</div>
						<br>
						<div style="position: relative;background: url(../../images/news_flamingo.jpg);width: 300px;height: 200px;background-size:
							contain;">
							<p id="imgtext" align="center">
								<b>Flamingo House</b><br>Happy Hour at Flamingo House<br>includes all drinks<br>Days:Mondays<br>Time:5.30pm till 7.30pm
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
		<!-- iPhone-->
		<div class="container-fluid visible-xs hidden-md">
			<div>
				<h2 class="title col-centered"> POINTS COLLECTED </h2>
			</div>
			<div class="row">
				<div class="col-xs-3">
					<img src="/goc/images/crown.png" width="100%" height="80%" class="img-responsive">
				</div>
				<div class="col-xs-6">
					<h1 class="title" style="color:yellow; font-size:44px;"> 100,000</h1>
				</div>
				<div class="col-xs-3">
					<img src="/goc/images/crown.png" width="100%" height="80%" class="img-responsive">
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-12">
					<h2 class="title col-centered"> FAVOURITES </h2>
				</div>
			</div>
			<!-- for one pub-->
			<?php foreach($pubs as $pub){?>
			<div class="row">
				<div class="col-xs-3">
					<img src="<?php echo $pub->icon;?>" width="100%" height="50%" class="img-responsive">
				</div>
				<div class="col-xs-7">
					<h4 class="title"><?php echo $pub->name;?></h4>
				</div>
				<div class="col-xs-2">
					<a href="#">
					<img src="/goc/images/rightarrow.png" width="80%" height="50%" class="img-responsive">
					</a>
				</div>
			</div>
			<?php } ?>
			<br>
			<div class="col-md-12">
				<button type="submit" class="btn btn-secondary btn-lg btn-block button" id="newsletterBtn"> 
				NEWSLETTER</button>
				<button type="submit" class="btn btn-secondary btn-lg btn-block button" id="selectCharacterBtn" > 
				SELECT CHARACTER </button>
				<button type="submit" class="btn btn-secondary btn-lg btn-block button" data-toggle="modal" href="#emailFav" > 
				EMAIL FAVOURITES </button>
			</div>
			<br>
			<div class="modal fade" id="emailFav" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-contentBoth">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h4 class="modal-title title" style="color:black;"> EMAIL FAVOURITES</h4>
						</div>
						<div class="modal-bodyBoth">
							<div class="light">
								<form>
									<span><input type="text" class="search rounded" placeholder="Search"></span>
								</form>
							</div>
							<!-- For one user --> 
							<?php foreach($users as $u){?>
							<div class="form-group row">
								<div class="col-md-12">
									<div class="form-check">
										<label class="form-check-label" style="color:black;font-size:20px;">
										<input name="userCheckiPhone" class="form-check-input" type="checkbox" value="<?php echo $u->email;?>">
										<img src="/goc/images/user.png" style="width: 15%;height: 15%;padding-right: 2%;padding-left: 2%;">
										<?php echo $u->name;?>
										</label>
									</div>
								</div>
							</div>
							<?php } ?>          
						</div>
						<div class="modal-footer">
							<div class= "row">
								<div class="col-xs-6">
									<button type="button" id="emailFavBtniPhone" class="btn btn-default btn-lg btn-block buttonEmailFav" data-
										dismiss="modal">Email</button>
								</div>
								<div class="col-xs-6">
									<button type="button" class="btn btn-default btn-lg btn-block buttonEmailFav" data-dismiss="modal">Cancel</button>
								</div>
							</div>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
		</div>
	</body>