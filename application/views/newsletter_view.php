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
   
      
         <div>
               <h2 class="title col-centered"> Newsletter </h2>
         </div>
         <br>
 <div style="position: relative;background: url(/goc/images/news_flamingo.jpg);width: 350px;height: 200px;background-size: contain;">

<p id="imgtext" align="center">
<b>Flamingo House</b><br>Happy Hour at Flamingo House<br>includes all drinks<br>Days:Mondays<br>Time:5.30pm till 7.30pm
</p>

</div>
<div style="position: relative;background: url(/goc/images/news_repub.jpg);width: 350px;height: 200px;background-size: contain;">

<p id="imgtext" align="center">
<b>The Re.PUB.LK</b><br>Buy one get one free on<br>Cosmopolitan cocktail and beer<br>Days:Daily<br>Time:5.30pm till 7.30pm
</p>

</div>
   </body>