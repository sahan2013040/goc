<html>
<head>
    <link rel="stylesheet" href="/goc/css/jquery.mobile-1.4.5.min.css" />
    <script src="/goc/js/jquery-1.9.js"></script>
    <script src="/goc/js/jquery.mobile-1.4.5.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/goc/css/style.css">
</head>

<body>

<div style="background: url(/goc/images/background_wood_panel.jpeg)" data-role="page" id="signIn-one">
    <div data-role="header">
        <img style="width:100%" src="/goc/images/logo_iPhone.png">
    </div>

    <div class="ui-grid-a">
        <div class="ui-block-a">
            <form method="post" action="demoform.asp">
                <div id="solo-grid" style="margin-top:5%;" class="ui-grid-solo">
                    <div class="ui-grid-a">
                        <div class="ui-grid-a"><!--social grid -->
                            <input id="fb-img" style="height: 71px;width: 66%;margin-left: 16%;" id="fblogin_Btn" type="image" src="/goc/images/fblogin.png" width="100%">
                        </div>

                        <div class="ui-grid-a">
                            <input id="google-img" style="height: 69px;width: 66%;margin-left: 16%;" id="fblogin_Btn" type="image" src="/goc/images/glogin.png" width="100%">
                        </div>

                        <div class="ui-grid-a">
                            <input id="twitter-img" style="height: 57px;width: 66%;margin-left: 16%;margin-top: 1%;" id="fblogin_Btn" type="image" src="/goc/images/twitterlogin.png" width="100%">
                        </div>
                    </div>
                    <div style="margin-top: 10px;margin-bottom: 10px;" class="ui-grid-a">
                        <hr/>
                    </div>
                    <div class="ui-grid-b"><!--sign up grid -->
                        <div style="width: 66%;margin-left: 16%;border:none;" class="ui-grid-a input-div">
                            <input class="input-mobile" style="background-color:#301105; border-color:#301105; padding-left:30px;font-family: goc;font-size: 14px; " placeholder="UserName" type="text" name="username" id="connectUsername" value="" required >
                        </div>

                        <div style="width: 66%;margin-left:16%;" class="ui-grid-a input-div">
                            <input type="password"  class="input-mobile" style="background-color:#301105; border-color:#301105; padding-left:30px; font-family: goc;font-size: 14px;" placeholder="Password" type="text" name="password" id="connectPassword" value="" required >
                        </div>

                        <div style="width: 66%;margin-left: 16%;" class="ui-grid-a input-div">
                            <button id="btn-connect" class="input-mobile" id="lnksignIniPad" style="color: white;border: 3px solid;background-color: rgba(0, 0, 0, 0);" class="ui-btn">
                                <a  style="display: inherit;text-decoration: none;color:white;font-family: goc;font-weight: bold;" href="" rel="external"  class="ui-link">Connect </a>
                            </button>
                        </div>
                        <div id="signUp-iphone" style="width: 66%;margin-left: 16%" class="ui-grid-a input-div">
                            <button id="btn-goToSignUp" class="input-mobile" style=" color: white; border: 3px solid;background-color: rgba(0, 0, 0, 0);" class="ui-btn">
                                <a  style="display: inherit;text-decoration: none;color:white;font-family: goc;font-weight: bold;font-family: goc;font-size: bold;" href="" rel="external"  class="ui-link">Sign  up </a>
                            </button>
                        </div>

                    </div>
                </div>
            </form>
        </div>

        <div id="signup-section-head" class="ui-block-b">
            <form method="post" action="demoform.asp">
                <div id="signUp-section" style="margin-top: 35%;" class="ui-grid-solo">
                    <div class="ui-grid-a">
                        <label style="text-align:center;font-size: 20px;font-family: goc;font-weight: bold;color: white;" for="text-1">Create New Account</label>
                    </div>

                    <div style="width: 66%;margin-left: 16%" class="ui-grid-a">
                        <input class="input-mobile" style="background-color:#301105; border-color:#301105; padding-left:30px;font-family: goc;font-size: 14px;"  placeholder="Email" required type="text" name="text-1" id="signupEmail" value="">
                    </div>
                    <div style="width: 66%;margin-left: 16%" class="ui-grid-a">
                        <input class="input-mobile" style="background-color:#301105; border-color:#301105; padding-left:30px;font-family: goc;font-size: 14px;" placeholder="UserName" type="text" name="text-1" id="signupUsername" value="">
                    </div>
                    <div style="width: 66%;margin-left: 16%;" class="ui-grid-a">
                        <input type="password" class="input-mobile" style="background-color:#301105; border-color:#301105; padding-left:30px;font-family: goc;font-size: 14px;" placeholder="Password" type="text" name="text-1" id="signupPassword" value="">
                    </div>
                    <div style="width: 66%;margin-left: 16%" class="ui-grid-a">
                        <button  onclick="signUp()" id="btn-signUp" class="input-mobile" style=" color: white; border: 3px solid;background-color: rgba(0, 0, 0, 0);" class="ui-btn">
                            <a style="display: inherit;text-decoration: none;color:white;font-family: goc;font-weight: bold;font-family: goc;font-size: bold;" href="" rel="external"  class="ui-link">Sign  up </a>
                        </button>
                    </div>

                </div>
            </form>
        </div>
    </div>

</div>

