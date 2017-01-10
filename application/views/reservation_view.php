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
         <div>
               <h2 class="reservationTitle col-centered"> Reservation </h2>
         </div>
         <br>
         <div class="form-group row">
            <div class="col-md-12">
               <input class="form-control input" type="text" name="name" id="name" placeholder="NAME"
                  required>
            </div>
         </div>
         <div class="form-group row">
            <div class="col-md-12">
               <input class="form-control input"  type="number" name="telNo" id="telNo" placeholder="TELEPHONE NUMBER"
                  required>
            </div>
         </div>
         <div class="form-group row">
            <div class="col-md-12">
               <input class="form-control input"  type="number" min="1" max="100" name="guests" id="guests" placeholder="NO. OF GUESTS"
                  required>
            </div>
         </div>
         <div class="form-group row">
            <div class="col-md-12">
               <input  class="form-control input"  type="text" name="date" id="date" placeholder="DATE" onfocus="(this.type='date')"
                  required>  
            </div>
         </div>
         <div class="form-group row">
            <div class="col-md-12">
               <input  class="form-control input"  type="text" name="time" id="time" placeholder="TIME" onfocus="(this.type='time')"
                  required>
            </div>
         </div>
         <br> <br>
         <div class="col-md-12">
            <button type="submit" class="btn btn-secondary btn-lg btn-block button">
            Confirm </button>
            <br>
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

            <div id="myModal" class="modal fade" role="dialog">
              <div class="modal-dialog">

                
                <div class="modal-content" style="background-color:transparent;">                 
                  <div class="modal-body">
                    <h1 style="text-align:center;">Some text in the modal.</h1>
                    <br>
                    <button type="button" class="btn btn-info btn-lg">Open Modal</button>
                  </div>
                
                </div>

              </div>
            </div>
         </div>
      </div>
   </body>