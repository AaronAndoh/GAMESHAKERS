<?php

include 'config.php'; //include database connection

session_start(); //start session to store user name

if (!isset($_SESSION['username'])) {
    $username=$_SESSION['username'];
    header("Location: index.php");
}

$query = "SELECT * from checkout"; //query to select from checkbox

$result = mysqli_query($conn,$query); // running query

if (isset($_POST['update'])){ //when update button is clicked
   $new=$_POST['new']; // set the info from the form into variables
   $new2 = $_POST['new2'];
   $new3 = $_POST['new3'];
   $old1 = $_POST['name'];
   $old2 = $_POST['name2'];
   $old3 = $_POST['name3'];
    $update = "UPDATE `checkout` SET `Fullname`='$new' WHERE `email`='$old2' "; //update query
    $update1=  mysqli_query($conn,$update); // run query

    if ($update1) {
     echo "<script>alert('updated Sucessfully.')</script>"; //displays when success
          } else {
      echo 'error'; //dispays when error
          
 }
 }
 if (isset($_POST['update1'])){ //when update button is clicked
    $new=$_POST['new']; // set the info from the form into variables
    $new2 = $_POST['new2'];
    $new3 = $_POST['new3'];
    $old1 = $_POST['name'];
    $old2 = $_POST['name2'];
    $old3 = $_POST['name3'];
     $update = "UPDATE `checkout` SET `email`='$new2' WHERE `email`='$old2' ";
     $update1=  mysqli_query($conn,$update);
 
     if ($update1) {
      echo "<script>alert('updated Sucessfully.')</script>"; //displays when success
           } else {
       echo 'error'; //dispays when error
           
  }
  }
  if (isset($_POST['update2'])){ //when update button is clicked
    $new=$_POST['new']; // set the info from the form into variables
    $new2 = $_POST['new2'];
    $new3 = $_POST['new3'];
    $old1 = $_POST['name'];
    $old2 = $_POST['name2'];
    $old3 = $_POST['name3'];
     $update = "UPDATE `checkout` SET `address`='$new3' WHERE `email`='$old2' ";
     $update1=  mysqli_query($conn,$update);
 
     if ($update1) {
      echo "<script>alert('updated Sucessfully.')</script>";//displays when success
           } else {
       echo 'error'; //dispays when error
           
  }
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
    <title>Cart</title>
    <!-----------------------------------------------------css/scripts links--------------------------------------------------------------------------------------------------------------------------->
    <link rel="stylesheet" href="assets/css/nicepage.css" media="screen">
<link rel="stylesheet" href="assets/css/Cart.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.30.2, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    <!-----------------------------------------------------css/scripts links------------------------------------------------------>
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
        <a href="../signup/home.php" class="u-image u-logo u-image-1" data-image-width="1907" data-image-height="1302">
          <img src="./assets/GS1.png" class="u-logo-image u-logo-image-1">
        </a>
      </div></header> 
      
<div class="bs-example">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="page-header clearfix">
<h2 class="pull-left">update</h2>
</div>
<?php
$result = mysqli_query($conn,"SELECT * FROM checkout"); // selecting from the database
?>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<div class='tablemove'>
    <!--table to display the items in the cart-->
<table class='table' style="border: 0px solid white; border-collapse: collapse;width:100%;">
<tr style ="width=100%" >
<td  style="border: 1px solid black; border-collapse: collapse; background-color: #CDDDEE; width=100%;">old username</td>
<td  style="border: 1px solid black; border-collapse: collapse; background-color: #CDDDEE;width=100%;">new username</td>
<td  style="border: 1px solid black; border-collapse: collapse; background-color: #CDDDEE;width=50%;"></td>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) { // while loop that keeps running untill it has fetch all he information from the database
?>
<tr style="width:100%;">
<td  style="border: 1px solid black; border-collapse: collapse; background-color: #CDDDEE;width=100%;"><?php echo $row["Fullname"]; ?></td>
<td  style="border: 1px solid black; border-collapse: collapse; background-color: #CDDDEE;width=100%;"><form method='post'>
    <input type='text' name='new' ></input>
    <input type=hidden name="name1" value="<?php echo $row["Fullname"]; ?>">

<?php

?></td>
<td  style="border: 1px solid black; border-collapse: collapse; background-color: #CDDDEE; width=50%;">


    <input type='submit' name='update' value='update'style="background-color:green; color:white" onclick="return confirm ('Are you sure you want to update??')"></input>
    <input type=hidden name="name" >

<?php

?>

</td>
</tr>

<tr style="width:100%;">
<td  style="border: 1px solid black; border-collapse: collapse; background-color: #CDDDEE;width=100%;"><?php echo $row["email"]; ?></td>
<td  style="border: 1px solid black; border-collapse: collapse; background-color: #CDDDEE;width=100%;">
    <input type='email' name='new2' ></input>
    <input type=hidden name="name2" value='<?php echo $row["email"]; ?>'>

<?php

?></td>
<td  style="border: 1px solid black; border-collapse: collapse; background-color: #CDDDEE; width=50%;">


    <input type='submit' name='update1' value='update'style="background-color:green; color:white" onclick="return confirm ('Are you sure you want to update??')"></input>


<?php

?>

</td>

</tr>

<tr style="width:100%;">
<td  style="border: 1px solid black; border-collapse: collapse; background-color: #CDDDEE;width=100%;"><?php echo $row["address"]; ?></td>
<td  style="border: 1px solid black; border-collapse: collapse; background-color: #CDDDEE;width=100%;">
    <input type='text' name='new3' ></input>
    <input type=hidden name="name3" value="<?php echo $row["address"]; ?>">

<?php

?></td>
<td  style="border: 1px solid black; border-collapse: collapse; background-color: #CDDDEE; width=50%;">


    <input type='submit' name='update2' value='update'style="background-color:green; color:white" onclick="return confirm ('Are you sure you want to update??')"></input>
    <input type=hidden name="name" value="<?php echo $row["item"]; ?>">
</form>
<?php

?>

</td>
</tr>
<?php
$i++;
}
?>
</table>
<?php
}
else{
echo "No result found"; //returns if there are no results in the table
}
?>
</div>
</div>
</div>        
</div>
</div>