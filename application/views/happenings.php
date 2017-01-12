<head>
    <script type="application/javascript" src="/goc/js/myFunctions.js"></script>
    <script type="application/javascript">
        $('.phoneRow').click(function () {
            console.log('row clicked: ' + $(this).attr("name"));
            loadMyView('<?php echo base_url() ?>index.php/huntController/getEvent?id=' + $(this).attr("name"));
        });

        $('.iPadRow').click(function () {
            console.log('row clicked: ' + $(this).attr("name"));
            loadMyView('<?php echo base_url() ?>index.php/huntController/getEvent?id=' + $(this).attr("name"));
        });
    </script>
</head>
<body>

    <div class="container-fluid justify-content-md-center">
            <table cellspacing="0" cellpadding="0" border="0" id="">
                <tr>
                    <td class="text-center"><img width="65%" height="50%" alt="" src="/goc/images/cup.png"/></td>
                    <td class="text-center"><p class="title">Events</p></td>
                    <td class="text-center"><img width="65%" height="50%" alt="" src="/goc/images/cup.png"/></td>
                </tr>
                <tr>
                    <td colspan="3" class="text-center">
                        <img width="100%" height="100%" alt="" src="/goc/images/line_small.png"/>
                    </td>
                </tr>
            </table>
    </div>


    <div class="visible-xs hidden-md pre-scrollable" style="overflow: auto">
        <?php
            foreach ($happenings as $row) {
                echo "<hr>" .
                    "<div name='$row->id' class='row justify-content-md-center phoneRow'>" .
                    "<div class='title col-xs-7 col-md-7'  style='font-size: 200%'>" .
                    $row->name .
                    "</div>" .
                    "<div class='col-xs-5 col-md-5'>" .
                    "<img class='' src='/goc/images/rightarrow.png' width='20%' height='20%'>" .
                    "</div>" .
                    "</div><hr><br>";
            }
        ?>

    </div>


    <div class="row" style="position:fixed; bottom: 10px; width: 100%;">
        <div class="col-xs-4 col-md-2"> <img class="" src="/goc/images/gold%20coin.png" width="60%" height="60%"> </div>
        <div class="col-xs-7 col-md-8"> <p class="col-md-auto text-left arialText">
        Tip: Earn points by starting game on time </p> </div>
    </div>


    <div class="col-xs-12 col-md-12 visible-md hidden-xs" style="margin-top: 10px">
        <?php
        foreach ($happenings as $row) {
            echo
                "<div name='$row->id' class='col-xs-4 col-md-4 text-center iPadRow' 
                    style='background: url(/goc/images/brown_paper.jpg); height: 150px;' >" .
                "<p class='' style='font-family: goc;  margin-top: 45px'>" .
                $row->name .
                "</p>" .
                "<p>" .
                "<b>Invited by: </b>" .
                "</p>" .
                "</div>";
        }

        ?>
    </div>
</body>