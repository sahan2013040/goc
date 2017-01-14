<!DOCTYPE html>
<html lang="en">
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="/goc/css/bootstrap.min.css">
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

      $('#scanbilll-Btn').click(function () {
          // JavaScript to send an action to your Objective-C code
          var myAppName = 'myfakeappname';
          var myActionType = 'myJavascriptActionType3';
          var myActionParameters = {}; // put extra info into a dict if you need it

          // (separating the actionType from parameters makes it easier to parse in ObjC.)
          var jsonString = (JSON.stringify(myActionParameters));
          var escapedJsonParameters = escape(jsonString);
          var url = myAppName + '://' + myActionType + "#" + escapedJsonParameters;
          document.location.href = url;
      });
      var total = 0;


      $('#pay').click(function () {
          var myvar = getURLParameter('username');
          loadMyView('<?php echo base_url(); ?>index.php/pay/redeem?user='+myvar+'&total='+total);
      });

      function onScan(food,drinks){
//          alert("ok");
          total = food+drinks;
          $('#food h2').html('$  '+food);
          $('#foodiPad h2').html('$  '+food);
              $('#drinks h2').html('$  '+drinks);
              $('#total h2').html('$  '+total);
              $('#drinksiPad h2').html('$  '+drinks);
              $('#totaliPad h2').html('$  '+total);
              $('#score h2').html(total);
              $('#scoreiPad h2').html(total);

//              console.log(qrcode);
      }

      function getURLParameter(name) {
          return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search) || [null, ''])[1].replace(/\+/g, '%20')) || null;
      }


      </script>       
   </head>
   <body>

          
         <div class="container-fluid visible-md hiden-xs">   
           <div style="padding-top:5%;">              
               <h2 class="title"> BILLING DETAILS  </h2>
           </div>         
         <br>            
         <button type="submit" class="btn btn-secondary btn-lg btn-block button" style=" display: block;margin: auto;
            width: 50%;">
            <img src="/goc/images/clue_files/scanqr.png" width="35px" height="35px" style="margin: 0px 10px 0px -50px; ">
              SCAN BILL   </button>
          <div style="width: 95%;height:280px;background-color: rgba(0, 0, 0, 0.50); padding-top:5%; margin-bottom:3%;
                            margin-top:3%;">
               <div class="col-xs-12">
                    <div class="col-xs-6"> 
                    <h2 class="title" style="font-family:Arial; font-size:26px;"> FOOD  </h2>
                    </div> 
                    <div id="foodiPad"class="col-xs-6">
                    <h2  class="title" style="font-family:Arial; font-size:26px;"> </h2>
                   </div> 
                    <div class="col-xs-6"> 
                    <h2 class="title" style="font-family:Arial; font-size:26px;"> DRINKS  </h2>
                    </div> 
                    <div id="drinksiPad" class="col-xs-6">
                    <h2  class="title" style="font-family:Arial; font-size:26px;"> </h2>
                   </div>
                    <div class="col-xs-6" style="padding-top:5%;"> 
                    <h2 class="title" style="font-family:Arial; font-size:26px;"> TOTAL  </h2>
                    </div> 
                    <div id="totaliPad" class="col-xs-6" style="padding-top:5%;">
                    <h2  class="title" style="font-family:Arial; font-size:26px;"> </h2>
                   </div> 
               </div>
          </div>
            <div class="col-xs-12">
                <div class="col-xs-6"> 
                    <h3 class="title" style="font-size:24px;text-align:left;">YOU SCORED</h3>  
                </div> 
                <div class="col-xs-3"> 
                    <h2 id="scoreiPad" class="title" style="font-family:Arial; font-size:30px;"> </h2>
                </div> 
                <div class="col-xs-3"> 
                    <img src="/goc/images/Money_bag.png" width="70%" height="70%">
                </div> 
            </div>
          </div>
        <div class="container-fluid visible-xs hiden-md"> 
          <br>            
         <button id="scanbilll-Btn" type="submit" class="btn btn-secondary btn-lg btn-block button" style=" display: block;margin: auto;
            width: 70%;">
            <img src="/goc/images/clue_files/scanqr.png" width="25px" height="25px" style="margin: 0px 10px 0px -50px; ">
              SCAN BILL   </button>
            <div>
                <div style="padding-top:5%;">              
                    <h3 class="title"> BILLING DETAILS  </h3>
                    <img src="/goc/images/line_small.png" width="95%" height="35px">
                </div>  
               <div class="col-xs-12">
                    <div class="col-xs-6"> 
                    <h2 class="title" style="font-family:Arial; font-size:24px;"> FOOD  </h2>
                    </div> 
                    <div id="food"class="col-xs-6">
                    <h2 class="title" style="font-family:Arial; font-size:24px;">  </h2>
                   </div> 
                    <div class="col-xs-6"> 
                    <h2 class="title" style="font-family:Arial; font-size:24px;"> DRINKS  </h2>
                    </div> 
                    <div id="drinks" class="col-xs-6">
                    <h2  class="title" style="font-family:Arial; font-size:24px;">  </h2>
                   </div>
                    <div class="col-xs-6" style="padding-top:5%;"> 
                    <h2 class="title" style="font-family:Arial; font-size:24px;"> TOTAL  </h2>
                    </div> 
                    <div id="total" class="col-xs-6" style="padding-top:5%;">
                    <h2  class="title" style="font-family:Arial; font-size:24px;"></h2>
                   </div> 
               </div>
          </div>
           <div class="col-xs-12">
                <div class="col-xs-6"> 
                    <h3 class="title" style="font-size:16px;">YOU SCORED</h3>  
                </div> 
                <div id="score" class="col-xs-2">
                    <h2  class="title" style="font-family:Arial; font-size:30px;">  </h2>
                </div> 
                <div class="col-xs-4"> 
                    <img src="/goc/images/Money_bag.png" width="100%" height="100%">
                </div> 
            </div>
          </div> <br>
          <button id="pay" type="submit" class="btn btn-secondary btn-lg btn-block button" style=" display: block;margin: auto;
            width: 70%;"> REDEEM AND PAY</button>
   </body>