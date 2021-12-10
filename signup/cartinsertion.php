<?php 

include 'config.php'; //include database connnection


//inserts information into the orders table after the buy now

if (isset($_POST['fifa22'])){
    $item = 'Fifa 22';
    $price = '50.0';
  	$sql = "INSERT INTO orders (price,item)	VALUES ('$price','$item')";
		
      if (mysqli_query($conn,$sql)) {
        echo "<script>alert('added to your cart.')</script>";
			} else {
        echo 'error';
			
}
}


if (isset($_POST['nba'])){
  $item = 'Nba 2k 22';
  $price = '45.0';
  $sql = "INSERT INTO orders (price,item)	VALUES ('$price','$item')";
  
    if (mysqli_query($conn,$sql)) {
      echo "<script>alert('added to your cart.')</script>";
    } else {
      echo 'error';
    
}
}

if (isset($_POST['cod'])){
  $item = 'God of War';
  $price = '50.0';
  $sql = "INSERT INTO orders (price,item)	VALUES ('$price','$item')";
  
    if (mysqli_query($conn,$sql)) {
      echo "<script>alert('added to your cart.')</script>";
    } else {
      echo 'error';
    
}
}


if (isset($_POST['wwe'])){
  $item = 'WWE 2K 22';
  $price = '40.0';
  $sql = "INSERT INTO orders (price,item)	VALUES ('$price','$item')";
  
    if (mysqli_query($conn,$sql)) {
      echo "<script>alert('added to your cart.')</script>";
    } else {
      echo 'error';
    
}
}

if (isset($_POST['farcry'])){
  $item = 'God of War';
  $price = '30.0';
  $sql = "INSERT INTO orders (price,item)	VALUES ('$price','$item')";
  
    if (mysqli_query($conn,$sql)) {
      echo "<script>alert('added to your cart.')</script>";
    } else {
      echo 'error';
    
}
}

if (isset($_POST['pes'])){
  $item = 'pro evolution soccer 2021';
  $price = '35.0';
  $sql = "INSERT INTO orders (price,item)	VALUES ('$price','$item')";
  
    if (mysqli_query($conn,$sql)) {
      echo "<script>alert('added to your cart.')</script>";
    } else {
      echo 'error';
    
}
}


if (isset($_POST['mario'])){
  $item = 'mario kart delexue 8';
  $price = '35.0';
  $sql = "INSERT INTO orders (price,item)	VALUES ('$price','$item')";
  
    if (mysqli_query($conn,$sql)) {
      echo "<script>alert('added to your cart.')</script>";
    } else {
      echo 'error';
    
}
}

if (isset($_POST['death'])){
  $item = 'Deathpool Deleuxe Edition';
  $price = '50.0';
  $sql = "INSERT INTO orders (price,item)	VALUES ('$price','$item')";
  
    if (mysqli_query($conn,$sql)) {
      echo "<script>alert('added to your cart.')</script>";
    } else {
      echo 'error';
    
}
}

if (isset($_POST['nfs'])){
  $item = 'Need for Speed Heat';
  $price = '30.0';
  $sql = "INSERT INTO orders (price,item)	VALUES ('$price','$item')";
  
    if (mysqli_query($conn,$sql)) {
      echo "<script>alert('added to your cart.')</script>";
    } else {
      echo 'error';
    
}
}

if (isset($_POST['f6'])){
  $item = 'Farcry 6';
  $price = '50.0';
  $sql = "INSERT INTO orders (price,item)	VALUES ('$price','$item')";
  
    if (mysqli_query($conn,$sql)) {
      echo "<script>alert('added to your cart.')</script>";
    } else {
      echo 'error';
    
}
}

if (isset($_POST['demon'])){
  $item = 'Demons Soul';
  $price = '45.0';
  $sql = "INSERT INTO orders (price,item)	VALUES ('$price','$item')";
  
    if (mysqli_query($conn,$sql)) {
      echo "<script>alert('added to your cart.')</script>";
    } else {
      echo 'error';
    
}
}

