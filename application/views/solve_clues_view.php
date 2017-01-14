<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
	<head>
		<!-- <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" /> -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" type="text/css" href="/goc/css/bootstrap.css">
                <link rel="stylesheet" type="text/css" href="/goc/css/style.css">
                <link rel="stylesheet" type="text/css" href="/goc/css/jquery.scrollable.css" />
                <script src="/goc/js/jquery-3.1.1.min.js"></script>
                <script src="/goc/js/jquery.mobile-1.4.5.min.js"></script>
                <script src="/goc/js/bootstrap.js"></script>
                <script type="text/javascript" src="/goc/js/jquery.scrollable.js"></script>
		<script type="application/javascript">
                    var isiPad = /ipad/i.test(navigator.userAgent.toLowerCase());
			             var isiPhone = /iphone/i.test(navigator.userAgent.toLowerCase());
			$(document).ready(function() {
			             
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
                             
                             function scanQR() {
                                     // JavaScript to send an action to your Objective-C code
                    var myAppName = 'myfakeappname';
                    var myActionType = 'myJavascriptActionType';
                    var myActionParameters = {}; // put extra info into a dict if you need it

                    // (separating the actionType from parameters makes it easier to parse in ObjC.)
                    var jsonString = (JSON.stringify(myActionParameters));
                    var escapedJsonParameters = escape(jsonString);
                    var url = myAppName + '://' + myActionType + "#" + escapedJsonParameters;
                    document.location.href = url;
                                 }
                                 
                                function onScan(qrcode){
                                    var myvar = getURLParameter('username');
                                    console.log(myvar);
                                    addPoints(myvar);
                                    if (isiPad) {
			                 console.log("ipad ");
                                         if(qrcode === 1){
                                             $('#cluesolvedmodal').modal('toggle');
                                        $("#1_ipad").css("background","green");
                                    }
                                    else if(qrcode === 2){
                                        $('#cluesolvedmodal').modal('toggle');
                                        $("#2_ipad").css("background","green");
                                    }
                                    else if(qrcode === 3){
                                        $('#cluesolvedmodal').modal('toggle');
                                        $("#3_ipad").css("background","green");
                                    }
                                    else if(qrcode === 4){
                                        $('#cluesolvedmodal').modal('toggle');
                                        $("#4_ipad").css("background","green");
                                    }
			             } else if (isiPhone) {
			                 console.log("iphone ");
                                         if(qrcode === 1){
                                             $('#cluesolvedmodal').modal('toggle');
                                        $("#1").css("background","green");
                                    }
                                    else if(qrcode === 2){
                                        $('#cluesolvedmodal').modal('toggle');
                                        $("#2").css("background","green");
                                    }
                                    else if(qrcode === 3){
                                        $('#cluesolvedmodal').modal('toggle');
                                        $("#3").css("background","green");
                                    }
                                    else if(qrcode === 4){
                                        $('#cluesolvedmodal').modal('toggle');
                                        $("#4").css("background","green");
                                    }
			             }                                   
                                }

                    function addPoints($username){
                        $.ajax({
                            url: "<?php echo base_url(); ?>index.php/Welcome/addPointsToUser",
                            type: "get", //send it through get method
                            data: {
                                username: $username,
                                points: 5

                            },
                            success: function (rsponse) {

                            },
                            error: function (xhr) {
//                      console.log('ok');
                            }
                        });
                    }

                    function getURLParameter(name) {
                        return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search) || [null, ''])[1].replace(/\+/g, '%20')) || null;
                    }

                    $('#endEvent-Btn').click(function () {
                        var myvar = getURLParameter('username');
                        loadMyView('<?php echo base_url(); ?>index.php/Billing');
//                        loadMyView('<?php //echo base_url(); ?>//index.php/pay/redeem?user='+myvar);

                    });
		</script>   
	</head>
	<body>
		
		<div>
			<div>
				<h2 class="title col-centered"> Pub Crawl </h2>
			</div>
			<br>
			<div id="ipadClues" class="container-fluid visible-md hiden-xs" style="background: rgba(0, 0, 0, 0.50);width: 95%;height: 300px;margin-left: 2%;">
				<div id="wizard" class="carousel slide wizard" data-ride="carousel" data-interval="false">
					 <!--Indicators--> 
					<ul id="status" class="carousel-indicators" style="left: 25%;top: 20%;">
                                            <li id="1_ipad" data-target=".wizard" data-slide-to="0" class="active" style="margin-left: -5px;">
							<p style="
								text-indent: 0%;
								color: white;
								font-size: 16px;
								">1</p>
						</li>
						<li id="2_ipad" style="margin-left: 25px;" data-target=".wizard" data-slide-to="1">
							<p style="
								text-indent: 0%;
								color: white;
								font-size: 16px;
								">2</p>
						</li>
						<li id="3_ipad" style="margin-left: 25px;" data-target=".wizard" data-slide-to="2">
							<p style="
								text-indent: 0%;
								color: white;
								font-size: 16px;
								">3</p>
						</li>
						<li id="4_ipad" style="margin-left: 25px;" data-target=".wizard" data-slide-to="3">
							<p style="
								text-indent: 0%;
								color: white;
								font-size: 16px;
								">4</p>
						</li>
					</ul>
					<!-- Wrapper for slides -->
                                        <br><br><br>
                                        <div class="carousel-inner">
                                            
                                            <div class="item active">
                                             <?php 
                                                    foreach ($clues as $clue) {
//                                                  echo $clue->clue_id;
                                                    echo '<p id="ipadClue01" align="center" style="margin: 10% 40% 10% 15%;color:#fff;font-family:Arial;font-size:20px">'.$clue->clue_1.'</p>';    
                                                    echo '</div>';
                                                    echo '<div class="item">';
                                                    echo '<p id="ipadClue02" align="center" style="margin: 10% 40% 10% 15%;color:#fff;font-family:Arial;font-size:20px">'.$clue->clue_2.'</p>';    
                                                    echo '</div>';
                                                    echo '<div class="item">';
                                                    echo '<p id="ipadClue03" align="center" style="margin: 10% 40% 10% 15%;color:#fff;font-family:Arial;font-size:20px">'.$clue->clue_3.'</p>';    
                                                    echo '</div>';
                                                    echo '<div class="item">';
                                                    echo '<p id="ipadClue04" align="center" style="margin: 10% 40% 10% 15%;color:#fff;font-family:Arial;font-size:20px">'.$clue->clue_4.'</p>';    
                                                    echo '</div>';
                                                    
                                                    } ?>
						
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
					<ul id="status" class="carousel-indicators" style="left: 20%;top: 45px;">
						<li id="1" data-target=".wizard" data-slide-to="0" class="active" style="margin-left: -5px;">
							<p style="
								text-indent: 0%;
								color: white;
								font-size: 16px;
								">1</p>
						</li>
						<li id="2" style="margin-left: 25px;" data-target=".wizard" data-slide-to="1">
							<p style="
								text-indent: 0%;
								color: white;
								font-size: 16px;
								">2</p>
						</li>
						<li id="3" style="margin-left: 25px;" data-target=".wizard" data-slide-to="2">
							<p style="
								text-indent: 0%;
								color: white;
								font-size: 16px;
								">3</p>
						</li>
						<li id="4" style="margin-left: 25px;" data-target=".wizard" data-slide-to="3">
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
                                                    <?php 
                                                    foreach ($clues as $clue) {
//                                                  echo $clue->clue_id;
                                                    echo '<p id="iphoneClue01" align="center" style="margin: 30% 20% 10% 19%;color:#fff;font-family:Arial;font-size:20px;">'.$clue->clue_1.'</p>';    
                                                    echo '</div>';
                                                    echo '<div class="item">';
                                                    echo '<p id="iphoneClue01" align="center" style="margin: 30% 20% 10% 19%;color:#fff;font-family:Arial;font-size:20px;">'.$clue->clue_2.'</p>';    
                                                    echo '</div>';
                                                    echo '<div class="item">';
                                                    echo '<p id="iphoneClue01" align="center" style="margin: 30% 20% 10% 19%; color:#fff; font-family:Arial; font-size:20px; overflow: scroll;">'.$clue->clue_3.'</p>';    
                                                    echo '</div>';
                                                    echo '<div class="item">';
                                                    echo '<p id="iphoneClue01" align="center" style="margin: 30% 20% 10% 19%;color:#fff;font-family:Arial;font-size:20px; over">'.$clue->clue_4.'</p>';    
                                                    echo '</div>';
                                                    
                                                    } ?>
						
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
				<button type="submit" onclick="scanQR()" class="btn btn-secondary btn-lg btn-block button" style="border: 3px solid; over">
                                    <img src="/goc/images/scanqr.png" height="50px" width="50px" style="margin: 0px 10px 0px -50px;">SCAN QR CODE </button>
				<br>  
                                <button id="endEvent-Btn" type="submit" class="btn btn-secondary btn-lg btn-block button" style="border: 3px solid;">
				END EVENT </button>
				<br>  
			</div>
           
		</div>
            
            <div id="cluesolvedmodal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content" style="background-color:transparent;">                 
                    <div class="modal-body">
                        <br><br>
                        <h2 class="title col-centered" style="text-align:center; ">Congrats   you   have</h2>
                       
                        <h2 class="title col-centered" style="text-align:center; ">solved   the   clue</h2>
                        <div class= "row">  
                          <div class="col-centered" style="margin-top:10%; margin-left:10%; padding-left: 90px;">
                            <button type="button" class="btn btn-default btn-lg btn-block buttonEmailFav" data-dismiss="modal" style="border: 3px solid 
                              black; width:50%;">Ok</button>
                           </div>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
	</body>