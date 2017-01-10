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
               <em id="ctBtnL" class="leftImage"> </em> Create  Treasure  Hunt
               <!-- <em id="ctBtnR" class='rightImage'></em> --> </button>
         </li>
         <li>
            <button class="btn btn-secondary btn-lg btn-block menubutton">
               <em id="stBtnL" class="leftImage"> </em> Start  Treasure  Hunt <!-- <em class='rightImage'> --></em>
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
      <br> <br>
      <div id="content" class="container-fluid col-md-8 col-md-push-4">      
         <div>
               <h2 class="title col-centered"> HOW TO PLAY </h2>
               <div class="col-xs-10"><img src="../images/line_small.png" width="80%" height="50%"
                  class="img-responsive" style=" display: block; margin: 0 auto;" ></div>         
         </div>
         <br>
         <div class="form-group row ">
            <div class="col-md-12 container-fluid">
              <div id="pubInfo" style="color: white; font-size:20px;word-wrap: break-word; overflow-y:scroll;">
                1. Create a treasure hunt event by selecting a pub on the map. <br> <br>
                2. Invite friends to participate in the event and reserve the selected pub  by filling in the form on reservation page. <br> 
                  <br>
                NOTE: Friends can be added by searching their username or email on invite friends page. The invitation will be sent to the 
                user's email account along with a clue which they should solve in order to determine the location of the pub. <br> <br>
                3. A created event can be started by navigating to the Start Treasure Hunt page using the menu on the left. <br> <br>
                4. Also you can join an event by navigating to Start Treasure Hunt Page and selecting the event you would like to join. <br> 
                  <br>
                NOTE: You can  start an event only after you reach the location of the pub. <br> <br>
                TIP: Additional points will be awarded upon reaching the pub on or before start time of event.
            </div> 
            </div>
         </div>    
      </div>
   </body>