<?php

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['email'])) {
    header("Location: home.php");
}



?>
 



<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Product 1 Title, Product 2 Title, Product 3 Title">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>profile</title>
    <link rel="stylesheet" href="assets/css/nicepage.css" media="screen">
<link rel="stylesheet" href="assets/css/Cart.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.30.2, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/GS1.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Cart">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body"><header class="u-clearfix u-header u-palette-1-base u-header" id="sec-a81f"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="1907" data-image-height="1302">
          <img src="./assets/GS1.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700; text-transform: uppercase;">
            <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link" href="#">
              <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</symbol>
</defs></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-30 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-white u-text-grey-90 u-text-hover-grey-90" href="http://localhost/signup/home.php" style="padding: 10px 0px;">Home</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-white u-text-grey-90 u-text-hover-grey-90" href="http://localhost/signup/Game.php" style="padding: 10px 0px;">Games</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-white u-text-grey-90 u-text-hover-grey-90" href="http://localhost/signup/Accessories.php" style="padding: 10px 0px;">Accessories</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-white u-text-grey-90 u-text-hover-grey-90" href="http://localhost/signup/console.php" style="padding: 10px 0px;">Consoles</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-white u-text-grey-90 u-text-hover-grey-90" href="http://localhost/signup/Aboutus.php" style="padding: 10px 0px;">About Us</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-white u-text-grey-90 u-text-hover-grey-90" href="#" style="padding: 10px 0px;">profile</a>
</li></ul>
          </div>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.html" style="padding: 10px 0px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Games.html" style="padding: 10px 0px;">Games</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="http://localhost/signup/Accessories.php" style="padding: 10px 0px;">Accessories</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Consoles.html" style="padding: 10px 0px;">Consoles</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="About-us.html" style="padding: 10px 0px;">About Us</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Cart.html" style="padding: 10px 0px;">Cart</a>
</li></ul>

                


  <h4 style="color:white; font-weight:bold;">Welcome to GameShakers <?php echo  $_SESSION['username']; ?></h4></div>
  <span class="login-signup btn btn-primary"><a href="logout.php" style="color:white">Logout</a></span>
	
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
        </div></header>
        <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
<div class=table>
          <table  style="border: 0px solid white; border-collapse: collapse;padding-left: 150px;">
<tr style ="width=100%" >
<td  style="border: 1px solid black; border-collapse: collapse; background-color: #CDDDEE; width=100%;">Email</td>
<td  style="border: 1px solid black; border-collapse: collapse; background-color: #CDDDEE;width=100%;">New Email</td>
<td  style="border: 1px solid black; border-collapse: collapse; background-color: #CDDDEE;width=100%;">  </td>
</tr>

<tr style="width=100%;">
<td  style="border: 1px solid black; border-collapse: collapse; background-color: #CDDDEE;width=100%;">
<?php echo  $_SESSION['email']?>
</td>

<td  style="border: 1px solid black; border-collapse: collapse; background-color: #CDDDEE;width=100%;">
<form method = 'POST'>
    <input type='email' name='Newusername'></input>

</td>

<td  style="border: 1px solid black; border-collapse: collapse; background-color: #CDDDEE;width=100%;">
    <input type='submit' name='update' value="update"></input>
</form>
</td>
</tr>

<?php
if (isset($_POST['update'])){
    $newusername = $_POST['Newusername'];
    $oldusername=$_SESSION['email'];
    $sql = "UPDATE `tbl_member` SET `email`='$newusername' WHERE 'email' = '$oldusername'";
    if (mysqli_query($conn,$sql)) {
        echo "<script>alert('added to your cart.')</script>";
      } else {
        echo 'error';
      
  }
}

?>
</div>