<?php 
  include 'includes/functions.php';
  session_start();
  if(!isset( $_SESSION['lang'] )) {
    $_SESSION['lang'] = 'nl';
  }
  if(isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H U Y A T</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="images/Logo-H-2.svg" sizes="192x192">
    <script src="https://kit.fontawesome.com/cdb831f7aa.js" crossorigin="anonymous"></script>
</head>
<body>

    <nav class="navbar rechts">
        <img src="images/Logo-Huyat-2.svg" alt="logo" class="logo">
        <a href="#section-1" class="navbar-link">Home</a>
        <a href="#section-2" class="navbar-link">Over Ons</a>
        <a href="#section-3" class="navbar-link">Ons Werk</a>
        <a href="#section-4" class="navbar-link">Contact</a>
        <span class="taaltekstNl nl">NL</span>
          <input type="checkbox" class="switch">
        <span class="taaltekstEn en">EN</span>
    </nav>

    <div class="container">

      <section class="section-1 center" id="section-1">
        <div class="videoamk">
          <video autoplay muted loop id="myvideo">
            <source src="typen.mp4" type="video/mp4">
          </video>
        </div>
        <div id="homep">
          <b>
            <h2 class="huyat">HUYAT</h2>
          </b>

          <div class="social-menu">
            <ul>
              <li><a href="#" onclick="myFunction2()"><i class="fa fa-youtube"></i></a></li>
            </ul>
          </div>
        </div>
      </section>

      <section class="section-2" id="section-2">
        <div id="contact">
          <h2>Experiencing a security incident?</h2>
          <button class="contactKnop">Contact Us Now!</button>
        </div>
        <div class="overHuyat">
          <div class="num">
          <em class="number">01</em>
          <div class="numColor"></div>
       </div>
    
        <img src="images/imag.jpg" alt="fgf" class="section2img">
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
           sed diam nonumy eirmod tempor invidunt ut labore et dolore 
           magna aliquyam erat, sed diam 
        </p>
        </div>
        <div class="overHuyat2">
          <div class="num">
            <em class="number">02</em>
            <div class="numColor"></div>
          </div>
          <img src="images/imag.jpg" alt="fgf" class="section2img">
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                sed diam nonumy eirmod tempor invidunt ut labore et dolore 
                magna aliquyam erat, sed diam </p>
        </div> 
        <div class="overHuyat3">
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
              sed diam nonumy eirmod tempor invidunt ut labore et dolore 
              magna aliquyam erat, sed diam </p>
          <div class="num">
            <em class="number">03</em>
            <div class="numColor"></div>
          </div>
          <img src="images/imag.jpg" alt="fgf" class="section2img">
          
        </div> 

      </section>

      <section class="section-3" id="section-3">
        <h2>hallo</h2>
      </section>

      <section class="section-4" id="section-4">
        <h2>hallo</h2>
      </section>

    </div>
    


    <script src="javascript.js"></script>
</body>
</html>