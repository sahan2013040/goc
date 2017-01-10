<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" /> -->
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="../../css/style.css">
      <script src="../../js/jquery-3.1.1.min.js"></script>
      <script src="../../js/jquery.mobile-1.4.5.min.js"></script>
      <script src="../../js/bootstrap.js"></script>
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
      <style type="text/css">
       
       
      </style>   
   </head>
   <body>
   <img src="../../images/logo_iPhone.png" width="100%" height="80%">
   <div id="iphoneM" class="container-fluid visible-xs hiden-md">
       <table width="90%" cellspacing="0" cellpadding="0" border="0" id="Table_01">
          <tr>
             <td><a href="#"><img width="60%" height="14.5%" alt="" src="../../images/ct.png"/></a></td>
             <td><a href="#"><img width="60%" height="15%" alt="" src="../../images/st.png"/></a></td>
             <td><a href="#"><img width="60%" height="15%" alt="" src="../../images/person.png"/></a></td>
             <td><a href="#"><img width="250%" height="65%" alt="" src="../../images/help.png"/></a></td>
          </tr>
       </table>
   </div>
      <br> <br>
      <div id="content" class="container-fluid col-md-8 col-md-push-4">      
         <div>
               <h2 class="title col-centered"> POINTS COLLECTED </h2>
         </div>
        
        <div class="row">
            <div class="col-xs-3">
            <img src="../../images/crown.png" width="100%" height="80%" class="img-responsive">
            </div>
            <div class="col-xs-6">
            <h1 class="title" style="color:yellow; font-size:44px;"> 100,000</h1> 
            </div>
            <div class="col-xs-3">
            <img src="../../images/crown.png" width="100%" height="80%" class="img-responsive">
            </div>
        </div>
         <br>
         <div class="row">
            <div class="col-md-12">
                <h2 class="title col-centered"> FAVOURITES </h2>
            </div>
         </div>
         <!-- Pubs list-->
         <div class="row">
            <div class="col-xs-3">
            <img src="../../images/lovebar.png" width="100%" height="50%" class="img-responsive">
            </div>
            <div class="col-xs-7">
            <h4 class="title"> LOVEBAR</h4> 
            </div>
            <div class="col-xs-2">
                <a href="#">
                    <img src="../../images/rightarrow.png" width="80%" height="50%" class="img-responsive">
                </a>
            </div>
        </div>
          
        <div class="row">
            <div class="col-xs-3">
            <img src="../../images/repub.png" width="100%" height="50%" class="img-responsive">
            </div>
            <div class="col-xs-7">
            <h4 class="title"> THE REPUBLIK</h4> 
            </div>
            <div class="col-xs-2">
               <a href="#">
                    <img src="../../images/rightarrow.png" width="80%" height="50%" class="img-responsive">
                </a>
            </div>
        </div>
          
        <div class="row">
            <div class="col-xs-3">
            <img src="../../images/flamingo.png" width="100%" height="50%" class="img-responsive">
            </div>
            <div class="col-xs-7">
            <h4 class="title"> FLAMINGO</h4> 
            </div>
            <div class="col-xs-2">
                <a href="#">
                    <img src="../../images/rightarrow.png" width="80%" height="50%" class="img-responsive">
                </a>
            </div>
        </div>
        <br>
        <div class="col-md-12">
            <button type="submit" class="btn btn-secondary btn-lg btn-block button" > NEWSLETTER </button>
            <button type="submit" class="btn btn-secondary btn-lg btn-block button" > SELECT CHARACTER </button>
            <button type="submit" class="btn btn-secondary btn-lg btn-block button" data-toggle="modal" href="#emailFav" > 
                EMAIL FAVOURITES </button>
       </div> <br>
          
       <div class="modal fade" id="emailFav" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 class="modal-title title" style="color:black;"> EMAIL FAVOURITES</h4>
            </div>
            <div class="modal-body">
             
                <div class="light">
                   <form>
                      <span><input type="text" class="search rounded" placeholder="Search"></span>
                   </form>
                </div>
              <!-- For one user -->    
              <div class="form-group row">
               <div class="col-md-12">
                  <div class="form-check">
                     <label class="form-check-label" style="color:black;font-size:20px;">
                     <input class="form-check-input" type="checkbox" value="">
                     <img src="../../images/user.png" style="width: 15%;height: 15%;padding-right: 2%;padding-left: 2%;">
                         Sahan Perera
                     </label>
                  </div>
               </div>
            </div>
             
            <div class="form-group row">
               <div class="col-md-12">
                  <div class="form-check">
                     <label class="form-check-label" style="color:black;font-size:20px;">
                     <input class="form-check-input" type="checkbox" value="">
                     <img src="../../images/user.png" style="width: 15%;height: 15%;padding-right: 2%;padding-left: 2%;">
                         Kaushalya Kobbekaduwa
                     </label>
                  </div>
               </div>
            </div>
            
             <div class="form-group row">
               <div class="col-md-12">
                  <div class="form-check">
                     <label class="form-check-label" style="color:black;font-size:20px;">
                     <input class="form-check-input" type="checkbox" value="">
                     <img src="../../images/user.png" style="width: 15%;height: 15%;padding-right: 2%;padding-left: 2%;">
                         Tharindu Darshana
                     </label>
                  </div>
               </div>
            </div>
                
            </div>
            <div class="modal-footer">
              <div class= "row">  
                  <div class="col-xs-6">
                    <button type="button" class="btn btn-default btn-lg btn-block buttonEmailFav">Email</button>
                   </div>
                  <div class="col-xs-6">
                    <button type="button" class="btn btn-default btn-lg btn-block buttonEmailFav" data-dismiss="modal">Cancel</button>
                  </div>
              </div>      
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
   </body>