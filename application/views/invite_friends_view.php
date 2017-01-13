<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" /> -->
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="../css/style.css">
      <script src="../js/jquery-3.1.1.min.js"></script>
      <script src="/goc/js/jquery.mobile-1.4.5.min.js"></script>
      <script src="../js/bootstrap.js"></script>
      <script type="application/javascript">
         $( document ).ready(function() {
            var isiPad = /ipad/i.test(navigator.userAgent.toLowerCase());
            var isiPhone = /iphone/i.test(navigator.userAgent.toLowerCase());
            if (isiPad){
                console.log("ipad ");
                $('#i').text('ipad');
              /*  $('#iphoneM').hide();
                $('#iphoneList').hide();*/
            } else if (isiPhone){
                console.log("iphone ");
                $('#i').text('ipad');
               /*  $('#ipadM').hide();
                 $('#ipadList').hide();*/
            } else {
                console.log("another device");
                $('#i').text('ipad');
             /*   $('#iphoneM').hide();
                 $('#iphoneList').hide();*/
            }

            $('#invite').click(function () {
               var count = 0;
               $.each($("input[name='userCheck']:checked"), function(){
                  count++;
               });
               loadMyView('<?php echo base_url() ?>index.php/Reservation?event='+'<?php echo $event ?>'+'&guests='+count );
            });

           });
      </script>   
   </head>
   <body>
         <p> <?php echo $event ?> </p>
         <div>
            <h2 class="title col-centered"> Invite Friends </h2>
         </div>
         <br>
          <div id="ipadList" class="container-fluid visible-md hiden-xs">
         
         <div style="width: 95%;height: 500px;background-color: rgba(0, 0, 0, 0.50);padding: 5% 10% 5% 10%;">
             <div class="light">
               <form>
                  <span><input type="text" class="search rounded" placeholder="Search"></span>
               </form>
            </div>
            <div class="form-group row">
               <div class="col-md-12">
                  <div class="form-check">
                     <label class="form-check-label">
                     <input name='userCheck' class="form-check-input" type="checkbox" value="">
                     <img src="/goc/images/user.png" style="width: 15%;height: 15%;padding-right: 2%;padding-left: 2%;"> Sahan Perera
                     </label>
                  </div>
               </div>
            </div>
            <div class="form-group row">
               <div class="col-md-12">
                  <div class="form-check">
                     <label class="form-check-label">
                     <input name='userCheck' class="form-check-input" type="checkbox" value="">
                     <img src="/goc/images/user.png" style="width: 15%;height: 15%;padding-right: 2%;padding-left: 2%;"> Natasha Wijesekare
                     </label>
                  </div>
               </div>
            </div>
            <div class="form-group row">
               <div class="col-md-12">
                  <div class="form-check">
                     <label class="form-check-label">
                     <input name='userCheck' class="form-check-input" type="checkbox" value="">
                     <img src="/goc/images/user.png" style="width: 15%;height: 15%;padding-right: 2%;padding-left: 2%;"> Tharindu Darshana
                     </label>
                  </div>
               </div>
            </div>
            <div class="form-group row">
               <div class="col-md-12">
                  <div class="form-check">
                     <label class="form-check-label">
                     <input name='userCheck' class="form-check-input" type="checkbox" value="">
                     <img src="/goc/images/user.png" style="width: 15%;height: 15%;padding-right: 2%;padding-left: 2%;"> Kaushalya Kobbekaduwa
                     </label>
                  </div>
               </div>
            </div>
            <div class="col-md-12">
               <button type="submit" class="btn btn-secondary btn-lg btn-block button">
               Invite </button>
            </div>
         </div>
          </div>
          <div id="iphoneList" class="container-fluid visible-xs hiden-md">
               <div class="light">
               <form>
                  <span><input type="text" class="search rounded" placeholder="Search"></span>
               </form>
            </div>
        <div style="width: 95%;height: 250px;background-color: rgba(0, 0, 0, 0.50);padding: 5% 10% 5% 10%;margin-bottom: 5%;">
           
            <div class="form-group row">
               <div class="col-md-12">
                  <div class="form-check">
                     <label class="form-check-label">
                     <input name='userCheck' class="form-check-input" type="checkbox" value="">
                     <img src="/goc/images/user.png" style="width: 15%;height: 15%;padding-right: 2%;padding-left: 2%;"> Sahan
                     </label>
                  </div>
               </div>
            </div>
            <div class="form-group row">
               <div class="col-md-12">
                  <div class="form-check">
                     <label class="form-check-label">
                     <input name='userCheck' class="form-check-input" type="checkbox" value="">
                     <img src="/goc/images/user.png" style="width: 15%;height: 15%;padding-right: 2%;padding-left: 2%;"> Natasha
                     </label>
                  </div>
               </div>
            </div>
            <div class="form-group row">
               <div class="col-md-12">
                  <div class="form-check">
                     <label class="form-check-label">
                     <input name='userCheck' class="form-check-input" type="checkbox" value="">
                     <img src="/goc/images/user.png" style="width: 15%;height: 15%;padding-right: 2%;padding-left: 2%;"> Tharindu
                     </label>
                  </div>
               </div>
            </div>
            <div class="form-group row">
               <div class="col-md-12">
                  <div class="form-check">
                     <label class="form-check-label">
                     <input name='userCheck' class="form-check-input" type="checkbox" value="">
                     <img src="/goc/images/user.png" style="width: 15%;height: 15%;padding-right: 2%;padding-left: 2%;"> Kaushalya
                      </label>
                  </div>
               </div>
            </div>
           
         </div>
           <div id="invite" class="col-md-12">
               <button type="submit" class="btn btn-secondary btn-lg btn-block button">
               Invite </button>
            </div>
              </div>
         <br> <br>

   </body>