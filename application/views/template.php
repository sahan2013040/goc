<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="../js/jquery-3.1.1.min.js"></script>
    <script src="../js/jquery.mobile-1.4.5.min.js"></script>
    <script src="../js/bootstrap.js"></script>
</head>
<body>
<img src="../images/logo_iPhone.png" width="100%" height="80%">

<div id="ipadM" class="menu opened container-fluid visible-md hiden-xs visible-lg" style="margin-top: 30px">
    <br>
    <img src="../images/user.png" id="userImg" width="50%" height="30%">
    <label class="username"> John Snow </label>
    <ul>
        <li>
            <button class="btn btn-secondary btn-lg btn-block menubutton">
                <em id="ctBtnL" class="leftImage"> </em> Create Treasure Hunt
                <!-- <em id="ctBtnR" class='rightImage'></em> --> </button>
        </li>
        <li>
            <button class="btn btn-secondary btn-lg btn-block menubutton">
                <em id="stBtnL" class="leftImage"> </em> Start Treasure Hunt <!-- <em class='rightImage'> --></em>
            </button>
        </li>
        <li>
            <button class="btn btn-secondary btn-lg btn-block menubutton">
                <em id="profileBtnL" class="leftImage"> </em> Profile <!-- <em class='rightImage'></em> --> </button>
        </li>
        <li>
            <button class="btn btn-secondary btn-lg btn-block menubutton">
                <em id="helpBtnL" class="leftImage"> </em> Help <!-- <em class='rightImage'> --></em> </button>
        </li>
    </ul>
</div>

<div id="iphoneM" class="container-fluid visible-xs hidden-md">
    <table width="90%" cellspacing="0" cellpadding="0" border="0" id="Table_01">
        <tr>
            <td> <input id="createTH_Btn" type="image" src="../images/ct.png" width="60%" height="14.5%"> </td>
            <td> <input id="startTH_Btn" type="image" src="../images/st.png" width="60%" height="14.5%"> </td>
            <td> <input id="profile_Btn" type="image" src="../images/person.png" width="60%" height="14.5%"> </td>
            <td> <input id="help_Btn" type="image" src="../images/help.png" width="250%" height="65%"> </td>
        </tr>
    </table>
</div>

</body>
</html>