<div style="background: url(/goc/images/background_wood_panel.jpeg)" data-role="page" id="signUp-view">
    <div data-role="header">
        <img style="width:100%" src="/goc/images/logo_iPhone.png">
    </div>
    <div  class="ui-block-a">
        <div id="signUp-section" style="margin-top: 15%;" class="ui-grid-solo">
            <div class="ui-grid-a">
                <label style="text-align:center;font-size: 20px;font-family: goc;font-weight: bold;color: white;" for="text-1">Create New Account</label>
            </div>

            <div style="width: 86%;margin-left: 7%" class="ui-grid-a" >
                <input class="input-mobile" style="background-color:#301105; border-color:#301105; padding-left:30px;font-family: goc;font-size: 14px;" placeholder="Email" required type="text" name="text-1" id="signupEmail" value="">
            </div>
            <div style="width: 86%;margin-left: 7%" class="ui-grid-a">
                <input class="input-mobile" style="background-color:#301105; border-color:#301105; padding-left:30px;font-family: goc;font-size: 14px;" placeholder="UserName" type="text" name="text-1" id="signupUsername" value="">
            </div>
            <div style="width: 86%;margin-left: 7%;" class="ui-grid-a">
                <input type="password" class="input-mobile" style="background-color:#301105; border-color:#301105; padding-left:30px;font-family: goc;font-size: 14px;" placeholder="Password" type="text" name="text-1" id="signupPassword" value="">
            </div>
            <div style="width: 86%;margin-left: 7%" class="ui-grid-a">
                <button onclick="signUp()" id="btn-signUp" class="input-mobile" style=" color: white; border: 3px solid;background-color: rgba(0, 0, 0, 0);" class="ui-btn">
                    <a style="display: inherit;text-decoration: none;color:white;font-family: goc;font-weight: bold;font-family: goc;font-size: bold;" href="" rel="external"  class="ui-link">Sign  up </a>
                </button>
            </div>
            <h3 class="title">OR</h3>
            <div style="width: 86%;margin-left: 7%" class="ui-grid-a">
                <button id="backsgnin" class="input-mobile" style=" color: white; border: 3px solid;background-color: rgba(0, 0, 0, 0);" class="ui-btn">
                    <a style="display: inherit;text-decoration: none;color:white;font-family: goc;font-weight: bold;font-family: goc;font-size: bold;" href="" rel="external"  class="ui-link">Sign  in </a>
                </button>
            </div>

        </div>
    </div>
</div>

<script>


    function responsiveFn() {
        width = $( window ).width();
        height = $( window ).height();
        var isiPad = /ipad/i.test(navigator.userAgent.toLowerCase());
        var isiPhone = /iphone/i.test(navigator.userAgent.toLowerCase());
        // Do a custom code here
        if(isiPhone){
            $("#signup-section-head").hide();
            $(".ui-block-a").css("width", "100%");
            $("#fb-img").css("height", "75px");
            $("#fb-img").css("width", "86%");
            $("#fb-img").css("margin-left", "7%");
            $("#google-img").css("height", "69px");
            $("#google-img").css("width", "86%");
            $("#google-img").css("margin-left", "7%");
            $("#twitter-img").css("height", "57px");
            $("#twitter-img").css("width", "86%");
            $("#twitter-img").css("margin-left", "7%");
            $(".input-mobile").css("height", "66px");
            $(".input-div").css("width", "86%");
            $(".input-div").css("margin-left", "7%");
            $("#signUp-section").css("margin-top", "10%");
            $("#signUp-iphone").show();
            $("#solo-grid").css("margin-top", "5%");



        }else if(isiPad){
            $("#signup-section-head").show();
            $(".ui-block-a").css("width", "50%");
            $("#fb-img").css("height", "71px");
            $("#google-img").css("height", "69px");
            $("#twitter-img").css("height", "57px");
            $(".input-mobile").removeClass("height");
            $("#signUp-section").css("margin-top", "35%");
            $("#signUp-iphone").hide();
            $("#solo-grid").css("margin-top", "15%");

        }
    }


    // load() event and resize() event are combined
    $(window).ready(responsiveFn).resize(responsiveFn);


    $( document ).ready(function() {


        $("#btn-goToSignUp").on("click", function () {
            $.mobile.pageContainer.pagecontainer("change", "#signUp-view", {
                stuff: this.id,
                transition: "flip"
            });
        });

        $("#backsgnin").on("click", function () {
            $.mobile.pageContainer.pagecontainer("change", "#signIn-one", {
                stuff: this.id,
                transition: "flip"
            });
        });

        $("#btn-connect").on("click", function () {
            $username = $("#connectUsername").val();
            $password = $("#connectPassword").val();

            if($username === "" && $password === ""){
                alert("All fields must be filled out");
            }else{
                window.location.href = '<?php echo base_url()?>/index.php/Welcome/signIn?username=' + $username + '&password=' + $password;
            }
        });

        $("#btn-signUp").on("click", function () {
            $email = $("#signupEmail").val();
            $username = $("#signupUsername").val();
            $password = $("#signupPassword").val();

            if($email === "" && $username === "" && $password === ""){
                alert("All fields must be filled out");
            }else{
                window.location.href = '<?php echo base_url()?>/index.php/Welcome/signUp?email=' + $email + '&username=' + $username + '&password=' + $password;
            }
        });
    });

</script>


</body>


</html>