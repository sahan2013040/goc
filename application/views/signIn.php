<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
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

<img src="../../images/logo_iPhone.png" width="100%" height="80%">
    Sign IN

    <div id="i"></div>

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
        <form action="<?php echo base_url() ;?>index.php/Welcome/signIn">
            <button type="submit" value="Continue">Continue</button>
        </form>
    </div>

</body>