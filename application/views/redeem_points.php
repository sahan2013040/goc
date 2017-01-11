<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<?php $this->view('template'); ?>

<div class="container-fluid col-md-8 col-md-push-4" style="margin-top: 20px">

    <div class="row title">Total Points Collected</div>

    <div class="row container-fluid" style="display: inline" align="center">
        <img class="img-circle col-md-4 col-xs-4 col-xs-push-0" src="../../images/crown.png" width="10%" height="10%"
             style="max-height: 20%; max-width: 20%;">
        <p class="goldenText col-md-4 col-xs-4 col-xs-push-1" style="margin-top: margin: auto; 10px; "> 10,000 </p>
        <img class="img-circle col-md-4 col-xs-4 col-xs-push-3" src="../../images/crown.png" width="10%" height="10%"
             style="max-height: 20%; max-width: 20%;">
    </div>

    <div class="row title">Points to redeem</div>
    <table class="table form-group" style="background-color: white" align="center">
        <tr align="deadCenter">
            <td class="col-xs-4" align="center"><input type="image" src="../../images/prevarrow.png" width="50%"
                                                       height="10%"></td>
            <td class="col-xs-4 col-xs-push-1 " align="center"><input id='red_points'
                                                                      type="number"
                                                                      class="form-control col-sx-4 goldenText" min="0">
            </td>
            <td class="col-xs-4 col-xs-push-3 " align="center"><input type="image"
                                                                      src="../../images/nextarrow.png"
                                                                      width="50%" height="10%"></td>
        </tr>
    </table>

<!--    Some points to money conversion rate-->
    <div class="row container-fluid" style="display: inline" align="center">
        <img class="img-circle col-md-2 col-xs-2 col-xs-push-1" src="../../images/info.png" width="40%" height="40%"
             style="max-height: 40%; max-width: 40%;">
        <p class="col-md-8 col-xs-8 col-xs-push-1" style="color: white; font-size: 120%; margin-top: 5px"> 10 Points
            convert to $1 </p>
    </div>
    <hr>

<!--    Shows amount to be paid after redeeming points-->
    <div class="row title">Payable after redeem</div>
    <div class="row container-fluid" style="display: inline" align="center">
        <img class="img-circle col-md-2 col-xs-2 col-xs-push-4" src="../../images/gold%20coin.png" width="40%"
             height="40%"
             style="max-height: 40%; max-width: 40%;">
        <p class="col-md-8 col-xs-8 col-xs-push-1" style="color: white; font-size: 200%; "> 200 </p>
    </div>

<!--    Pay Button-->
    <button type="submit" class="btn btn-secondary btn-lg btn-block button" style=" display: block;margin: auto;
            width: 50%;">
        Pay </button>

</div>
</body>
</html>