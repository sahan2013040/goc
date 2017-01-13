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
                      <div id="pubInfo" style="color: black; font-size:14;">
                         In my younger and more vulnerable years my father gave me some advice that I've been turning over in my mind ever                            since. 'Whenever you feel like criticizing anyone,' he told me, 'just remember that all the people in this world                             
                         </div> 
                      <button id="ok" type="submit"> OK </button>
                  </div>                
                </div>
              </div>
            </div>
         </div>
   </body>