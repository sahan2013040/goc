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

         $('#name').val('<?php echo $event ?>');
         $('#guests').val('<?php echo $guests ?>');
          console.log('list:'+'<?php echo $invitees ?>');
          
         $('#reserveBtn').click(function () {
           
         var eventName = $("#name").val();
         var telNo = $("#telNo").val();
         var guests = $("#guests").val();
         var date = $("#dateD").val();
         var time = $("#timeT").val();
         var venue=<?php echo $venue ?>;
         var invitees= <?php echo $invitees ?>;
            
          $.ajax({
              type: 'POST',
              url: '/goc/index.php/Reservation/addevent',
              data: { eventname : eventName,
                      telno: telNo,
                      guests:guests,
                      dateD:date,
                      timeT:time,
                      invitees:invitees,
                     venue:venue
                    }             
            }); 

         });         

            $('#bookingcnfrm').click(function () {
                $('body').removeClass('modal-open');
                $('.modal-backdrop').remove();     
                loadMyView('<?php echo base_url() ?>index.php/menuController/createTH');
            
            });
        });
      </script>   
   </head>
   <body>     
      <br> <br>
      
         <div>
               <h2 class="title col-centered"> Reservation </h2>
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
               <input  class="form-control input"  type="text" name="date" id="dateD" placeholder="DATE" onfocus="(this.type='date')"
                  required>  
            </div>
         </div>
         <div class="form-group row">
            <div class="col-md-12">
               <input  class="form-control input"  type="text" name="time" id="timeT" placeholder="TIME" onfocus="(this.type='time')"
                  required>
            </div>
         </div>
         <br> <br>
         <div class="col-md-12">
            <button id="reserveBtn" type="submit" class="btn btn-secondary btn-lg btn-block button" data-toggle="modal" data-target="#myModal">
            Confirm </button>
            <br>            
            <div id="myModal" class="modal fade" role="dialog">
              <div class="modal-dialog">                
                <div class="modal-content" style="background-color:transparent;">                 
                  <div class="modal-body">
                    <h3 class="title col-centered" style="color: black;">BOOKING  CONFIRMATION</h3>
                    <br>
                      <div id="pubInfo" style="margin-left:20%;padding-top: 10%;color: black;width: 50% ;padding-left: 5%;">
                         <p style="font-size: 32px;text-align: center;">Your booking has been confirmed! </p>                             
                         </div> 
                      <div class="col-xs-6">
                            <button type="button" class="btn btn-default btn-lg btn-block buttonEmailFav" 
                                id="bookingcnfrm" data-dismiss="modal" style="border: 3px solid black; height:40px; margin-left:50%;">Cancel</button>
                          </div>
                  </div>                
                </div>
              </div>
            </div>
         </div>
   </body>