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
      <div id="ipadM" class="menu opened container-fluid visible-md hiden-xs" style="margin-top: 30px">
      <br>
      <img src="../images/user.png" id="userImg" width="50%" height="30%">
      <label class="username"> John Snow </label>
      <ul>
         <li>
            <button class="btn btn-secondary btn-lg btn-block menubutton">
               <em id="ctBtnL" class="leftImage"> </em> Create Treasure Hunt
               <!-- <em id="ctBtnR" class='rightImage'></em> --> </button>
         </li>
         <li>
            <button class="btn btn-secondary btn-lg btn-block menubutton">
               <em id="stBtnL" class="leftImage"> </em> Start Treasure Hunt <!-- <em class='rightImage'> --></em>
            </button>
         </li>
         <li>
            <button class="btn btn-secondary btn-lg btn-block menubutton">
               <em id="profileBtnL" class="leftImage"> </em> Profile <!-- <em class='rightImage'></em> --> </button>
         </li>
         <li>
            <button class="btn btn-secondary btn-lg btn-block menubutton">
               <em id="helpBtnL" class="leftImage"> </em> Help <!-- <em class='rightImage'> --></em> </button>
         </li>
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

      <div id="content" class="container-fluid col-md-8 col-md-push-4"> 
         <div class="container-fluid visible-md hiden-xs">   
           <div style="padding-top:5%;">              
              <div class="row">
                <div class="col-md-9">
                  <h2 class="reservationTitle"> PUB NAME </h2> </div>
                <div class="col-md-3"><img src="../images/favourite.png" width="50%" height="50%"
                  class="img-responsive" ></div>
              </div>
           </div>
          
          </div>
         <br> 

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
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
        <br>
        <div class="container-fluid visible-xs hiden-md">   
           <div style="padding-top:5%;">              
              <div class="row">
                <div class="col-xs-9">
                  <h2 class="reservationTitle"> PUB NAME </h2> </div>
                <div class="col-xs-3"><img src="../images/favourite.png" width="100%" height="100%"
                  class="img-responsive"></div>
              </div>
           </div>          
        </div>
          <br>
         <div id="pubInfo" style="color: white;">
           In my younger and more vulnerable years my father gave me some advice that I've been turning over in my mind ever since. 'Whenever you feel like criticizing anyone,' he told me, 'just remember that all the people in this world haven't had the advantages that you've had.'
         </div> 
         <button type="submit" class="btn btn-secondary btn-lg btn-block button">
              CREATE EVENT </button>
       </div>
   </body>