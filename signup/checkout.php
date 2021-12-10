<?php 

include 'config.php'; //include database
if(isset($_POST['update'])){
    if(!empty($_POST['firstname'] && $_POST['email']&& $_POST['address']&&$_POST['city'])&&$_POST['state']&& $_POST['zip']&& $_POST['cardname']&& $_POST['cardnumber']&& $_POST['expmonth']&&$_POST['expyear']&&$_POST['cvv']){ //checks if the various forms are not empty
     $firstname=$_POST['firstname']; // setting the form value in variable
     $email= $_POST['email'];
     $address = $_POST['address'];
     $city= $_POST['city'];
     $state= $_POST['state'];
     $zip=$_POST['zip'];
     $cardname=$_POST['cardname'];
     $cardnumber=  $_POST['cardnumber'];
     $expmonth= $_POST['expmonth'];
     $expyear= $_POST['expyear'];
     $cvv=  $_POST['cvv'];
     
     $sql="INSERT INTO `checkout`(`Fullname`, `email`, `address`, `city`, `zip`, `state`, `cardname`, `cardnumber`, `expmonth`, `cvv`, `expyear`) VALUES 
     ('$firstname','$email','$address','$city','$zip','$state','$cardname','$cardnumber','$expmonth','$cvv','$expyear')"; //inserting into the checkout table with the various info from the forms
        if (mysqli_query($conn,$sql)) {
            echo "<script>alert('success.')</script>"; //displays when successful
                } else {
            echo 'error'; // displays when there is an error
                
        }
    }
    else{
        echo "<script>alert('complete the form.')</script>"; // displays if the form isnt complete
        }
}

?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Model Comparison">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">      
    <link href="assets/css/checkout.css" type="text/css"
	rel="stylesheet" />
      <title>checkout</title>

       <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
</head>
<body>
    <!--source: W3schools link:https://www.w3schools.com/howto/howto_css_checkout_form.asp-->

     <!--------------------------------------------------------------checkout form------------------------------------------------------------------------------------------------------------------>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form method ='post' action='updatecheck.php'>

        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">

            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>

        </div>
        <input type="submit" name='update' value="Continue to checkout" class="btn"> </input>

</form>
  <!--------------------------------------------------------------checkout form------------------------------------------------------------------------------------------------------------------>
    </div>
  </div>

  
</body>
</html>