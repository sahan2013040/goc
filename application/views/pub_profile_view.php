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
      </script> 
      <style type="text/css">
        /*.modal-content {
            background:url('../images/paperScroll.png');
            background-repeat: no-repeat;
            background-size: cover;
        }*/

        .modal:before {
          content: '';
          display: inline-block;
          /*height: 100%;*/
          vertical-align: middle;
          /*margin-right: -4px;*/
        }

        .modal-dialog {
          /*display: inline-block;*/
          text-align: left;
          vertical-align: middle;
          /*margin-left:250px;*/
        }
      </style>   
   </head>
   <body>
         <div class="container-fluid visible-md hiden-xs">   
           <div style="padding-top:5%;">              
              <div class="row">
                <div class="col-md-9">
                  <h2 class="title"> PUB NAME </h2> </div>
                <div class="col-md-3"><img src="/goc/images/favourite.png" width="50%" height="50%"
                  class="img-responsive" ></div>
              </div>
           </div>
          
          </div>
         <br> 

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="<?php echo $pub->image1; ?>" class="img-responsive" >
            </div>

            <div class="item">
              <img src="<?php echo $pub->image2; ?>" class="img-responsive" >
            </div>
          
            <div class="item">
              <img src="<?php echo $pub->image3; ?>" class="img-responsive" >
            </div>

<!--            <div class="item">-->
<!--              <img src="--><?php //echo $pub->image1; ?><!--" class="img-responsive" >-->
<!--            </div>-->
          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <br>
        <div class="container-fluid visible-xs hiden-md">   
           <div style="padding-top:5%;">              
              <div class="row">
                <div class="col-xs-9">
                  <h2 class="title"> <?php echo $pub->name; ?> </h2> </div>
                <div class="col-xs-3"><img src="/goc/images/favourite.png" width="100%" height="100%"
                  class="img-responsive"></div>
              </div>
           </div>          
        </div>
          <br>
         <div id="pubInfo" style="color: white;"> <?php echo $pub->description; ?> </div>
       </div>
     <div class="container-fluid visible-xs hiden-md">
        <button type="submit" class="btn btn-secondary btn-lg btn-block button" data-toggle="modal" href="#createEvent">
              CREATE EVENT 
          </button>
     <div id="createEvent" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content" style="background-color:transparent;">                 
                    <div class="modal-body">
                        <br><br>
                        <h2 class="title col-centered" style="text-align:start; padding-left: 70px"> CREATE   EVENT</h2>
                        <br>
                        <div class="form-group col-md-6">                         
                          <input type="text" class="form-control" id="eventname" placeholder="ENTER EVENT NAME">
                        </div>
                        
                        <div class= "row">  
                          <div class="col-xs-6">
                            <button type="button" class="btn btn-default btn-lg btn-block buttonEmailFav" style="border: 3px solid 
                              black; height:40px;">Invite</button>
                           </div>
                          <div class="col-xs-6">
                            <button type="button" class="btn btn-default btn-lg btn-block buttonEmailFav" 
                                data-dismiss="modal" style="border: 3px solid black; height:40px;">Cancel</button>
                          </div>
                        </div>   
                    </div>
                </div>
            </div>
        </div>

    
    <div class="container-fluid visible-md hiden-xs col-md-8 col-md-push-4">
     <button type="submit" class="btn btn-secondary btn-lg btn-block button " data-toggle="modal" href="#createEventiPad">
              CREATE EVENT 
          </button>
     <div id="createEventiPad" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content" style="background-color:transparent;">                 
                    <div class="modal-body">
                        <h2 class="title col-centered" style="text-align:center; "> CREATE   EVENT</h2>
                        <br>
                        <div class="form-group col-md-8" >                         
                          <input type="text" class="form-control" id="eventname" placeholder="ENTER EVENT NAME"
                                 style="margin-left:25%; margin-top:25%;">
                        </div>
                        
                        <div class= "row">  
                          <div class="col-xs-6" style="margin-top:10%; margin-left:10%;">
                            <button type="button" class="btn btn-default btn-lg btn-block buttonEmailFav" style="border: 3px solid 
                              black; width:75%;">Email</button>
                           </div>
                          <div class="col-xs-6" style="margin-left:50%;">
                            <button type="button" class="btn btn-default btn-lg btn-block buttonEmailFav" 
                                data-dismiss="modal" style="border: 3px solid black;width:75%;margin: -20% 0%;">Cancel</button>
                          </div>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </div>
   </body>