<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" /> -->
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="/goc/css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="/goc/css/style.css">
      <script src="/goc/js/jquery-3.1.1.min.js"></script>
      <script src="/goc/js/jquery.mobile-1.4.5.min.js"></script>
      <script src="/goc/js/bootstrap.js"></script>
      <script type="text/javascript" src="/goc/js/raphael.min.js"></script>
      <script type="text/javascript" src="/goc/js/wheelnav.min.js"></script>
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

         <div class="row">
            <div class="col-md-6">
                <div class="col-xs-8">
                    <h2 class="title col-centered" style="font-family: Arial;"> Total Points  560 </h2>
                </div>
                <div class="col-xs-4">
                    <img src="/goc/images/Money_bag.png" width="100%" height="100%">
                </div>
                <div style="width: 95%;height:450px;background-color: rgba(0, 0, 0, 0.50);padding: 15% 10% 5% 10%;
                            margin-top:40%;">
                <h3 class="title col-centered"> FAVOURITE PUBS</h3>
                <div class="row col-md-12">
                    <div class="col-xs-5">
                        <img src="/goc/images/lovebarFav.png" width="100%" height="50%" class="img-responsive">
                    </div>
                    <div class="col-xs-5">
                        <h4 class="form-check-label"> LOVEBAR</h4> 
                    </div>                  
                </div>
                <div class="row col-md-12">
                    <div class="col-xs-5">
                        <img src="/goc/images/repubFav.png" width="100%" height="50%" class="img-responsive">
                    </div>
                    <div class="col-xs-5">
                        <h4 class="form-check-label"> REPUBLIK</h4> 
                    </div>                  
                </div>
                <div class="row col-md-12">
                    <div class="col-xs-5">
                        <img src="/goc/images/flamingoFav.png" width="100%" height="50%" class="img-responsive">
                    </div>
                    <div class="col-xs-5">
                        <h4 class="form-check-label"> FLAMINGO</h4> 
                    </div>                  
                </div> 
                <div class="col-md-12"> 
                    <br>
                    <button type="submit" class="btn btn-secondary btn-lg btn-block button">
                    Confirm </button>
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
                      <div data-wheelnav-navitemimg='/goc/images/user.png'></div>
                      <div data-wheelnav-navitemimg='/goc/images/user.png'></div>
                      <div data-wheelnav-navitemimg='/goc/images/user.png'></div>
                      <div data-wheelnav-navitemimg='/goc/images/user.png'></div>
                      <div data-wheelnav-navitemimg='/goc/images/user.png'></div>
                      <div data-wheelnav-navitemimg='/goc/images/user.png'></div>
                </div>
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
   </body>