if (isset($_POST['codwar'])){
  $item = 'God of War Warzone';
  $price = '50.0';
  $sql = "INSERT INTO orders (price,item)	VALUES ('$price','$item')";
  
    if (mysqli_query($conn,$sql)) {
      echo "<script>alert('added to your cart.')</script>";
    } else {
      echo 'error';
    
}
}


if (isset($_POST['rig'])){
    $item = 'RIG 500 PRO HS GEN 2 GAMING HEADSET';
    $price = '55.0';
  	$sql = "INSERT INTO orders (price,item)	VALUES ('$price','$item')";
		
      if (mysqli_query($conn,$sql)) {
        echo "<script>alert('added to your cart.')</script>";
			} else {
        echo 'error';
			
}
}


if (isset($_POST['blue'])){
  $item = 'BlueFire Professional 3.5mm PS4 Gaming Headset';
  $price = '15.0';
  $sql = "INSERT INTO orders (price,item)	VALUES ('$price','$item')";
  
    if (mysqli_query($conn,$sql)) {
      echo "<script>alert('added to your cart.')</script>";
    } else {
      echo 'error';
    
}
}

if (isset($_POST['ben'])){
  $item = 'BENGOO V-4 Gaming Headset';
  $price = '20.0';
  $sql = "INSERT INTO orders (price,item)	VALUES ('$price','$item')";
  
    if (mysqli_query($conn,$sql)) {
      echo "<script>alert('added to your cart.')</script>";
    } else {
      echo 'error';
    
}
}

if (isset($_POST['ps4con'])){
  $item = 'PS4 CONTROLLER CHARGER DOCK STATION';
  $price = '12.0';
  $sql = "INSERT INTO orders (price,item)	VALUES ('$price','$item')";
  
    if (mysqli_query($conn,$sql)) {
      echo "<script>alert('added to your cart.')</script>";
    } else {
      echo 'error';
    
}
}

if (isset($_POST['ej'])){
  $item = 'EJGAME PS5 CONTROLLER CHARGER';
  $price = '14.0';
  $sql = "INSERT INTO orders (price,item)	VALUES ('$price','$item')";
  
    if (mysqli_query($conn,$sql)) {
      echo "<script>alert('added to your cart.')</script>";
    } else {
      echo 'error';
    
}
}


if (isset($_POST['ps4u'])){
  $item = 'PS4 UNIVERSAL CONTROLLER CHARGER KINGTOP';
  $price = '18.0';
  $sql = "INSERT INTO orders (price,item)	VALUES ('$price','$item')";
  
    if (mysqli_query($conn,$sql)) {
      echo "<script>alert('added to your cart.')</script>";
    } else {
      echo 'error';
   
    }
}
if (isset($_POST['ps4cable'])){
  $item = 'PS4 CONTROLLER CHARGER CHARGING CABLE';
  $price = '6.0';
  $sql = "INSERT INTO orders (price,item)	VALUES ('$price','$item')";
  
    if (mysqli_query($conn,$sql)) {
      echo "<script>alert('added to your cart.')</script>";
    } else {
      echo 'error';
    
}
}

if (isset($_POST['port'])){
  $item = '4-PORT USB 3.0 HUB HIGH SPEED USB CABLE ADAPTER EXPANSION';
  $price = '15.0';
  $sql = "INSERT INTO orders (price,item)	VALUES ('$price','$item')";
  
    if (mysqli_query($conn,$sql)) {
      echo "<script>alert('added to your cart.')</script>";
    } else {
      echo 'error';
    
}
}

if (isset($_POST['GodEs'])){
  $item = 'GOD OF ESYWEN RECHARGEABLE BATTERY PACKS FOR XBOX';
  $price = '25.0';
  $sql = "INSERT INTO orders (price,item)	VALUES ('$price','$item')";
  
    if (mysqli_query($conn,$sql)) {
      echo "<script>alert('added to your cart.')</script>";
    } else {
      echo 'error';
    
}
}

