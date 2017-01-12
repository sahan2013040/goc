    <div class="container-fluid" align="center">
        <table cellspacing="0" cellpadding="0" border="0" class="text-center">
            <tr class="text-center">
                <td class="text-center"><p class="title">Event - <?php echo $event->name ?></p></td>
            </tr>
            <tr class="text-center">
                <td class="text-center">
                    <img width="100%" height="100%" alt="" src="/goc/images/line_small.png"/>
                </td>
            </tr>
        </table>
    </div>

<!--    show carousal for ipad-->
    <div class="visible-md hidden-xs" style="margin-top: 15px;">
        <?php $this->view('carousal') ?>
    </div>

<!--    Display Date Time-->
    <div class="container-fluid" align="center">
        <table cellspacing="0" cellpadding="0" border="0" class="text-center">
            <tr class="text-center">
                <td class="col-xs-6 col-md-6 text-center"><img width="40%" height="15%" alt=""
                                                               src="/goc/images/date.png"/></td>
                <td class="col-xs-6 col-md-6 "><p
                        class="title largeFont"> <?php echo explode(" ", $event->dateTime)[0]; ?> </p></td>

            </tr>
            <tr class="text-center">
                <td class="text-center">
                    <img width="20%" height="20%" alt="" src="/goc/images/time.png"/>
                </td>
                <td>
                    <p class="title largeFont"> <?php echo explode(" ", $event->dateTime)[1]; ?> </p>
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

    <div class="container-fluid pre-scrollable row" style="height: 150%">
        <?php
        echo print_r($event);
//            foreach ($event as $row) {
//                echo "<div class='col-xs-4 col-md-4' style='height: 40px; margin-bottom: 15px'>" .
//                    "<img src='/goc/images/tick.png' width='50%' height='50%'>" .
//                    "<p class='arialText'>Sahan Perera</p>" .
//                    "</div>";
//            }
        ?>
    </div>

<!--    Start Event-->
<!--    <button class="col-md-12 btn button " style="position:fixed; bottom: 10px; width: 100%; font-family: goc">-->
<!--        Start  Event-->
<!--    </button>-->
    <div class="col-md-12">
        <button type="submit" class="btn btn-secondary btn-lg btn-block button"
                > Start Event
        </button>
    </div>
