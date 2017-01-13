<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    
</head>
<body>
    
<?php $this->view('template'); ?>

    <div class="row title">Total Points Collected</div>

    <div class="row container-fluid" style="display: inline" align="center">
        <img class="img-circle col-md-4 col-xs-4 col-xs-push-0" src="../../images/crown.png" width="10%" height="10%"
             style="max-height: 20%; max-width: 20%;">
        <p class="goldenText col-md-4 col-xs-4 col-xs-push-1" style="margin-top: 10px; "> 10,000 </p>
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
<!--<div id="paypal-button" style=" display: block;margin: auto;
            width: 30%;"></div>-->
            
         
<!--    <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=darshana20124-facilitator@live.com&amount=1.99&currency_code=GBP" class="btn btn-secondary btn-lg btn-block button" style=" display: block;margin: auto;
            width: 50%;">Pay</a>-->

<!--    <button type="submit" class="btn btn-secondary btn-lg btn-block button" style=" display: block;margin: auto;
            width: 50%;">
        Pay </button>-->

</div>
   <form id="payment-form" action="" method="POST" style=" display: block;margin: auto; margin-left: 120px;">
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="pk_test_vS6AtWJ469hmCGFWBxGRag1f"
    data-amount="2000"
    data-name="Demo Site"
    data-description="2 widgets ($20.00)"
    data-image="/goc/images/logo.png">
  </script>
</form>

    
<!--    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
    <script>
    paypal.Button.render({
    
        env: 'sandbox', // Optional: specify 'sandbox' environment
    
        client: {
//            sandbox: 'AFcWxV21C7fd0v3bYYYRCpSSRl31AkTZcrAeJ5MvQyW4tyfeIRoLN-Sx'
            sandbox:'AVaWtm3BLXLqN62gpLKrO0KOneec9Jbbcn6Wf31ZkpRuC2Zpa8Q_hnLIXkupTEKr5RTWtQ543Z6rrbyU'
            
        },

        payment: function() {
        
            var env    = this.props.env;
            var client = this.props.client;
        
            return paypal.rest.payment.create(env, client, {
                transactions: [
                    {
                        amount: { total: '1.00', currency: 'USD' }
                    }
                ]
            });
        },

        commit: true, // Optional: show a 'Pay Now' button in the checkout flow

        onAuthorize: function(data, actions) {
        
            // Optional: display a confirmation page here
        
            return actions.payment.execute().then(function() {
                // Show a success page to the buyer
                
            });
        }

    }, '#paypal-button');
</script>-->
</body>
</html>