if (isset($_POST['xboxelite'])){
  $item = 'XBOX ELITE SERIES 2 CONTROLLER – BLACK';
  $price = '50.0';
  $sql = "INSERT INTO orders (price,item)	VALUES ('$price','$item')";
  
    if (mysqli_query($conn,$sql)) {
      echo "<script>alert('added to your cart.')</script>";
    } else {
      echo 'error';
    
}
}


if (isset($_POST['dualsense'])){
  $item = 'PLAYSTATION DUALSENSE WIRELESS CONTROLLER – MIDNIGHT BLACK';
  $price = '55.0';
  $sql = "INSERT INTO orders (price,item)	VALUES ('$price','$item')";
  
    if (mysqli_query($conn,$sql)) {
      echo "<script>alert('added to your cart.')</script>";
    } else {
      echo 'error';
    
}
}

if (isset($_POST['case'])){
  $item = 'ORZLY CARRY CASE COMPATIBLE WITH NINTENDO SWITCHGOD OF WAR';
  $price = '10.0';
  $sql = "INSERT INTO orders (price,item)	VALUES ('$price','$item')";
  
    if (mysqli_query($conn,$sql)) {
      echo "<script>alert('added to your cart.')</script>";
    } else {
      echo 'error';
    
}
}


if (isset($_POST['Ps5'])){
    $item = 'Sony Playstation 5 Disc Version Gaming Console';
    $price = '450.0';
    $sql = "INSERT INTO orders (price,item)	VALUES ('$price','$item')";
    
      if (mysqli_query($conn,$sql)) {
        echo "<script>alert('added to your cart.')</script>";
      } else {
        echo 'error';
      
  }
  }

  if (isset($_POST['xboxX'])){
    $item = 'Microsoft Xbox Series X';
    $price = '420.0';
    $sql = "INSERT INTO orders (price,item)	VALUES ('$price','$item')";
    
      if (mysqli_query($conn,$sql)) {
        echo "<script>alert('added to your cart.')</script>";
      } else {
        echo 'error';
      
  }
  }


  if (isset($_POST['ps4'])){
    $item = 'sony Playstation 4 pro';
    $price = '400.0';
    $sql = "INSERT INTO orders (price,item)	VALUES ('$price','$item')";
    
      if (mysqli_query($conn,$sql)) {
        echo "<script>alert('added to your cart.')</script>";
      } else {
        echo 'error';
      
  }
  }

  if (isset($_POST['switch'])){
    $item = 'Nintendo Switch 32GB console';
    $price = '410.0';
    $sql = "INSERT INTO orders (price,item)	VALUES ('$price','$item')";
    
      if (mysqli_query($conn,$sql)) {
        echo "<script>alert('added to your cart.')</script>";
      } else {
        echo 'error';
      
  }
  }

  if (isset($_POST['switchlite'])){
    $item = 'Nintendo Switch Lite';
    $price = '250.0';
    $sql = "INSERT INTO orders (price,item)	VALUES ('$price','$item')";
    
      if (mysqli_query($conn,$sql)) {
        echo "<script>alert('added to your cart.')</script>";
      } else {
        echo 'error';
      
  }
  }


  if (isset($_POST['xbox360'])){
    $item = 'Xbox360';
    $price = '200.0';
    $sql = "INSERT INTO orders (price,item)	VALUES ('$price','$item')";
    
      if (mysqli_query($conn,$sql)) {
        echo "<script>alert('added to your cart.')</script>";
      } else {
        echo 'error';
      
  }
  }

  
  if (isset($_POST['vita'])){
    $item = 'Sony Playstation Vita';
    $price = '160.0';
    $sql = "INSERT INTO orders (price,item)	VALUES ('$price','$item')";
    
      if (mysqli_query($conn,$sql)) {
        echo "<script>alert('added to your cart.')</script>";
      } else {
        echo 'error';
      
  }
  }

mysqli_close($conn); // close database
?>
