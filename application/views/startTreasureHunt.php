<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<?php $this->view('template'); ?>

<div class="container-fluid col-md-8 col-md-push-4" style="margin-top: 30px">

    <div class="container-fluid" align="center">
        <table cellspacing="0" cellpadding="0" border="0" class="text-center">
            <tr class="text-center">
                <td class="text-center"><p class="title">Event - Pub Crawl</p></td>
            </tr>
            <tr class="text-center">
                <td class="text-center">
                    <img width="100%" height="100%" alt="" src="../../images/line_small.png"/>
                </td>
            </tr>
        </table>
    </div>

<!--    show carousal for ipad-->
    <div class="visible-md hiden-xs" style="margin-top: 15px;">
        <?php $this->view('carousal') ?>
    </div>

<!--    Display Date Time-->
    <div class="container-fluid" align="center">
        <table cellspacing="0" cellpadding="0" border="0" class="text-center">
            <tr class="text-center">
                <td class="col-xs-6 col-md-6 text-center"><img width="40%" height="15%" alt=""
                                                               src="../../images/date.png"/></td>
                <td class="col-xs-6 col-md-6 text-center"><p class="title largeFont"> 25/01/2017 </p></td>

            </tr>
            <tr class="text-center">
                <td class="text-center">
                    <img width="20%" height="20%" alt="" src="../../images/time.png"/>
                </td>
                <td>
                    <p class="title largeFont"> 6.30 PM </p>
                </td>
            </tr>
        </table>
    </div>

<!--    HR-->
    <hr>

<!--    Invitees-->
    <div class="row" align="center">
        <p class="title">Invitees</p>
    </div>

    <div class="container-fluid pre-scrollable row">
        <?php
//            foreach (   as $row)
//            {
                echo "<div class='col-xs-4 col-md-4' style='height: 40px;'>".
                    "<img src='../../images/tick.png' width='50%' height='50%'>".
                    "<p class='arialText'>Sahan Perera</p>".
                    "</div>"
                ;
        echo "<div class='col-xs-4 col-md-4' style='height: 40px;'>".
            "<img src='../../images/tick.png' width='50%' height='50%'>".
            "<p class='arialText'>Sahan Perera</p>".
            "</div>"
        ;
        echo "<div class='col-xs-4 col-md-4' style='height: 40px;'>".
            "<img src='../../images/tick.png' width='50%' height='50%'>".
            "<p class='arialText'>John Junior Jake Justin Never Eber</p>".
            "</div>"
        ;
        echo "<div class='col-xs-4 col-md-4' style='height: 40px;'>".
            "<img src='../../images/tick.png' width='50%' height='50%'>".
            "<p class='arialText'>Sahan Perera</p>".
            "</div>"
        ;
        echo "<div class='col-xs-4 col-md-4' style='height: 40px;'>".
            "<img src='../../images/tick.png' width='50%' height='50%'>".
            "<p class='arialText'>Sahan Perera</p>".
            "</div>"
        ;
        echo "<div class='col-xs-4 col-md-4' style='height: 40px;'>".
            "<img src='../../images/tick.png' width='50%' height='50%'>".
            "<p class='arialText'>Sahan Perera</p>".
            "</div>"
        ;
//            }

        ?>
    </div>

<!--    Start Event-->
    <button class="container-fluid title" style="position:fixed; bottom: 10px; width: 100%;">Start Event</button>

</div>
</body>
</html>
