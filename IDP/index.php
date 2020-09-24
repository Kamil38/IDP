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
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/cdb831f7aa.js" crossorigin="anonymous"></script>
</head>
<body>

    <nav class="navbar rechts">
        <img src="images/Logo-Huyat-2.svg" alt="logo" class="logo">
        <a href="#section-1" class="navbar-link"><?php echo translate('home') ?></a>
        <a href="#section-2" class="navbar-link"><?php echo translate('over-ons') ?></a>
        <a href="#section-3" class="navbar-link"><?php echo translate('ons-werk') ?></a>
        <a href="#section-4" class="navbar-link"><?php echo translate('contact') ?></a>
        <span class="keus-uit-2">   
          <span id="k1" class="taalkleur keus-uit-2__label keus-uit-2--actief">NL</span>
            <input id="keuzeCB" class="keus-uit-2__cb" type="checkbox">
          <span id="k2" class="taalkleur keus-uit-2__label">EN</span>
        </span>
    </nav>

    <div class="container">
      <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>

      <section class="section-1 center" id="section-1">
        <div class="videoamk">
          <video autoplay muted loop id="myvideo">
            <source src="huyatkort.mp4" type="video/mp4">
          </video>
        </div>
        <div class="playbutton">
          <a href="https://vimeo.com/461288534"><i class="fas fa-play-circle pad"></i></a>
          <a href="https://vimeo.com/461288534"><h3 class="pad">Video Afspelen</h3></a>
        </div>
        <a href="#section-2"><i class="fas fa-angle-down arrowdown"></i></a>
      </section>

      <section class="section-2" id="section-2">
        <div id="contact">
          <h2>Experiencing a security incident?</h2>
          <div class="button_cont" align="center"><a class="example_b section2knop" href="#section-4" >Contact Ons</a></div>
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
        <div id="onsWerk">
          <h2>Ons Werk</h2>
        </div>
        <div class="onsWerk">
            <div>
                <p>Voor elk los onderdeel kan je bij<br>
                  ons terecht. Kies je er<br>
                  meerdere? Dan zorgen wij dat<br>
                  alle services naadloos op elkaar<br>
                  aansluiten. Zie hier een<br>
                  overzicht van recent werk 
                </p>
                <div class="button_cont" align="center"><a class="example_b section3knop" href="" >Bekijk Cases</a></div>
            </div>
          <div>
            <div id="slide">
              <span class="slide" onclick="currentSlide(1)"></span> 
              <span class="slide" onclick="currentSlide(2)"></span> 
              <span class="slide" onclick="currentSlide(3)"></span> 
              <span class="slide" onclick="currentSlide(4)"></span> 
            </div>
          </div>
        <div>
          <div class="mySlides fade">
            <img src="images/imag.jpg" style="width:100%">
          </div>
          <div class="mySlides fade">
            <img src="images/imag1.jpg" style="width:100%">
          </div>
          <div class="mySlides fade">
            <img src="images/imag.jpg" style="width:100%">
          </div>
          <div class="mySlides fade">
            <img src="images/imag1.jpg" style="width:100%">
          </div>
        
        </div>
      </section>

      <section class="section-4" id="section-4">
          <h2 class="contacttext">Neem contact met ons op (☕/🍻)</h3>
          <?php
          $action=$_REQUEST['action'];
          if ($action=="")    
              {
          ?>
                <form action="" method="POST">
                  <div class="contactform">
                    <div class="form__group naam">
                      <input type="text" class="form__input" id="name" placeholder="Naam*" required/>
                      <label for="name" class="form__label">Naam</label>
                    </div>
                    <div class="form__group email">
                      <input type="text" class="form__input" id="email" placeholder="Email*" required/>
                      <label for="email" class="form__label">Email</label>
                    </div>
                    <div class="form__group onderwerp">
                      <input type="text" class="form__input" id="onderwerp" placeholder="Onderwerp*" required/>
                      <label for="onderwerp" class="form__label">Onderwerp</label>
                    </div>
                    <div class="form__group tel">
                      <input type="number" class="form__input" id="nummer" placeholder="Telefoon Nummer*" required/>
                      <label for="nummer" class="form__label">Telefoon Nummer</label>
                    </div>
                    <div class="form__group bericht">
                      <textarea class="form__input1" id="bericht" placeholder="Bericht*" required></textarea>
                      <label for="bericht" class="form__label">Bericht</label>
                    </div>
                    <div class="submit">
                      <input type="submit" class="submitinput" placeholder="Verzenden" />
                    </div>
                  </div>
                </form>
          <?php
              } 
            else                /* send the submitted data */
                {
                $name=$_REQUEST['name'];
                $email=$_REQUEST['email'];
                $onderwerp=$_REQUEST['onderwerp'];
                $nummer=$_REQUEST['nummer'];
                $message=$_REQUEST['bericht'];
                if (($name=="")||($email=="")||($onderwerp=="")||($nummer=="")||($message==""))
                    {
                    echo "All fields are required, please fill <a href=\"\">the form</a> again.";
                    }
                else{        
                    $from="From: $name<$email>\r\nReturn-path: $email";
                    $subject="Message sent using your contact form";
                    mail("29575@ma-web.nl", $subject, $message, $from);
                    echo "Email verstuurd!";
                    }
                }  
            ?>
      </section>

    </div>
    


    <script src="javascript.js"></script>
</body>
</html>