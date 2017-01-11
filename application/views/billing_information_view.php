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
               <em id="ctBtnL" class="leftImage"> </em> Create  Treasure  Hunt
               <!-- <em id="ctBtnR" class='rightImage'></em> --> </button>
         </li>
         <li>
            <button class="btn btn-secondary btn-lg btn-block menubutton">

               <em id="stBtnL" class="leftImage"> </em> Start Treasure Hunt <!-- <em class='rightImage'> -->

            </button>
         </li>
         <li>
            <button class="btn btn-secondary btn-lg btn-block menubutton">
               <em id="profileBtnL" class="leftImage"> </em> Profile <!-- <em class='rightImage'></em> --> </button>
         </li>
         <li>
            <button class="btn btn-secondary btn-lg btn-block menubutton">
               <em id="helpBtnL" class="leftImage"> </em> Help <!-- <em class='rightImage'> --></button>
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
      <br>
      <div id="content" class="container-fluid col-md-8 col-md-push-4"> 
          
         <div class="container-fluid visible-md hiden-xs">   
           <div style="padding-top:5%;">              
               <h2 class="title"> BILLING DETAILS  </h2>
           </div>         
         <br>            
         <button type="submit" class="btn btn-secondary btn-lg btn-block button" style=" display: block;margin: auto;
            width: 50%;">
            <img src="../images/clue_files/scanqr.png" width="35px" height="35px" style="margin: 0px 10px 0px -50px; ">
              SCAN BILL   </button>
          <div style="width: 95%;height:280px;background-color: rgba(0, 0, 0, 0.50); padding-top:5%; margin-bottom:3%;
                            margin-top:3%;">
               <div class="col-xs-12">
                    <div class="col-xs-6"> 
                    <h2 class="title" style="font-family:Arial; font-size:26px;"> FOOD  </h2>
                    </div> 
                    <div class="col-xs-6"> 
                    <h2 class="title" style="font-family:Arial; font-size:26px;"> $ 50   </h2>
                   </div> 
                    <div class="col-xs-6"> 
                    <h2 class="title" style="font-family:Arial; font-size:26px;"> DRINKS  </h2>
                    </div> 
                    <div class="col-xs-6"> 
                    <h2 class="title" style="font-family:Arial; font-size:26px;"> $ 300   </h2>
                   </div>
                    <div class="col-xs-6" style="padding-top:5%;"> 
                    <h2 class="title" style="font-family:Arial; font-size:26px;"> TOTAL  </h2>
                    </div> 
                    <div class="col-xs-6" style="padding-top:5%;"> 
                    <h2 class="title" style="font-family:Arial; font-size:26px;"> $ 350   </h2>
                   </div> 
               </div>
          </div>
            <div class="col-xs-12">
                <div class="col-xs-6"> 
                    <h3 class="title" style="font-size:24px;text-align:left;">YOU SCORED</h3>  
                </div> 
                <div class="col-xs-3"> 
                    <h2 class="title" style="font-family:Arial; font-size:30px;"> 50   </h2>
                </div> 
                <div class="col-xs-3"> 
                    <img src="../images/Money_bag.png" width="70%" height="70%">
                </div> 
            </div>
          </div>
        <div class="container-fluid visible-xs hiden-md"> 
          <br>            
         <button type="submit" class="btn btn-secondary btn-lg btn-block button" style=" display: block;margin: auto;
            width: 70%;">
            <img src="../images/clue_files/scanqr.png" width="25px" height="25px" style="margin: 0px 10px 0px -50px; ">
              SCAN BILL   </button>
            <div>
                <div style="padding-top:5%;">              
                    <h3 class="title"> BILLING DETAILS  </h3>
                    <img src="../images/line_small.png" width="95%" height="35px">
                </div>  
               <div class="col-xs-12">
                    <div class="col-xs-6"> 
                    <h2 class="title" style="font-family:Arial; font-size:24px;"> FOOD  </h2>
                    </div> 
                    <div class="col-xs-6"> 
                    <h2 class="title" style="font-family:Arial; font-size:24px;"> $ 50   </h2>
                   </div> 
                    <div class="col-xs-6"> 
                    <h2 class="title" style="font-family:Arial; font-size:24px;"> DRINKS  </h2>
                    </div> 
                    <div class="col-xs-6"> 
                    <h2 class="title" style="font-family:Arial; font-size:24px;"> $ 300   </h2>
                   </div>
                    <div class="col-xs-6" style="padding-top:5%;"> 
                    <h2 class="title" style="font-family:Arial; font-size:24px;"> TOTAL  </h2>
                    </div> 
                    <div class="col-xs-6" style="padding-top:5%;"> 
                    <h2 class="title" style="font-family:Arial; font-size:24px;"> $ 350   </h2>
                   </div> 
               </div>
          </div>
           <div class="col-xs-12">
                <div class="col-xs-6"> 
                    <h3 class="title" style="font-size:16px;">YOU SCORED</h3>  
                </div> 
                <div class="col-xs-2"> 
                    <h2 class="title" style="font-family:Arial; font-size:30px;"> 50   </h2>
                </div> 
                <div class="col-xs-4"> 
                    <img src="../images/Money_bag.png" width="100%" height="100%">
                </div> 
            </div>
          </div> <br>
          <button type="submit" class="btn btn-secondary btn-lg btn-block button" style=" display: block;margin: auto;
            width: 70%;"> REDEEM AND PAY</button>
   </body>