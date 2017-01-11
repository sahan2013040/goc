<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <script src="../js/jquery-3.1.1.min.js"></script>
        <script src="../js/jquery.mobile-1.4.5.min.js"></script>
        <script src="../js/bootstrap.js"></script>

        <script type="application/javascript">
            var isiPad = /ipad/i.test(navigator.userAgent.toLowerCase());
            var isiPhone = /iphone/i.test(navigator.userAgent.toLowerCase());
            $(document).ready(function() {
            if (isiPad){
            console.log("ipad ");

            } else if (isiPhone){
            console.log("iphone ");
                $('#signUp').hide();
            } else {
            console.log("another device");

            }
            
            });
            
            function signUp(){
//                console.log("signUp");
                if (isiPhone){
                    console.log("signup");
                    $('#signInIphone').hide();
                    $('#signUpIphone').show();
                } else {
                    console.log("another device");

                }
                    
            }
            
            function signIn(){
                if (isiPhone){
                    console.log("signin");
                    $('#signInIphone').show();
                    $('#signUpIphone').hide();
                } else {
                    console.log("another device");

                }
                
            }
        </script>    
    </head>
    <body>
        
        <img src="../images/logo_iPhone.png" width="100%" height="80%">
        <div id="ipadM" class="container-fluid visible-md hiden-xs" style="margin-top: 30px">
            <div id="signInIpad" class="col-md-6">
                <br>
                <input id="fblogin_Btn" type="image" src="../images/fblogin.png" width="100%" height="70px">
                <br><br>
                <input id="glogin_Btn" type="image" src="../images/glogin.png" width="100%" height="70px">
                <br><br>
                <input id="twitterlogin_Btn" type="image" src="../images/twitterlogin.png" width="100%" height="60px">
                <br><br>
                <hr>

                <div class="form-group has-feedback has-feedback-left">
                   
                    <input type="text" class="form-control input"  name="name" id="username" placeholder="Username"
                           required style="height:45px; background-color:#301105; border-color:#301105; padding-left:30px; "/>
                                     
                    <i class="glyphicon glyphicon-user form-control-feedback"  style="right:430px; top:3px; color:#999999"></i>

                </div>

                <div class="form-group has-feedback has-feedback-left">
                   
                    <input class="form-control input" type="text" name="name" id="password" placeholder="Password"
                           required style="height:45px; background-color:#301105; border-color:#301105; padding-left:30px;"/>
                    <i class="glyphicon glyphicon-lock form-control-feedback" style="right:430px; top:3px; color:#999999"></i>
                    
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-secondary btn-lg btn-block button" style="border: 3px solid">Connect</button><br>
                    
                </div>
            </div>

            <div id="signUpIpad" class="col-md-6">
                <br><br><br><br><br>
                <label class="title col-centered" style="padding-left: 90px">create  new  account</label>
                <div class="form-group has-feedback has-feedback-left">
                    <input type="text" class="form-control input"  name="name" id="username" placeholder="Email"
                           required style="height:45px; background-color:#301105; border-color:#301105; padding-left:30px;"/>        
                    <i class="glyphicon glyphicon-envelope form-control-feedback" style="right:430px; top:3px; color:#999999"></i>
                </div>
                
                <div class="form-group has-feedback has-feedback-left">
                    <input type="text" class="form-control input"  name="name" id="username" placeholder="Username"
                           required style="height:45px; background-color:#301105; border-color:#301105; padding-left:30px;"/>        
                    <i class="glyphicon glyphicon-user form-control-feedback" style="right:430px; top:3px; color:#999999"></i>
                </div>
                
                <div class="form-group has-feedback has-feedback-left">
                    <input class="form-control input" type="text" name="name" id="password" placeholder="Password"
                           required style="height:45px; background-color:#301105; border-color:#301105; padding-left:30px;"/>
                    <i class="glyphicon glyphicon-lock form-control-feedback" style="right:430px; top:3px; color:#999999"></i>
                </div>
                <br>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-secondary btn-lg btn-block button" style="border: 3px solid">Sign  up</button>
                    
                </div>
            </div>
        </div>

        <div id="iphoneM" class="container-fluid visible-xs hiden-md">
            
           <div id="signInIphone">
                <br>
                <input id="fblogin_Btn" type="image" src="../images/fblogin.png" width="100%" height="70px">
                <br><br>
                <input id="glogin_Btn" type="image" src="../images/glogin.png" width="100%" height="70px">
                <br><br>
                <input id="twitterlogin_Btn" type="image" src="../images/twitterlogin.png" width="100%" height="60px">
                <br><br>
                <hr>

                <div class="form-group has-feedback has-feedback-left">
                   
                    <input type="text" class="form-control input"  name="name" id="username" placeholder="Username"
                           required style="height:45px; background-color:#301105; border-color:#301105; padding-left:30px; "/>
                                     
                    <i class="glyphicon glyphicon-user form-control-feedback"  style="right:305px; top:3px; color:#999999"></i>

                </div>

                <div class="form-group has-feedback has-feedback-left">
                   
                    <input class="form-control input" type="text" name="name" id="password" placeholder="Password"
                           required style="height:45px; background-color:#301105; border-color:#301105; padding-left:30px;"/>
                    <i class="glyphicon glyphicon-lock form-control-feedback" style="right:305px; top:3px; color:#999999"></i>
                    
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-secondary btn-lg btn-block button" style="border: 3px solid">Connect</button><br>
                    <button type="submit" onclick="signUp()" class="btn btn-secondary btn-lg btn-block button" style="border: 3px solid">Sign  up</button>
                </div>
            </div>

            <div id="signUpIphone">
                <br><br><br><br><br>
                <div class="form-group has-feedback has-feedback-left">
                    <input type="text" class="form-control input"  name="name" id="username" placeholder="Email"
                           required style="height:45px; background-color:#301105; border-color:#301105; padding-left:30px;"/>        
                    <i class="glyphicon glyphicon-envelope form-control-feedback" style="right:305px; top:3px; color:#999999"></i>
                </div>
                
                <div class="form-group has-feedback has-feedback-left">
                    <input type="text" class="form-control input"  name="name" id="username" placeholder="Username"
                           required style="height:45px; background-color:#301105; border-color:#301105; padding-left:30px;"/>        
                    <i class="glyphicon glyphicon-user form-control-feedback" style="right:305px; top:3px; color:#999999"></i>
                </div>
                
                <div class="form-group has-feedback has-feedback-left">
                    <input class="form-control input" type="text" name="name" id="password" placeholder="Password"
                           required style="height:45px; background-color:#301105; border-color:#301105; padding-left:30px;"/>
                    <i class="glyphicon glyphicon-lock form-control-feedback" style="right:305px; top:3px; color:#999999"></i>
                </div>
                <br>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-secondary btn-lg btn-block button" style="border: 3px solid">Sign  up</button>
                    <h3 class="title">OR</h3>
                    <button type="submit" onclick="signIn()" class="btn btn-secondary btn-lg btn-block button" style="border: 3px solid">Sign  in</button>
                </div>
            </div>
        </div>
<!--        <img src="../images/logo_iPhone.png" width="100%" height="80%">
        <div id="iphoneM" class="container-fluid visible-xs hiden-md">
            
        </div>-->
        <!--    <div id="i"></div>
        
            <div data-role="page">
                <div data-role="main" class="ui-content">
                    <form method="post" action="">
                        <div class="ui-input-text ui-shadow-inset ui-corner-all ui-btn-shadow ui-body-c">
                            <input type="email" name="uname" id="uname" placeholder="Username"
                               class="ui-input-text" style="border: 2px solid white; color:white;" required> </div>
                        <div class="ui-input-text ui-shadow-inset ui-corner-all ui-btn-shadow ui-body-c">
                            <input style="border: 2px solid white; color:white;" type="password" name="password" id="password"
                                   placeholder="Password" required> </div>
                    </form>
                </div>
            </div>
        
        
            <div>
                <form action="<?php echo base_url(); ?>index.php/Welcome/signIn">
                    <button type="submit" value="Continue">Continue</button>
                </form>
            </div>-->

    </body>