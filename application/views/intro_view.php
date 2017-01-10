<!DOCTYPE html>
<html lang="en">
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="../css/style.css">
      <script src="../js/jquery-3.1.1.min.js"></script>
      <script src="../js/jquery.mobile-1.4.5.min.js"></script>
      <script src="../js/bootstrap.js"></script>
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
          
      </script>       
   </head>
   <body>
      <img src="../images/logo_iPhone.png" width="100%" height="80%">
      <br> <br> <br>      
       <div id="soundTag"></div>
       <div style="padding-right:30px; padding-bottom:40px;">          
        <button id="button_play" class="first" type="button" style="float:right;">
          <i class="glyphicon glyphicon-volume-up"></i></button>
        <button id="button_pause" class="second" type="button" style="float:right;">
          <i class="glyphicon glyphicon-volume-off"></i></button>
       </div>       
       
    <script type="text/javascript">
       
      document.getElementById("soundTag").innerHTML = "<audio autoplay volume src='../sound/got.mp3'></audio>";

     $('#button_play').on('click', function() {
      $('#button_pause').show();
      $('#button_play').hide();
      $('audio')[0].pause();
    });
    $('#button_pause').on('click', function() {
      $('#button_play').show();
      $('#button_pause').hide();
      $('audio')[0].play();
    });

    </script>
       
      <div id="content" class="container-fluid">          
        
        <!-- iPad-->
        <div id="myCarousel" class="carousel slide container-fluid visible-md hidden-xs" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="../images/pub2.jpg" class="img-responsive" >
            </div>

            <div class="item">
              <img src="../images/pub2.jpg" class="img-responsive" >
            </div>
          
            <div class="item">
              <img src="../images/pub2.jpg" class="img-responsive" >
            </div>

            <div class="item">
              <img src="../images/pub2.jpg" class="img-responsive" >
            </div>
          </div>
            
          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
          
        <!-- iPhone-->
        <div id="myCarousel" class="carousel slide container-fluid visible-xs hidden-md " data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="../images/pub2.jpg" style="height:450px;" class="img-responsive" >
            </div>

            <div class="item">
              <img src="../images/pub2.jpg" style="height:450px;" class="img-responsive" >
            </div>
          
            <div class="item">
              <img src="../images/pub2.jpg" style="height:450px;" class="img-responsive" >
            </div>

            <div class="item">
              <img src="../images/pub2.jpg" style="height:450px;" class="img-responsive" >
            </div>
          </div>
            
          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
         
        <br>       
         <button type="submit" class="btn btn-secondary btn-lg btn-block button" style=" display: block;margin: auto;
            width: 50%;">
              CONTINUE </button>
       </div>
   </body>