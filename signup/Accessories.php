<!--source: Nicepage.com-->

<?php 

include 'cartinsertion.php'; //include the insertion methods used
?>


<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Accessories</title>
     <!-------------------------------------------------------------------------------------css/script links---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

    <link rel="stylesheet" href="assets/css/nicepage.css" media="screen">
<link rel="stylesheet" href="assets/css/Accessories.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.30.2, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    
     <!----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/GS1.png"
}</script>
 <!----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Accessories">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body"><header class="u-clearfix u-header u-palette-1-base u-header" id="sec-a81f"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="http://localhost/signup/home.php" class="u-image u-logo u-image-1" data-image-width="1907" data-image-height="1302">
          <img src="./assets/GS1.png" class="u-logo-image u-logo-image-1">
        </a>
         <!--------------------------------------------------------------------Navgivation bar--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
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
            <ul class="u-nav u-spacing-30 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-white u-text-grey-90 u-text-hover-grey-90" href="../signup/home.php" style="padding: 10px 0px;">Home</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-white u-text-grey-90 u-text-hover-grey-90" href="../signup/Game.php" style="padding: 10px 0px; onclick='loaddoc()'">Games</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-white u-text-grey-90 u-text-hover-grey-90" href="#" style="padding: 10px 0px; onclick='loaddoc()'">Accessories</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-white u-text-grey-90 u-text-hover-grey-90" href="../signup/console.php" style="padding: 10px 0px; onclick='loaddoc()'">Consoles</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-white u-text-grey-90 u-text-hover-grey-90" href="../signup/Aboutus.php" style="padding: 10px 0px; onclick='loaddoc()'">About Us</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-white u-text-grey-90 u-text-hover-grey-90" href="../signup/cart.php" style="padding: 10px 0px; onclick='loaddoc()'">Cart</a>

