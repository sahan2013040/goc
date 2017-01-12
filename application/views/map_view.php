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
        <meta charset="utf-8">

    </head>
    <body>
        <?php $this->view('template'); ?>

        <div id="ipadMap" class="container-fluid visible-md hiden-xs col-md-8 col-md-push-4" style="margin-top: 30px">
            
        </div>

        <div id="iphoneMap" class="container-fluid visible-xs hiden-md">
            
        </div>
        
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content" style="background-color:transparent;">                 
                    <div class="modal-body">
                        <br><br>
                        <h2 id="poiHeading" class="title col-centered" style="text-align:center; "></h2>
                        <br>
                        <p id="poiText" style="text-align: center; color:white;"></p>
                        <!--<div class= "row">-->  
                          <div class="col-centered" style="margin-bottom:2%; margin-left:10%; padding-left: 90px;">
                            <button type="button" class="btn btn-default btn-lg btn-block buttonEmailFav" data-dismiss="modal" style="border: 1px solid 
                              black; width:50%; height:30px; margin-bottom:10px">Ok</button>
                           </div>
                        <!--</div>-->   
                    </div>
                </div>
            </div>
        </div>
        
        
        
        <script>
            var isiPad = /ipad/i.test(navigator.userAgent.toLowerCase());
            var isiPhone = /iphone/i.test(navigator.userAgent.toLowerCase());
            var map;
            var markers = [];
            var center = {lat: 6.923902, lng: 79.864666};
            var choosenDiv;
            var zooming;
            var locations = [
                ['THE RE.PUB.LK', 6.933841, 79.842164, 1, "../images/repub.png"],
                ['Loft Lounge', 6.897765, 79.856454, 2, "../images/loft.png"],
                ['Flamingo House', 6.9112629, 79.8683367, 3, "../images/flamingo.png"],
                ['&Co', 6.9341542, 79.8409954, 4, "../images/andco.png"],
                ['Viharamahadevi  Park', 6.9133907, 79.8617401, 5, "../images/poi.png", "The Viharamahadevi Park is a public park located in Colombo, next to the National Museum in Sri Lanka. It is the oldest and largest park of the Port of Colombo."]
            ];

            $(document).ready(function() {
                
                if (isiPad) {
                    console.log("ipad ");
                    choosenDiv = "ipadMap";
                    zooming = 14;
                } else if (isiPhone) {
                    console.log("iphone ");
                    choosenDiv = "iphoneMap";
                    zooming = 13;
                } else {
                    console.log("another device");
                }
            });

            function initMap() {
                map = new google.maps.Map(document.getElementById(choosenDiv), {
                    center: center,
                    zoom: zooming,
                    draggable: false
                });
                
                var userInfoWindow = new google.maps.InfoWindow({map: map});

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            userInfoWindow.setPosition(pos);
            userInfoWindow.setContent('Location found.');
//            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      

      
      
                for (i = 0; i < locations.length; i++) {

                    repubMarker = new google.maps.Marker({
                        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                        icon: locations[i][4],
                        title: locations[i][0],
                        animation: google.maps.Animation.DROP,
                        map: map
                    });
                    var infowindow = new google.maps.InfoWindow();
                    var content = locations[i][0];

                    google.maps.event.addListener(repubMarker, 'click', (function(repubMarker, content, infowindow) {
                        return function() {
                            infowindow.setContent(content);
                            console.log(repubMarker.title);
                            if (repubMarker.title === "THE RE.PUB.LK" || repubMarker.title === "Loft Lounge" || repubMarker.title === "Flamingo House" || repubMarker.title === "&Co") {
                                infowindow.open(map, repubMarker);
                            }
                            else {
                                $('#myModal').modal('toggle');
                                $('#poiHeading').html(repubMarker.title);
                                $('#poiText').html(locations[4][5]);
                                
                            }
                        };
                    })(repubMarker, content, infowindow));
//                    repubMarker.addListener('click', toggleBounce);
                }
            }
            
            function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        userInfoWindow.setPosition(pos);
        userInfoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
      }

//            function toggleBounce() {
//                if (marker.getAnimation() !== null) {
//                    marker.setAnimation(null);
//                } else {
//                    marker.setAnimation(google.maps.Animation.BOUNCE);
//                }
//            }

        </script>
        <script async defer 
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRfh9OTwNLMx9lFm18pWRbgXRs2Rd1h4o&callback=initMap">
        </script>
        
    </body>
</html>