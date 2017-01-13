<!DOCTYPE html>
<html lang="en">
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="/goc/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="/goc/css/style.css">
      <script src="/goc/js/jquery-3.1.1.min.js"></script>
      <script src="/goc/js/jquery.mobile-1.4.5.min.js"></script>
      <script src="/goc/js/bootstrap.js"></script>
      <script src="/goc/js/jquery.roundabout.js"></script>
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
        (function($) {

        $('.carousel').roundabout({
        minScale:0.8,
        childSelector:"li",
        autoplay:true,
        autoplayDuration:2000,
        autoplayPauseOnHover:true
      });

      }(jQuery));

          $("#contiune-Btn1").on("click", function () {
              window.location.href = '<?php echo base_url()?>/index.php/Welcome/normalSignIn';
          });

          $("#contiune-Btn").on("click", function () {
              window.location.href = '<?php echo base_url()?>/index.php/Welcome/normalSignIn';
          });
     });


          
      </script>       
   </head>
   <body>
      <img src="/goc/images/logo_iPhone.png" width="100%" height="80%">
      <br> <br> <br>      
       <div id="soundTag"></div>
       <div style="padding-right:30px; padding-bottom:40px;">          
        <button id="button_play" class="first" type="button" style="float:right;">
          <i class="glyphicon glyphicon-volume-up"></i></button>
        <button id="button_pause" class="second" type="button" style="float:right;">
          <i class="glyphicon glyphicon-volume-off"></i></button>
       </div>       
       
    <script type="text/javascript">
       
     document.getElementById("soundTag").innerHTML = "<audio autoplay volume src='/goc/sound/got.mp3'></audio>";

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
        <div id="carouse-wrap" class="container-fluid visible-md hiden-xs">
          <ul id="carousel" class="carousel top_slider roundabout-holder" style="margin-top: 75px;">
            <li style="height:580px;width:408px">
            <img src="/goc/images/treasure_hunt.jpg" alt="" class="slide" />
            </li>
            <li style="height:580px;width:408px">
              
            <img src="/goc/images/meet_123.jpg" alt="" class="slide" />
              </li>
              <li style="height:580px;width:408px">
            
            <img src="/goc/images/solve.jpg" alt="" class="slide" />
                </li>
                <li style="height:580px;width:408px">
             
            <img src="/goc/images/favourites_got.jpg" alt="" class="slide" />
              </li >
                  <li style="height:580px;width:408px">
               
          <img src="/goc/images/fun.jpg" alt="" class="slide" />
              </li>
              <li style="height:580px;width:408px">

                  <img src="/goc/images/many_more.png" alt="" class="slide" />
              </li>
              <li style="height:580px;width:408px">

                  <img src="/goc/images/cheers.jpg" alt="" class="slide" />
              </li>
          </ul>
          <button id="contiune-Btn" type="submit" class="btn btn-secondary btn-lg btn-block button" style="display: block;margin-top: 145px;margin-left: 25%;
            width: 50%;">continue</button>
        </div>
          
        <!-- iPhone-->
        <div class="row container-fluid visible-xs hiden-md" style="overflow:hidden;">
        <div id="carouse-wrap-iphone">
          <ul id="carousel" class="carousel top_slider roundabout-holder" style="margin-top: 75px;padding: 0px;position: relative;height:
                                                                                 300px;width: 400px;">
              <li style="height:580px;width:408px">
                  <img src="/goc/images/treasure_hunt.jpg" alt="" class="slide" />
              </li>
              <li style="height:580px;width:408px">

                  <img src="/goc/images/meet_123.jpg" alt="" class="slide" />
              </li>
              <li style="height:580px;width:408px">

                  <img src="/goc/images/solve.jpg" alt="" class="slide" />
              </li>
              <li style="height:580px;width:408px">

                  <img src="/goc/images/favourites_got.jpg" alt="" class="slide" />
              </li >
              <li style="height:580px;width:408px">

                  <img src="/goc/images/fun.jpg" alt="" class="slide" />
              </li>
              <li style="height:580px;width:408px">

                  <img src="/goc/images/many_more.png" alt="" class="slide" />
              </li>
              <li style="height:580px;width:408px">

                  <img src="/goc/images/cheers.jpg" alt="" class="slide" />
              </li>
          </ul>
        </div>
        <button id="contiune-Btn1" type="submit" class="btn btn-secondary btn-lg btn-block button" style="display: block;margin-top:110px;margin-left: 25%;
            width: 50%;" >
            continue
               </button>
    </div>           
        <br> 
       </div>
   </body>