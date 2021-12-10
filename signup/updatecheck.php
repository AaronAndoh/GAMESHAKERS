<?php 

include 'config.php'; //database connection;

?>


<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
     <!--------------------------------------------------------------------script/css links--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <meta name="keywords" content="Model Comparison">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">      
    <link href="assets/css/checkout.css" type="text/css"
	rel="stylesheet" />
      <!--------------------------------------------------------------------script/css links--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
      <title>Confirm</title>
</head>
<body>
<h1>you have successfully made the order</h1> <!--display information-->
<h1>Do you wish to update your information??</h1> <!--display information-->

<form method='post' action='update.php'> <!--form that moves to update.php page-->
    <input type='submit' value='Update' class='btn'></input> <!--display information-->
</form>

</body>

</html>