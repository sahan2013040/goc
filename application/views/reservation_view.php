<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" /> -->
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="../css/style.css">
      <script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
      <script src="../js/bootstrap.js"></script>
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

      <div class="menu opened">
         <br>
         <img src="../images/logo_iPhone.png" width="100%" height="10%"> <br> <br>
         <img src="../images/user.png" id="userImg" width="50%" height="30%">
         <label class="username"> John Snow </label>
         <ul>
            <li> <button class="btn btn-secondary btn-lg btn-block menubutton" >
               <em id="ctBtnL" class="leftImage"> </em> Create Treasure Hunt <!-- <em id="ctBtnR" class='rightImage'></em> --> </button> 
            </li>
            <li> <button class="btn btn-secondary btn-lg btn-block menubutton" >
               <em id="stBtnL" class="leftImage"> </em> Start Treasure Hunt <!-- <em class='rightImage'> --></em> </button> 
            </li>
            <li> <button class="btn btn-secondary btn-lg btn-block menubutton" >
               <em id="profileBtnL" class="leftImage"> </em> Profile <!-- <em class='rightImage'></em> --> </button> 
            </li>
            <li> <button class="btn btn-secondary btn-lg btn-block menubutton" >
               <em id="helpBtnL" class="leftImage"> </em> Help <!-- <em class='rightImage'> --></em> </button> 
            </li>
            </li>
         </ul>
      </div>

      <div id="content" class="text" style="padding-left:15%; padding-top:5%;">
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
      </div>
   </body>