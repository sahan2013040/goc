<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/goc/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/goc/css/style.css">
    <script src="/goc/js/jquery-3.1.1.min.js"></script>
    <script src="/goc/js/jquery.mobile-1.4.5.min.js"></script>
    <script src="/goc/js/bootstrap.js"></script>
    <script type="application/javascript">
        $(document).ready(function () {
            var height = $(window).height() - 80;
            $('#content').height(height - 10);

//            $('#createTH_Btn').click();
//            $('#startTH_Btn').click();
//            $('#profile_Btn').click();

            /**
             * ////////////////////////////////////////////////////////////////////////////
             */
            $('#createTH_Btn').click(function () {
                $(this).attr("src", "/goc/images/menu_buttons/darkcreate.png");
                $('#help_Btn').attr("src", "/goc/images/menu_buttons/flathelp.png");
                $('#startTH_Btn').attr("src", "/goc/images/menu_buttons/flatstart.png");
                $('#profile_Btn').attr("src", "/goc/images/menu_buttons/flatprofile.png");
                loadPageToDiv('<?php echo base_url() ?>index.php/menuController/createTH');
            });

            $('#ctBtipadM').click(function () {
                loadPageToDiv('<?php echo base_url() ?>index.php/menuController/createTH');
            });

            ///////////////////////////////////////////////////////////////////////////////////


            /**
             * ////////////////////////////////////////////////////////////////////////////
             */
            $('#startTH_Btn').click(function () {
                $(this).attr("src", "/goc/images/menu_buttons/darkstart.png");
                $('#help_Btn').attr("src", "/goc/images/menu_buttons/flathelp.png");
                $('#createTH_Btn').attr("src", "/goc/images/menu_buttons/flatcreate.png");
                $('#profile_Btn').attr("src", "/goc/images/menu_buttons/flatprofile.png");
                loadPageToDiv('<?php echo base_url() ?>index.php/menuController/startTH');
            });

            $('#stBtipadM').click(function () {
                loadPageToDiv('<?php echo base_url() ?>index.php/menuController/startTH');
            });

            ///////////////////////////////////////////////////////////////////////////////////

            /**
             * ////////////////////////////////////////////////////////////////////////////
             */
            $('#profile_Btn').click(function () {
                $(this).attr("src", "/goc/images/menu_buttons/darkprofile.png");
                $('#help_Btn').attr("src", "/goc/images/menu_buttons/flathelp.png");
                $('#createTH_Btn').attr("src", "/goc/images/menu_buttons/flatcreate.png");
                $('#startTH_Btn').attr("src", "/goc/images/menu_buttons/flatstart.png");
                loadPageToDiv('<?php echo base_url() ?>index.php/menuController/profile');
            });

            $('#profileBtipadM').click(function () {
                loadPageToDiv('<?php echo base_url() ?>index.php/menuController/profile');
            });

            ///////////////////////////////////////////////////////////////////////////////////

            /**
             * ////////////////////////////////////////////////////////////////////////////
             */
            $('#help_Btn').click(function () {
                $(this).attr("src", "/goc/images/menu_buttons/darkhelp.png");
                $('#createTH_Btn').attr("src", "/goc/images/menu_buttons/flatcreate.png");
                $('#startTH_Btn').attr("src", "/goc/images/menu_buttons/flathelp.png");
                $('#profile_Btn').attr("src", "/goc/images/menu_buttons/flatprofile.png");
                loadPageToDiv('<?php echo base_url() ?>index.php/menuController/help');
            });

            $('#helpBtipadM').click(function () {
                loadPageToDiv('<?php echo base_url() ?>index.php/menuController/help');
            });

            ///////////////////////////////////////////////////////////////////////////////////


            function loadPageToDiv(url) {
                $('#content').load(url);
            }

        });
    </script>
</head>
<body>
<img src="/goc/images/logo_iPhone.png" width="100%" height="80%">

<div id="ipadM" class="menu opened container-fluid visible-md hidden-xs" style="margin-top: 30px">
    <br>
    <img src="/goc/images/user.png" id="userImg" width="50%" height="30%">
    <label class="username"> John Snow </label>
    <ul>
        <li>
            <button id="ctBtipadM" class="btn btn-secondary btn-lg btn-block menubutton">
                <em id="ctBtnL" class="leftImage"> </em> Create Treasure Hunt
                <!-- <em id="ctBtnR" class='rightImage'></em> --> </button>
        </li>
        <li>
            <button id="stBtipadM" class="btn btn-secondary btn-lg btn-block menubutton">
                <em id="stBtnL" class="leftImage"> </em> Start Treasure Hunt <!-- <em class='rightImage'> --></em>
            </button>
        </li>
        <li>
            <button id="profileBtipadM" class="btn btn-secondary btn-lg btn-block menubutton">
                <em id="profileBtnL" class="leftImage"> </em> Profile <!-- <em class='rightImage'></em> --> </button>
        </li>
        <li>
            <button id="helpBtipadM" class="btn btn-secondary btn-lg btn-block menubutton">
                <em id="helpBtnL" class="leftImage"> </em> Help <!-- <em class='rightImage'> --></em> </button>
        </li>
    </ul>
</div>

<div id="iphoneM" class="container-fluid visible-xs hidden-md">
    <table cellspacing="8" cellpadding="0" border="0" id="Table_01">
        <tr>
            <td><input id="createTH_Btn" type="image" src="/goc/images/menu_buttons/flatcreate.png" width="90%"
                       height="50%"></td>
            <td><input id="startTH_Btn" type="image" src="/goc/images/menu_buttons/flatstart.png" width="90%"
                       height="50%"></td>
            <td><input id="profile_Btn" type="image" src="/goc/images/menu_buttons/flatprofile.png" width="90%"
                       height="50%"></td>
            <td><input id="help_Btn" type="image" src="/goc/images/menu_buttons/flathelp.png" width="90%" height="50%">
            </td>
        </tr>
    </table>
</div>
<div id="content" class="container-fluid col-md-8 col-md-push-4 pre-scrollable" style="max-height: 90%"></div>

</body>
</html>