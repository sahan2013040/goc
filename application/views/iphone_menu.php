<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" /> -->
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="../../css/style.css">
      <script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
      <script src="../../js/bootstrap.js"></script>
      <!--script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script-->
      <script type="application/javascript">
         var isiPad = /ipad/i.test(navigator.userAgent.toLowerCase());
         var isiPhone = /iphone/i.test(navigator.userAgent.toLowerCase());
         if (isiPad){
             console.log("ipad ");
             $('#i').text('ipad');
         } else if (isiPhone){
             console.log("iphone ");
             $('#i').text('ipad');
         } else {
             console.log("another device");
             $('#i').text('ipad');
         }
      </script>   
   </head>
   <body>
      <br>
   <div style="padding-left:2px; padding-right: 2px;">
      <table width="90%" height="20%" cellspacing="0" cellpadding="0" border="0" id="Table_01">
      <tbody><tr><td><a href="URL"><img width="60%" height="14.5%" alt="" src="../../images/ct.png" /></a></td>
      <td><a href="URL"><img width="60%" height="15%" alt="" src="../../images/st.png" /></a></td>
      <td><a href="URL"><img width="60%" height="15%" alt="" src="../../images/person.png" /></a></td>
      <td><a href="URL"><img width="250%" height="65%" alt="" src="../../images/help.png" /></a></td>
      </tr>
      </tbody></table>
   </div>

      <div id="content" class="text" style="padding-left:0; padding-top:5%;">
         <div>
            <label class="col-md-12">
               <h2 class="reservationTitle"> Reservation </h2>
            </label>
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
         </div>
      </div>
      
   </body>