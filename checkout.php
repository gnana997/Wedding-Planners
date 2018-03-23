<?php
require 'stripe/Stripe.php';
require 'config/config.php';
require 'login_handler.php';
$total = $_SESSION['order'];
$total = $total * 100;
$user = $_SESSION['username'];
Stripe::setApiKey("sk_test_HRPAr9zYbMKsB5x3Jn3vUWof");
if(isset($_POST['stripeToken']))
{
	$amount_cents = str_replace(".","","10.52");  // Chargeble amount
	$invoiceid = "14526321";                      // Invoice ID
	$description = "Invoice #" . $invoiceid . " - " . $invoiceid;
	try {
		$charge = Stripe_Charge::create(array(		 
			  "amount" => 1000,
			  "currency" => "usd",
			  "source" => $_POST['stripeToken'],
			  "description" => $description)			  
		);
		// Payment has succeeded, no exceptions were thrown or otherwise caught				
		$result = "success";
		$query2 = mysqli_query($con,"DELETE FROM orders WHERE username = '$user'");
		echo "<BR>Stripe Payment Status : ".$result;
		if($result == 'success'){?>
			<script type="text/javascript">
				alert("Your order has been placed..");
				window.location.href = "index.php";
			</script><?php
			
			
		}else{
			
		}
		

	} catch(Stripe_CardError $e) {			
	$error = $e->getMessage();
		$result = "1declined";
	} catch (Stripe_InvalidRequestError $e) {
		$result = "2declined";		  
	} catch (Stripe_AuthenticationError $e) {
		$result = "3declined";
	} catch (Stripe_ApiConnectionError $e) {
		$result = "4declined";
	} catch (Stripe_Error $e) {
		$result = "5declined";
	} catch (Exception $e) {
		if ($e->getMessage() == "zip_check_invalid") {
			$result = "6declined";
		} else if ($e->getMessage() == "address_check_invalid") {
			$result = "7declined";
		} else if ($e->getMessage() == "cvc_check_invalid") {
			$result = "8declined";
		} else {
			$result = "9declined";
		}		  
	}
	
	
    
}
?>
<form action="" method="POST" style = "margin-top: 150px;margin-left: 650px;">
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="pk_test_yG7WnW259wcdfL2rXoWRA8HX"
    data-amount= <?php echo $total;?>
    data-name="Wedding Planner"
    data-description="Payment"
    data-locale="auto"
    data-zip-code="true">
  </script>
</form> 