</li></ul>
          </div>
 <!--------------------------------------------------------Ajax code--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
          <script>
            function loadDoc(){
              const xhttp = new XMLHttpRequest();
              xhttp.onload = function(){
                document.getElementById("demo").innerHTML = this.responseText;
              }
              xhttp.open('Post'.'ajax_info.txt');
              xhttp.send();
            }
            </script>
             <!----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.html" style="padding: 10px 0px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Games.html" style="padding: 10px 0px;">Games</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Accessories.html" style="padding: 10px 0px;">Accessories</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Consoles.html" style="padding: 10px 0px;">Consoles</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="About-us.html" style="padding: 10px 0px;">About Us</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Cart.html" style="padding: 10px 0px;">Cart</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
         <!----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
      </div></header>
       <!-------------------------------------------------------------------------------display items avaliable---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <section class="u-clearfix u-section-1" id="sec-374e">
      <div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-custom-font u-font-open-sans u-text u-text-default u-text-1">ACCESSORIES AVAILABLE</p>
        <div class="u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-list-item u-repeater-item u-white u-list-item-1">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                <div class="u-align-center u-container-style u-expanded-width u-group u-palette-5-dark-2 u-group-1">
                  <div class="u-container-layout u-container-layout-2">
                    <h3 class="u-custom-font u-font-raleway u-text u-text-2"> RIG 500 PRO HS GEN 2 GAMING HEADSET</h3>
                  </div>
                </div>
                <img alt="" class="u-expanded-width u-image u-image-contain u-image-default u-image-1" src="./assets/41zS-tpTxL._SX342_SY445_.jpg" data-image-width="342" data-image-height="407">
                <div class="u-container-style u-expanded-width u-group u-group-2">
                  <div class="u-container-layout u-valign-top u-container-layout-3">
                    <p class="u-align-center u-text u-text-3">Starting at <b>$55</b>
                    </p>
                    <ul class="u-align-left u-custom-list u-text u-text-4">
                      <li>
                        <div class="class u-list-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512.019 512.019" x="0px" y="0px" id="svg-b379"><path fill="currentColor" d="M362.676,0H149.343C119.888,0,96.01,23.878,96.01,53.333v448 c-0.011,5.891,4.757,10.675,10.648,10.686c2.84,0.005,5.565-1.123,7.571-3.134L256.01,367.083l141.781,141.781 c4.16,4.171,10.914,4.179,15.085,0.019c2.006-2.001,3.133-4.717,3.134-7.55v-448C416.01,23.878,392.131,0,362.676,0z"></path></svg>
                        </div>High Fidelity Sound
                      </li>
                      <li>
                        <div class="class u-list-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512.019 512.019" x="0px" y="0px" id="svg-b379"><path fill="currentColor" d="M362.676,0H149.343C119.888,0,96.01,23.878,96.01,53.333v448 c-0.011,5.891,4.757,10.675,10.648,10.686c2.84,0.005,5.565-1.123,7.571-3.134L256.01,367.083l141.781,141.781 c4.16,4.171,10.914,4.179,15.085,0.019c2.006-2.001,3.133-4.717,3.134-7.55v-448C416.01,23.878,392.131,0,362.676,0z"></path></svg>
                        </div>
                      </li>
                      <li>Superior Comfort</li>
                      <li>
                        <div class="class u-list-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512.019 512.019" x="0px" y="0px" id="svg-b379"><path fill="currentColor" d="M362.676,0H149.343C119.888,0,96.01,23.878,96.01,53.333v448 c-0.011,5.891,4.757,10.675,10.648,10.686c2.84,0.005,5.565-1.123,7.571-3.134L256.01,367.083l141.781,141.781 c4.16,4.171,10.914,4.179,15.085,0.019c2.006-2.001,3.133-4.717,3.134-7.55v-448C416.01,23.878,392.131,0,362.676,0z"></path></svg>
                        </div>Extreme Durability
                      </li>
                      <li>
                        <div class="class u-list-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512.019 512.019" x="0px" y="0px" id="svg-b379"><path fill="currentColor" d="M362.676,0H149.343C119.888,0,96.01,23.878,96.01,53.333v448 c-0.011,5.891,4.757,10.675,10.648,10.686c2.84,0.005,5.565-1.123,7.571-3.134L256.01,367.083l141.781,141.781 c4.16,4.171,10.914,4.179,15.085,0.019c2.006-2.001,3.133-4.717,3.134-7.55v-448C416.01,23.878,392.131,0,362.676,0z"></path></svg>
                        </div>Multi-Platform Compatible
                      </li>
                    </ul>
                    <form method='Post'action='#'>
                    <input type='submit' name='rig' value='Buy Now' class="u-border-none u-btn u-btn-rectangle u-button-style u-custom-color-1 u-btn-1"></input>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item u-video-cover u-white u-list-item-2">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4">
                <div class="u-align-center u-container-style u-expanded-width u-group u-palette-4-base u-video-cover u-group-3">
                  <div class="u-container-layout u-container-layout-5">
                    <h3 class="u-custom-font u-font-raleway u-text u-text-5"> BlueFire Professional 3.5mm PS4 Gaming Headset Headphone with Mic and LED Lights&nbsp;</h3>
                  </div>
                </div>
                <img alt="" class="u-expanded-width u-image u-image-contain u-image-default u-image-2" src="./assets/61XZFvw1j1L._AC_SL1478_.jpg" data-image-width="1174" data-image-height="1478">
                <div class="u-container-style u-expanded-width u-group u-video-cover u-group-4">
                  <div class="u-container-layout u-valign-top u-container-layout-6">
                    <p class="u-align-center u-text u-text-default u-text-6">Starting at <b>$15</b>
                    </p>
                    <ul class="u-align-left u-custom-list u-text u-text-7">
                      <li>
                        <div class="class u-list-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512.019 512.019" x="0px" y="0px" id="svg-0d13"><path fill="currentColor" d="M362.676,0H149.343C119.888,0,96.01,23.878,96.01,53.333v448 c-0.011,5.891,4.757,10.675,10.648,10.686c2.84,0.005,5.565-1.123,7.571-3.134L256.01,367.083l141.781,141.781 c4.16,4.171,10.914,4.179,15.085,0.019c2.006-2.001,3.133-4.717,3.134-7.55v-448C416.01,23.878,392.131,0,362.676,0z"></path></svg>
                        </div>Comfortable and Light weight
                      </li>
                      <li>
                        <div class="class u-list-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512.019 512.019" x="0px" y="0px" id="svg-0d13"><path fill="currentColor" d="M362.676,0H149.343C119.888,0,96.01,23.878,96.01,53.333v448 c-0.011,5.891,4.757,10.675,10.648,10.686c2.84,0.005,5.565-1.123,7.571-3.134L256.01,367.083l141.781,141.781 c4.16,4.171,10.914,4.179,15.085,0.019c2.006-2.001,3.133-4.717,3.134-7.55v-448C416.01,23.878,392.131,0,362.676,0z"></path></svg>
                        </div>Long Soft Braided Cord
                      </li>
                      <li>
                        <div class="class u-list-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512.019 512.019" x="0px" y="0px" id="svg-0d13"><path fill="currentColor" d="M362.676,0H149.343C119.888,0,96.01,23.878,96.01,53.333v448 c-0.011,5.891,4.757,10.675,10.648,10.686c2.84,0.005,5.565-1.123,7.571-3.134L256.01,367.083l141.781,141.781 c4.16,4.171,10.914,4.179,15.085,0.019c2.006-2.001,3.133-4.717,3.134-7.55v-448C416.01,23.878,392.131,0,362.676,0z"></path></svg>
                        </div>Smooth Mic and Volume Control
                      </li>
                      <li>
                        <div class="class u-list-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512.019 512.019" x="0px" y="0px" id="svg-0d13"><path fill="currentColor" d="M362.676,0H149.343C119.888,0,96.01,23.878,96.01,53.333v448 c-0.011,5.891,4.757,10.675,10.648,10.686c2.84,0.005,5.565-1.123,7.571-3.134L256.01,367.083l141.781,141.781 c4.16,4.171,10.914,4.179,15.085,0.019c2.006-2.001,3.133-4.717,3.134-7.55v-448C416.01,23.878,392.131,0,362.676,0z"></path></svg>
                        </div>Widely Compatible &amp; Versatile
                      </li>
                    </ul>
                    <form method='Post'action='#'>
                    <input type='submit' name='blue' value='Buy Now' class="u-border-none u-btn u-btn-rectangle u-button-style u-custom-color-1 u-btn-1"></input>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item u-video-cover u-white u-list-item-3">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-7">
                <div class="u-align-center u-container-style u-expanded-width u-group u-palette-5-dark-2 u-video-cover u-group-5">
                  <div class="u-container-layout u-container-layout-8">
                    <h3 class="u-custom-font u-font-raleway u-text u-text-8"> BENGOO V-4 Gaming Headset&nbsp;</h3>
                  </div>
                </div>
                <img alt="" class="u-expanded-width u-image u-image-contain u-image-default u-image-3" src="./assets/71PtY7s-ODL._AC_SL1500_.jpg" data-image-width="1358" data-image-height="1489">
                <div class="u-container-style u-expanded-width u-group u-video-cover u-group-6">
                  <div class="u-container-layout u-valign-top u-container-layout-9">
                    <p class="u-align-center u-text u-text-default u-text-9">Starting at <b>$20</b>
                    </p>
                    <ul class="u-align-left u-custom-list u-text u-text-10">
                      <li>
                        <div class="class u-list-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512.019 512.019" x="0px" y="0px" id="svg-6c62"><path fill="currentColor" d="M362.676,0H149.343C119.888,0,96.01,23.878,96.01,53.333v448 c-0.011,5.891,4.757,10.675,10.648,10.686c2.84,0.005,5.565-1.123,7.571-3.134L256.01,367.083l141.781,141.781 c4.16,4.171,10.914,4.179,15.085,0.019c2.006-2.001,3.133-4.717,3.134-7.55v-448C416.01,23.878,392.131,0,362.676,0z"></path></svg>
                        </div>Noise Cancelling
                      </li>
                      <li>
                        <div class="class u-list-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512.019 512.019" x="0px" y="0px" id="svg-6c62"><path fill="currentColor" d="M362.676,0H149.343C119.888,0,96.01,23.878,96.01,53.333v448 c-0.011,5.891,4.757,10.675,10.648,10.686c2.84,0.005,5.565-1.123,7.571-3.134L256.01,367.083l141.781,141.781 c4.16,4.171,10.914,4.179,15.085,0.019c2.006-2.001,3.133-4.717,3.134-7.55v-448C416.01,23.878,392.131,0,362.676,0z"></path></svg>
                        </div>Noise Isolating Microphone
                      </li>
                      <li>
                        <div class="class u-list-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512.019 512.019" x="0px" y="0px" id="svg-6c62"><path fill="currentColor" d="M362.676,0H149.343C119.888,0,96.01,23.878,96.01,53.333v448 c-0.011,5.891,4.757,10.675,10.648,10.686c2.84,0.005,5.565-1.123,7.571-3.134L256.01,367.083l141.781,141.781 c4.16,4.171,10.914,4.179,15.085,0.019c2.006-2.001,3.133-4.717,3.134-7.55v-448C416.01,23.878,392.131,0,362.676,0z"></path></svg>
                        </div> Great Humanized Design
                      </li>
                      <li>
                        <div class="class u-list-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512.019 512.019" x="0px" y="0px" id="svg-6c62"><path fill="currentColor" d="M362.676,0H149.343C119.888,0,96.01,23.878,96.01,53.333v448 c-0.011,5.891,4.757,10.675,10.648,10.686c2.84,0.005,5.565-1.123,7.571-3.134L256.01,367.083l141.781,141.781 c4.16,4.171,10.914,4.179,15.085,0.019c2.006-2.001,3.133-4.717,3.134-7.55v-448C416.01,23.878,392.131,0,362.676,0z"></path></svg>
                        </div>Wide Application
                      </li>
                    </ul>
                    <form method='Post'action='#'>
                    <input type='submit' name='ben' value='Buy Now' class="u-border-none u-btn u-btn-rectangle u-button-style u-custom-color-1 u-btn-1"></input>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="u-list u-list-2">
          <div class="u-repeater u-repeater-2">
            <div class="u-container-style u-list-item u-repeater-item u-white u-list-item-4">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-10">
                <div class="u-align-center u-container-style u-expanded-width u-group u-palette-5-dark-2 u-group-7">
                  <div class="u-container-layout u-container-layout-11">
                    <h3 class="u-custom-font u-font-raleway u-text u-text-11"> PS4 Controller Charger Dock Station</h3>
                  </div>
                </div>
                <img alt="" class="u-expanded-width u-image u-image-contain u-image-default u-image-4" src="./assets/61h-4NDgpNL._AC_SL1200_.jpg" data-image-width="1163" data-image-height="1060">
                <div class="u-container-style u-expanded-width u-group u-group-8">
                  <div class="u-container-layout u-valign-top u-container-layout-12">
                    <p class="u-align-center u-text u-text-12">Starting at <b>$12</b>
                    </p>
                    <ul class="u-align-left u-custom-list u-text u-text-13">
                      <li>
                        <div class="class u-list-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512.019 512.019" x="0px" y="0px" id="svg-b379"><path fill="currentColor" d="M362.676,0H149.343C119.888,0,96.01,23.878,96.01,53.333v448 c-0.011,5.891,4.757,10.675,10.648,10.686c2.84,0.005,5.565-1.123,7.571-3.134L256.01,367.083l141.781,141.781 c4.16,4.171,10.914,4.179,15.085,0.019c2.006-2.001,3.133-4.717,3.134-7.55v-448C416.01,23.878,392.131,0,362.676,0z"></path></svg>
                        </div>1.8- Hours Charging Chip
                      </li>
                      <li>
                        <div class="class u-list-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512.019 512.019" x="0px" y="0px" id="svg-b379"><path fill="currentColor" d="M362.676,0H149.343C119.888,0,96.01,23.878,96.01,53.333v448 c-0.011,5.891,4.757,10.675,10.648,10.686c2.84,0.005,5.565-1.123,7.571-3.134L256.01,367.083l141.781,141.781 c4.16,4.171,10.914,4.179,15.085,0.019c2.006-2.001,3.133-4.717,3.134-7.55v-448C416.01,23.878,392.131,0,362.676,0z"></path></svg>
                        </div>
                      </li>
                      <li>Multi Power Supply Device</li>
                      <li>
                        <div class="class u-list-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512.019 512.019" x="0px" y="0px" id="svg-b379"><path fill="currentColor" d="M362.676,0H149.343C119.888,0,96.01,23.878,96.01,53.333v448 c-0.011,5.891,4.757,10.675,10.648,10.686c2.84,0.005,5.565-1.123,7.571-3.134L256.01,367.083l141.781,141.781 c4.16,4.171,10.914,4.179,15.085,0.019c2.006-2.001,3.133-4.717,3.134-7.55v-448C416.01,23.878,392.131,0,362.676,0z"></path></svg>
                        </div>Updated Copper Contactor
                      </li>
                      <li>
                        <div class="class u-list-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512.019 512.019" x="0px" y="0px" id="svg-b379"><path fill="currentColor" d="M362.676,0H149.343C119.888,0,96.01,23.878,96.01,53.333v448 c-0.011,5.891,4.757,10.675,10.648,10.686c2.84,0.005,5.565-1.123,7.571-3.134L256.01,367.083l141.781,141.781 c4.16,4.171,10.914,4.179,15.085,0.019c2.006-2.001,3.133-4.717,3.134-7.55v-448C416.01,23.878,392.131,0,362.676,0z"></path></svg>
                        </div>LED Indicators
                      </li>
                    </ul>
                    <form method='Post'action='#'>
                    <input type='submit' name='ps4con' value='Buy Now' class="u-border-none u-btn u-btn-rectangle u-button-style u-custom-color-1 u-btn-1"></input>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item u-video-cover u-white u-list-item-5">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-13">
                <div class="u-align-center u-container-style u-expanded-width u-group u-palette-4-base u-video-cover u-group-9">
                  <div class="u-container-layout u-container-layout-14">
                    <h3 class="u-custom-font u-font-raleway u-text u-text-14"> EJGAME PS5 Controller Charger</h3>
                  </div>
                </div>
                <img alt="" class="u-expanded-width u-image u-image-contain u-image-default u-image-5" src="./assets/41JTW8tr3L._AC_SL1000_.jpg" data-image-width="1000" data-image-height="750">
                <div class="u-container-style u-expanded-width u-group u-video-cover u-group-10">
                  <div class="u-container-layout u-valign-top u-container-layout-15">
                    <p class="u-align-center u-text u-text-default u-text-15">Starting at <b>$14</b>
                    </p>
                    <ul class="u-align-left u-custom-list u-text u-text-16">
                      <li>
                        <div class="class u-list-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512.019 512.019" x="0px" y="0px" id="svg-0d13"><path fill="currentColor" d="M362.676,0H149.343C119.888,0,96.01,23.878,96.01,53.333v448 c-0.011,5.891,4.757,10.675,10.648,10.686c2.84,0.005,5.565-1.123,7.571-3.134L256.01,367.083l141.781,141.781 c4.16,4.171,10.914,4.179,15.085,0.019c2.006-2.001,3.133-4.717,3.134-7.55v-448C416.01,23.878,392.131,0,362.676,0z"></path></svg>
                        </div>Compatiblity
                      </li>
                      <li>
                        <div class="class u-list-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512.019 512.019" x="0px" y="0px" id="svg-0d13"><path fill="currentColor" d="M362.676,0H149.343C119.888,0,96.01,23.878,96.01,53.333v448 c-0.011,5.891,4.757,10.675,10.648,10.686c2.84,0.005,5.565-1.123,7.571-3.134L256.01,367.083l141.781,141.781 c4.16,4.171,10.914,4.179,15.085,0.019c2.006-2.001,3.133-4.717,3.134-7.55v-448C416.01,23.878,392.131,0,362.676,0z"></path></svg>
                        </div>High speed Charging Station
                      </li>
                      <li>
                        <div class="class u-list-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512.019 512.019" x="0px" y="0px" id="svg-0d13"><path fill="currentColor" d="M362.676,0H149.343C119.888,0,96.01,23.878,96.01,53.333v448 c-0.011,5.891,4.757,10.675,10.648,10.686c2.84,0.005,5.565-1.123,7.571-3.134L256.01,367.083l141.781,141.781 c4.16,4.171,10.914,4.179,15.085,0.019c2.006-2.001,3.133-4.717,3.134-7.55v-448C416.01,23.878,392.131,0,362.676,0z"></path></svg>
                        </div>LED Indicators
                      </li>
                      <li>
                        <div class="class u-list-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512.019 512.019" x="0px" y="0px" id="svg-0d13"><path fill="currentColor" d="M362.676,0H149.343C119.888,0,96.01,23.878,96.01,53.333v448 c-0.011,5.891,4.757,10.675,10.648,10.686c2.84,0.005,5.565-1.123,7.571-3.134L256.01,367.083l141.781,141.781 c4.16,4.171,10.914,4.179,15.085,0.019c2.006-2.001,3.133-4.717,3.134-7.55v-448C416.01,23.878,392.131,0,362.676,0z"></path></svg>
                        </div>Safe &amp; Reliable
                      </li>
                    </ul>
                    <form method='Post'action='#'>
                    <input type='submit' name='ej' value='Buy Now' class="u-border-none u-btn u-btn-rectangle u-button-style u-custom-color-1 u-btn-1"></input>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item u-video-cover u-white u-list-item-6">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-16">
                <div class="u-align-center u-container-style u-expanded-width u-group u-palette-5-dark-2 u-video-cover u-group-11">
                  <div class="u-container-layout u-container-layout-17">
                    <h3 class="u-custom-font u-font-raleway u-text u-text-17"> PS4 Universal Controller Charger KINGTOP</h3>
                  </div>
                </div>
                <img alt="" class="u-expanded-width u-image u-image-contain u-image-default u-image-6" src="./assets/61DYXHckeL._SL1200_.jpg" data-image-width="1200" data-image-height="1200">
                <div class="u-container-style u-expanded-width u-group u-video-cover u-group-12">
                  <div class="u-container-layout u-valign-top u-container-layout-18">
                    <p class="u-align-center u-text u-text-default u-text-18">Starting at <b>$18</b>
                    </p>
                    <ul class="u-align-left u-custom-list u-text u-text-19">
                      <li>
                        <div class="class u-list-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512.019 512.019" x="0px" y="0px" id="svg-6c62"><path fill="currentColor" d="M362.676,0H149.343C119.888,0,96.01,23.878,96.01,53.333v448 c-0.011,5.891,4.757,10.675,10.648,10.686c2.84,0.005,5.565-1.123,7.571-3.134L256.01,367.083l141.781,141.781 c4.16,4.171,10.914,4.179,15.085,0.019c2.006-2.001,3.133-4.717,3.134-7.55v-448C416.01,23.878,392.131,0,362.676,0z"></path></svg>
                        </div>Slim Fan Cooler Stand
                      </li>
                      <li>
                        <div class="class u-list-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512.019 512.019" x="0px" y="0px" id="svg-6c62"><path fill="currentColor" d="M362.676,0H149.343C119.888,0,96.01,23.878,96.01,53.333v448 c-0.011,5.891,4.757,10.675,10.648,10.686c2.84,0.005,5.565-1.123,7.571-3.134L256.01,367.083l141.781,141.781 c4.16,4.171,10.914,4.179,15.085,0.019c2.006-2.001,3.133-4.717,3.134-7.55v-448C416.01,23.878,392.131,0,362.676,0z"></path></svg>
                        </div>Space Saving Design
                      </li>
                      <li>
                        <div class="class u-list-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512.019 512.019" x="0px" y="0px" id="svg-6c62"><path fill="currentColor" d="M362.676,0H149.343C119.888,0,96.01,23.878,96.01,53.333v448 c-0.011,5.891,4.757,10.675,10.648,10.686c2.84,0.005,5.565-1.123,7.571-3.134L256.01,367.083l141.781,141.781 c4.16,4.171,10.914,4.179,15.085,0.019c2.006-2.001,3.133-4.717,3.134-7.55v-448C416.01,23.878,392.131,0,362.676,0z"></path></svg>
                        </div>2 Years Warranty
                      </li>
                      <li>
                        <div class="class u-list-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512.019 512.019" x="0px" y="0px" id="svg-6c62"><path fill="currentColor" d="M362.676,0H149.343C119.888,0,96.01,23.878,96.01,53.333v448 c-0.011,5.891,4.757,10.675,10.648,10.686c2.84,0.005,5.565-1.123,7.571-3.134L256.01,367.083l141.781,141.781 c4.16,4.171,10.914,4.179,15.085,0.019c2.006-2.001,3.133-4.717,3.134-7.55v-448C416.01,23.878,392.131,0,362.676,0z"></path></svg>
                        </div>Additional USB Cables
                      </li>
                    </ul>
                    <form method='Post'action='#'>
                    <input type='submit' name='ps4u' value='Buy Now' class="u-border-none u-btn u-btn-rectangle u-button-style u-custom-color-1 u-btn-1"></input>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="u-list u-list-3">
          <div class="u-repeater u-repeater-3">
            <div class="u-container-style u-list-item u-repeater-item u-white u-list-item-7">
              <div class="u-container-layout u-similar-container u-container-layout-19">
                <div class="u-align-center u-container-style u-expanded-width u-group u-palette-5-dark-2 u-group-13">
                  <div class="u-container-layout u-container-layout-20">
                    <h3 class="u-custom-font u-font-raleway u-text u-text-20"> PS4 Controller Charger Charging Cable&nbsp;</h3>
                  </div>
                </div>
                <img alt="" class="u-expanded-width u-image u-image-contain u-image-default u-image-7" src="./assets/61w32dg-ehL._SL1184_.jpg" data-image-width="1084" data-image-height="1184">
                <div class="u-container-style u-expanded-width u-group u-group-14">
                  <div class="u-container-layout u-container-layout-21">
                    <p class="u-align-center u-text u-text-21">Starting at <b>$6</b>
                    </p>
                    <ul class="u-align-left u-custom-list u-text u-text-22">
                      <li>
                        <div class="class u-list-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512.019 512.019" x="0px" y="0px" id="svg-b379"><path fill="currentColor" d="M362.676,0H149.343C119.888,0,96.01,23.878,96.01,53.333v448 c-0.011,5.891,4.757,10.675,10.648,10.686c2.84,0.005,5.565-1.123,7.571-3.134L256.01,367.083l141.781,141.781 c4.16,4.171,10.914,4.179,15.085,0.019c2.006-2.001,3.133-4.717,3.134-7.55v-448C416.01,23.878,392.131,0,362.676,0z"></path></svg>
                        </div>10FT Micro USB Charger Cable&nbsp;
                      </li>
                      <li>
                        <div class="class u-list-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512.019 512.019" x="0px" y="0px" id="svg-b379"><path fill="currentColor" d="M362.676,0H149.343C119.888,0,96.01,23.878,96.01,53.333v448 c-0.011,5.891,4.757,10.675,10.648,10.686c2.84,0.005,5.565-1.123,7.571-3.134L256.01,367.083l141.781,141.781 c4.16,4.171,10.914,4.179,15.085,0.019c2.006-2.001,3.133-4.717,3.134-7.55v-448C416.01,23.878,392.131,0,362.676,0z"></path></svg>
                        </div>
                      </li>
                      <li> Charge &amp; Play</li>
                      <li>
                        <div class="class u-list-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512.019 512.019" x="0px" y="0px" id="svg-b379"><path fill="currentColor" d="M362.676,0H149.343C119.888,0,96.01,23.878,96.01,53.333v448 c-0.011,5.891,4.757,10.675,10.648,10.686c2.84,0.005,5.565-1.123,7.571-3.134L256.01,367.083l141.781,141.781 c4.16,4.171,10.914,4.179,15.085,0.019c2.006-2.001,3.133-4.717,3.134-7.55v-448C416.01,23.878,392.131,0,362.676,0z"></path></svg>
                        </div> Universal Compatibility
                      </li>
                      <li>
                        <div class="class u-list-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512.019 512.019" x="0px" y="0px" id="svg-b379"><path fill="currentColor" d="M362.676,0H149.343C119.888,0,96.01,23.878,96.01,53.333v448 c-0.011,5.891,4.757,10.675,10.648,10.686c2.84,0.005,5.565-1.123,7.571-3.134L256.01,367.083l141.781,141.781 c4.16,4.171,10.914,4.179,15.085,0.019c2.006-2.001,3.133-4.717,3.134-7.55v-448C416.01,23.878,392.131,0,362.676,0z"></path></svg>
                        </div>
                      </li>
                      <li>High Speed Data Sync Cord Compatible<br>
                      </li>
                    </ul>
                    <form method='Post'action='#'>
                    <input type='submit' name='ps4cable' value='Buy Now' class="u-border-none u-btn u-btn-rectangle u-button-style u-custom-color-1 u-btn-1"></input>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item u-video-cover u-white u-list-item-8">
              <div class="u-container-layout u-similar-container u-container-layout-22">
                <div class="u-align-center u-container-style u-expanded-width u-group u-palette-4-base u-video-cover u-group-15">
                  <div class="u-container-layout u-container-layout-23">
                    <h3 class="u-custom-font u-font-raleway u-text u-text-23"> 4-Port USB 3.0 Hub High Speed USB Cable Adapter Expansion</h3>
                  </div>
                </div>
                <img alt="" class="u-expanded-width u-image u-image-contain u-image-default u-image-8" src="./assets/61Pbbd7TGxL._SL1000_.jpg" data-image-width="1000" data-image-height="1000">
                <div class="u-container-style u-expanded-width u-group u-video-cover u-group-16">
                  <div class="u-container-layout u-container-layout-24">
                    <p class="u-align-center u-text u-text-24">Starting at <b>$15</b>
                    </p>
                    <ul class="u-align-left u-custom-list u-text u-text-25">
                      <li>
                        <div class="class u-list-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512.019 512.019" x="0px" y="0px" id="svg-0d13"><path fill="currentColor" d="M362.676,0H149.343C119.888,0,96.01,23.878,96.01,53.333v448 c-0.011,5.891,4.757,10.675,10.648,10.686c2.84,0.005,5.565-1.123,7.571-3.134L256.01,367.083l141.781,141.781 c4.16,4.171,10.914,4.179,15.085,0.019c2.006-2.001,3.133-4.717,3.134-7.55v-448C416.01,23.878,392.131,0,362.676,0z"></path></svg>
                        </div> Extensive Compatibility
                      </li>
                      <li>
                        <div class="class u-list-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512.019 512.019" x="0px" y="0px" id="svg-0d13"><path fill="currentColor" d="M362.676,0H149.343C119.888,0,96.01,23.878,96.01,53.333v448 c-0.011,5.891,4.757,10.675,10.648,10.686c2.84,0.005,5.565-1.123,7.571-3.134L256.01,367.083l141.781,141.781 c4.16,4.171,10.914,4.179,15.085,0.019c2.006-2.001,3.133-4.717,3.134-7.55v-448C416.01,23.878,392.131,0,362.676,0z"></path></svg>
                        </div> UP to 4 Ports
                      </li>
                      <li>
                        <div class="class u-list-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512.019 512.019" x="0px" y="0px" id="svg-0d13"><path fill="currentColor" d="M362.676,0H149.343C119.888,0,96.01,23.878,96.01,53.333v448 c-0.011,5.891,4.757,10.675,10.648,10.686c2.84,0.005,5.565-1.123,7.571-3.134L256.01,367.083l141.781,141.781 c4.16,4.171,10.914,4.179,15.085,0.019c2.006-2.001,3.133-4.717,3.134-7.55v-448C416.01,23.878,392.131,0,362.676,0z"></path></svg>
                        </div> Faster Data Transfer
                      </li>
                      <li>
                        <div class="class u-list-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512.019 512.019" x="0px" y="0px" id="svg-0d13"><path fill="currentColor" d="M362.676,0H149.343C119.888,0,96.01,23.878,96.01,53.333v448 c-0.011,5.891,4.757,10.675,10.648,10.686c2.84,0.005,5.565-1.123,7.571-3.134L256.01,367.083l141.781,141.781 c4.16,4.171,10.914,4.179,15.085,0.019c2.006-2.001,3.133-4.717,3.134-7.55v-448C416.01,23.878,392.131,0,362.676,0z"></path></svg>
                        </div> use more peripheral equipment
                      </li>
                      <li>
                        <div class="class u-list-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512.019 512.019" x="0px" y="0px" id="svg-0d13"><path fill="currentColor" d="M362.676,0H149.343C119.888,0,96.01,23.878,96.01,53.333v448 c-0.011,5.891,4.757,10.675,10.648,10.686c2.84,0.005,5.565-1.123,7.571-3.134L256.01,367.083l141.781,141.781 c4.16,4.171,10.914,4.179,15.085,0.019c2.006-2.001,3.133-4.717,3.134-7.55v-448C416.01,23.878,392.131,0,362.676,0z"></path></svg>
                        </div>Fashionable and portable design<br>
                      </li>
                    </ul>
                    <form method='Post'action='#'>
                    <input type='submit' name='port' value='Buy Now' class="u-border-none u-btn u-btn-rectangle u-button-style u-custom-color-1 u-btn-1"></input>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item u-video-cover u-white u-list-item-9">
              <div class="u-container-layout u-similar-container u-container-layout-25">
                <div class="u-align-center u-container-style u-expanded-width u-group u-palette-5-dark-2 u-video-cover u-group-17">
                  <div class="u-container-layout u-container-layout-26">
                    <h3 class="u-custom-font u-font-raleway u-text u-text-26">GOD OF ESYWEN Rechargeable Battery Packs for Xbox</h3>
                  </div>
                </div>
                <img alt="" class="u-expanded-width u-image u-image-contain u-image-default u-image-9" src="./assets/71uXw8IcFaL._AC_SL1500_.jpg" data-image-width="1498" data-image-height="1494">
                <div class="u-container-style u-expanded-width u-group u-video-cover u-group-18">
                  <div class="u-container-layout u-container-layout-27">
                    <p class="u-align-center u-text u-text-27">Starting at <b>$25</b>
                    </p>
                    <ul class="u-align-left u-custom-list u-text u-text-28">
                      <li>
                        <div class="class u-list-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512.019 512.019" x="0px" y="0px" id="svg-6c62"><path fill="currentColor" d="M362.676,0H149.343C119.888,0,96.01,23.878,96.01,53.333v448 c-0.011,5.891,4.757,10.675,10.648,10.686c2.84,0.005,5.565-1.123,7.571-3.134L256.01,367.083l141.781,141.781 c4.16,4.171,10.914,4.179,15.085,0.019c2.006-2.001,3.133-4.717,3.134-7.55v-448C416.01,23.878,392.131,0,362.676,0z"></path></svg>
                        </div> Long Battery Life
                      </li>
                      <li>
                        <div class="class u-list-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512.019 512.019" x="0px" y="0px" id="svg-6c62"><path fill="currentColor" d="M362.676,0H149.343C119.888,0,96.01,23.878,96.01,53.333v448 c-0.011,5.891,4.757,10.675,10.648,10.686c2.84,0.005,5.565-1.123,7.571-3.134L256.01,367.083l141.781,141.781 c4.16,4.171,10.914,4.179,15.085,0.019c2.006-2.001,3.133-4.717,3.134-7.55v-448C416.01,23.878,392.131,0,362.676,0z"></path></svg>
                        </div> LED Indicator Charger Station
                      </li>
                      <li>
                        <div class="class u-list-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512.019 512.019" x="0px" y="0px" id="svg-6c62"><path fill="currentColor" d="M362.676,0H149.343C119.888,0,96.01,23.878,96.01,53.333v448 c-0.011,5.891,4.757,10.675,10.648,10.686c2.84,0.005,5.565-1.123,7.571-3.134L256.01,367.083l141.781,141.781 c4.16,4.171,10.914,4.179,15.085,0.019c2.006-2.001,3.133-4.717,3.134-7.55v-448C416.01,23.878,392.131,0,362.676,0z"></path></svg>
                        </div> Charging Protection
                      </li>
                      <li>
                        <div class="class u-list-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512.019 512.019" x="0px" y="0px" id="svg-6c62"><path fill="currentColor" d="M362.676,0H149.343C119.888,0,96.01,23.878,96.01,53.333v448 c-0.011,5.891,4.757,10.675,10.648,10.686c2.84,0.005,5.565-1.123,7.571-3.134L256.01,367.083l141.781,141.781 c4.16,4.171,10.914,4.179,15.085,0.019c2.006-2.001,3.133-4.717,3.134-7.55v-448C416.01,23.878,392.131,0,362.676,0z"></path></svg>
                        </div>Unique Style<br>
                      </li>
                      <li>
                        <div class="class u-list-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512.019 512.019" x="0px" y="0px" id="svg-6c62"><path fill="currentColor" d="M362.676,0H149.343C119.888,0,96.01,23.878,96.01,53.333v448 c-0.011,5.891,4.757,10.675,10.648,10.686c2.84,0.005,5.565-1.123,7.571-3.134L256.01,367.083l141.781,141.781 c4.16,4.171,10.914,4.179,15.085,0.019c2.006-2.001,3.133-4.717,3.134-7.55v-448C416.01,23.878,392.131,0,362.676,0z"></path></svg>
                        </div>Rechargeable<br>
                      </li>
                    </ul>
                    <form method='Post'action='#'>
                    <input type='submit' name='GodEs' value='Buy Now' class="u-border-none u-btn u-btn-rectangle u-button-style u-custom-color-1 u-btn-1"></input>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="u-list u-list-4">
          <div class="u-repeater u-repeater-4">
            <div class="u-container-style u-list-item u-repeater-item u-white u-list-item-10">
              <div class="u-container-layout u-similar-container u-container-layout-28">
                <div class="u-align-center u-container-style u-expanded-width u-group u-palette-5-dark-2 u-group-19">
                  <div class="u-container-layout u-container-layout-29">
                    <h3 class="u-custom-font u-font-raleway u-text u-text-29"> Xbox Elite Series 2 Controller – Black</h3>
                  </div>
                </div>
                <img alt="" class="u-expanded-width u-image u-image-contain u-image-default u-image-10" src="./assets/71I2mUnn0AL._SL1500_.jpg" data-image-width="1500" data-image-height="1500">
                <div class="u-container-style u-expanded-width u-group u-group-20">
                  <div class="u-container-layout u-valign-top u-container-layout-30">
                    <p class="u-align-center u-text u-text-30">Starting at <b>$50</b>
                    </p>
                    <ul class="u-align-left u-custom-list u-text u-text-31">
                      <li>
                        <div class="class u-list-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512.019 512.019" x="0px" y="0px" id="svg-b379"><path fill="currentColor" d="M362.676,0H149.343C119.888,0,96.01,23.878,96.01,53.333v448 c-0.011,5.891,4.757,10.675,10.648,10.686c2.84,0.005,5.565-1.123,7.571-3.134L256.01,367.083l141.781,141.781 c4.16,4.171,10.914,4.179,15.085,0.019c2.006-2.001,3.133-4.717,3.134-7.55v-448C416.01,23.878,392.131,0,362.676,0z"></path></svg>
                        </div>
                      </li>
                      <li>Compatible with Xbox Series X|S, Xbox One, and Windows 10/11 devices.</li>
                      <li>
                        <div class="class u-list-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512.019 512.019" x="0px" y="0px" id="svg-b379"><path fill="currentColor" d="M362.676,0H149.343C119.888,0,96.01,23.878,96.01,53.333v448 c-0.011,5.891,4.757,10.675,10.648,10.686c2.84,0.005,5.565-1.123,7.571-3.134L256.01,367.083l141.781,141.781 c4.16,4.171,10.914,4.179,15.085,0.019c2.006-2.001,3.133-4.717,3.134-7.55v-448C416.01,23.878,392.131,0,362.676,0z"></path></svg>
                        </div>Play like a pro<br>
                      </li>
                    </ul>
                    <form method='Post'action='#'>
                    <input type='submit' name='xboxelite' value='Buy Now' class="u-border-none u-btn u-btn-rectangle u-button-style u-custom-color-1 u-btn-1"></input>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item u-video-cover u-white u-list-item-11">
              <div class="u-container-layout u-similar-container u-container-layout-31">
                <div class="u-align-center u-container-style u-expanded-width u-group u-palette-4-base u-video-cover u-group-21">
                  <div class="u-container-layout u-container-layout-32">
                    <h3 class="u-custom-font u-font-raleway u-text u-text-32"> PlayStation DualSense Wireless Controller – Midnight Black</h3>
                  </div>
                </div>
                <img alt="" class="u-expanded-width u-image u-image-contain u-image-default u-image-11" src="./assets/61O9tWR6WDS._SL1475_.jpg" data-image-width="1475" data-image-height="1048">
                <div class="u-container-style u-expanded-width u-group u-video-cover u-group-22">
                  <div class="u-container-layout u-valign-top u-container-layout-33">
                    <p class="u-align-center u-text u-text-default u-text-33">Starting at <b>$55</b>
                    </p>
                    <ul class="u-align-left u-custom-list u-text u-text-34">
                      <li>
                        <div class="class u-list-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512.019 512.019" x="0px" y="0px" id="svg-0d13"><path fill="currentColor" d="M362.676,0H149.343C119.888,0,96.01,23.878,96.01,53.333v448 c-0.011,5.891,4.757,10.675,10.648,10.686c2.84,0.005,5.565-1.123,7.571-3.134L256.01,367.083l141.781,141.781 c4.16,4.171,10.914,4.179,15.085,0.019c2.006-2.001,3.133-4.717,3.134-7.55v-448C416.01,23.878,392.131,0,362.676,0z"></path></svg>
                        </div>Haptic feedback
                      </li>
                      <li>
                        <div class="class u-list-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512.019 512.019" x="0px" y="0px" id="svg-0d13"><path fill="currentColor" d="M362.676,0H149.343C119.888,0,96.01,23.878,96.01,53.333v448 c-0.011,5.891,4.757,10.675,10.648,10.686c2.84,0.005,5.565-1.123,7.571-3.134L256.01,367.083l141.781,141.781 c4.16,4.171,10.914,4.179,15.085,0.019c2.006-2.001,3.133-4.717,3.134-7.55v-448C416.01,23.878,392.131,0,362.676,0z"></path></svg>
                        </div> Adaptive triggers
                      </li>
                      <li>
                        <div class="class u-list-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512.019 512.019" x="0px" y="0px" id="svg-0d13"><path fill="currentColor" d="M362.676,0H149.343C119.888,0,96.01,23.878,96.01,53.333v448 c-0.011,5.891,4.757,10.675,10.648,10.686c2.84,0.005,5.565-1.123,7.571-3.134L256.01,367.083l141.781,141.781 c4.16,4.171,10.914,4.179,15.085,0.019c2.006-2.001,3.133-4.717,3.134-7.55v-448C416.01,23.878,392.131,0,362.676,0z"></path></svg>
                        </div> Built-in microphone and headset jack
                      </li>
                      <li>
                        <div class="class u-list-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512.019 512.019" x="0px" y="0px" id="svg-0d13"><path fill="currentColor" d="M362.676,0H149.343C119.888,0,96.01,23.878,96.01,53.333v448 c-0.011,5.891,4.757,10.675,10.648,10.686c2.84,0.005,5.565-1.123,7.571-3.134L256.01,367.083l141.781,141.781 c4.16,4.171,10.914,4.179,15.085,0.019c2.006-2.001,3.133-4.717,3.134-7.55v-448C416.01,23.878,392.131,0,362.676,0z"></path></svg>
                        </div>DualSense Controller&nbsp;<br>
                      </li>
                    </ul>
                    <form method='Post'action='#'>
                    <input type='submit' name='dualsense' value='Buy Now' class="u-border-none u-btn u-btn-rectangle u-button-style u-custom-color-1 u-btn-1"></input>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item u-video-cover u-white u-list-item-12">
              <div class="u-container-layout u-similar-container u-container-layout-34">
                <div class="u-align-center u-container-style u-expanded-width u-group u-palette-5-dark-2 u-video-cover u-group-23">
                  <div class="u-container-layout u-container-layout-35">
                    <h3 class="u-custom-font u-font-raleway u-text u-text-35">Orzly Carry Case Compatible with Nintendo SwitchGOD OF WAR</h3>
                  </div>
                </div>
                <img alt="" class="u-expanded-width u-image u-image-contain u-image-default u-image-12" src="./assets/71KbnwsiD-L._SL1500_.jpg" data-image-width="1500" data-image-height="1500">
                <div class="u-container-style u-expanded-width u-group u-video-cover u-group-24">
                  <div class="u-container-layout u-valign-top u-container-layout-36">
                    <p class="u-align-center u-text u-text-default u-text-36">Starting at <b>$10</b>
                    </p>
                    <ul class="u-align-left u-custom-list u-text u-text-37">
                      <li>
                        <div class="class u-list-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512.019 512.019" x="0px" y="0px" id="svg-6c62"><path fill="currentColor" d="M362.676,0H149.343C119.888,0,96.01,23.878,96.01,53.333v448 c-0.011,5.891,4.757,10.675,10.648,10.686c2.84,0.005,5.565-1.123,7.571-3.134L256.01,367.083l141.781,141.781 c4.16,4.171,10.914,4.179,15.085,0.019c2.006-2.001,3.133-4.717,3.134-7.55v-448C416.01,23.878,392.131,0,362.676,0z"></path></svg>
                        </div>
                      </li>
                      <li>Pockets for Accessories and Games</li>
                      <li>
                        <div class="class u-list-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512.019 512.019" x="0px" y="0px" id="svg-6c62"><path fill="currentColor" d="M362.676,0H149.343C119.888,0,96.01,23.878,96.01,53.333v448 c-0.011,5.891,4.757,10.675,10.648,10.686c2.84,0.005,5.565-1.123,7.571-3.134L256.01,367.083l141.781,141.781 c4.16,4.171,10.914,4.179,15.085,0.019c2.006-2.001,3.133-4.717,3.134-7.55v-448C416.01,23.878,392.131,0,362.676,0z"></path></svg>
                        </div>&nbsp;Portable Travel Carry Case.
                      </li>
                      <li>
                        <div class="class u-list-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512.019 512.019" x="0px" y="0px" id="svg-6c62"><path fill="currentColor" d="M362.676,0H149.343C119.888,0,96.01,23.878,96.01,53.333v448 c-0.011,5.891,4.757,10.675,10.648,10.686c2.84,0.005,5.565-1.123,7.571-3.134L256.01,367.083l141.781,141.781 c4.16,4.171,10.914,4.179,15.085,0.019c2.006-2.001,3.133-4.717,3.134-7.55v-448C416.01,23.878,392.131,0,362.676,0z"></path></svg>
                        </div>Dimensions - 5 x 5 x 0.7 inches
                      </li>
                      <li>
                        <div class="class u-list-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512.019 512.019" x="0px" y="0px" id="svg-6c62"><path fill="currentColor" d="M362.676,0H149.343C119.888,0,96.01,23.878,96.01,53.333v448 c-0.011,5.891,4.757,10.675,10.648,10.686c2.84,0.005,5.565-1.123,7.571-3.134L256.01,367.083l141.781,141.781 c4.16,4.171,10.914,4.179,15.085,0.019c2.006-2.001,3.133-4.717,3.134-7.55v-448C416.01,23.878,392.131,0,362.676,0z"></path></svg>
                        </div>Hard EVA Yellow shell<br>
                      </li>
                    </ul>
                    <form method='Post'action='#'>
                    <input type='submit' name='case' value='Buy Now' class="u-border-none u-btn u-btn-rectangle u-button-style u-custom-color-1 u-btn-1"></input>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-2" id="sec-f9d1">
      <div class="u-clearfix u-image u-sheet u-image-1" data-image-width="2250" data-image-height="1500"></div>
    </section>
     <!----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    
      <!---------------------------------------------Footer-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-927f"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Aaron Kwame Andoh<br>Web Tech Project<br>C2023
        </p>
      </div></footer>
  </body>
   <!----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
</html>