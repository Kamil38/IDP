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
          <a id="k1" href="index.php?lang=nl" class="taalkleur keus-uit-2__label keus-uit-2--actief">NL</a>
            <input id="keuzeCB" class="keus-uit-2__cb" type="checkbox">
          <a id="k2" href="index.php?lang=en" class="taalkleur keus-uit-2__label">EN</a>
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
          <a href="https://vimeo.com/461288534" target="_blank"><i class="fas fa-play-circle pad"></i></a>
          <a href="https://vimeo.com/461288534" target="_blank"><h3 class="pad"><?php echo translate('video-afspelen') ?></h3></a>
        </div>
        <a href="#section-2"><i class="fas fa-angle-down arrowdown"></i></a>
      </section>

      <section class="section-2" id="section-2">
        <div id="contact">
          <h2><?php echo translate('over-ons') ?></h2>
          <div class="button_cont" align="center"><a class="example_b section2knop" href="#section-4" ><?php echo translate('contact-ons') ?></a></div>
        </div>
        <div class="overHuyat">
          <div class="num">
            <em class="number">01</em>
            <div class="numColor"></div>
          </div>
    
        <img src="images/foto1.jpg" alt="fgf" class="section2img">
        <p><?php echo translate('bewust-betrok') ?><br>
            <?php echo translate('bewust-betrok-1') ?><br>
            <?php echo translate('bewust-betrok-2') ?><br>
            <?php echo translate('bewust-betrok-3') ?><br>
            <?php echo translate('bewust-betrok-4') ?><br>
            <?php echo translate('bewust-betrok-5') ?><br>  
        </p>

        </div>
        <div class="overHuyat2">
          <div class="num">
            <em class="number">02</em>
            <div class="numColor"></div>
          </div>
          <img src="images/foto2.jpg" alt="fgf" class="section2img">
          <p>
          <?php echo translate('prospectie-verkoop') ?><br>
            <?php echo translate('prospectie-verkoop-1') ?><br>
            <?php echo translate('prospectie-verkoop-2') ?><br>
            <?php echo translate('prospectie-verkoop-3') ?><br>
            <?php echo translate('prospectie-verkoop-4') ?><br>
            <?php echo translate('prospectie-verkoop-5') ?><br>  
          </p>
        </div> 
        <div class="overHuyat3">
          <p>          
            <?php echo translate('creatieve-content-studio') ?><br>
            <?php echo translate('creatieve-content-studio-1') ?><br>
            <?php echo translate('creatieve-content-studio-2') ?><br>
            <?php echo translate('creatieve-content-studio-3') ?><br>
            <?php echo translate('creatieve-content-studio-4') ?><br>
            <?php echo translate('creatieve-content-studio-5') ?><br>   </p>
          <div class="num">
            <em class="number">03</em>
            <div class="numColor"></div>
          </div>
          <img src="images/foto3.jpg" alt="fgf" class="section2img">
          
        </div> 

      </section>

      <section class="section-3" id="section-3">
      <div id="onsWerk__titel">
        <h2><?php echo translate('ons-werk') ?></h2>
      </div>
      <div class="onsWerk">
          <div>
              <p><?php echo translate('ons-werk-tekst') ?> </p>
                <div class="button_cont"><a class="example_b section3knop" href="#section-4" ><?php echo translate('bekijk-cases') ?></a></div>
          </div>
        <div>
          <div id="slide">
              <span class="slide" onclick="currentSlide(1)"></span> 
              <span class="slide" onclick="currentSlide(2)"></span> 
              <span class="slide" onclick="currentSlide(3)"></span> 
              <span class="slide" onclick="currentSlide(4)"></span> 
            </div>
        </div>
      <div class="fotos">
        <div class="small">

          <div class="mySlides fade">
            <img src="images/kamil.png" style="width:100%">
          </div>
        
      </div>
        <div class="big">
          <img src="images/kamil.png" style="width:100%">
          <p><p><?php echo translate('kamil-text') ?></p></p>
        </div>

        <div class="small">

          <div class="mySlides fade">
            <img src="images/duneya.png" style="width:100%">
          </div>
        
      </div>
        <div class="big">
          <img src="images/duneya.png" style="width:100%">
          <p><p><?php echo translate('duneya-text') ?></p></p>
        </div>
        <div class="small">

          <div class="mySlides fade">
            <img src="images/max.jpg" style="width:100%">
          </div>
        
      </div>
        <div class="big">
          <img src="images/max.jpg" style="width:100%">
          <p><p><?php echo translate('max-text') ?></p></p>
        </div>
        <div class="small">

          <div class="mySlides fade">
            <img src="images/case.jpg" style="width:100%">
          </div>
        
      </div>
        <div class="big">
          <img src="images/case.jpg" style="width:100%">
          <p><p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
            sed diam nonumy eirmod tempor invidunt ut labore et dolore 
            magna aliquyam erat, sed diam </p></p>
        </div>

      </div>
      </section>

      <section class="section-4" id="section-4">
          <h2 class="contacttext"><?php echo translate('neem-contact') ?> (☕/🍻)</h3>
          <?php
          $action=$_REQUEST['action'];
          if ($action=="")    
              {
          ?>
                <form action="" method="POST">
                  <div class="contactform">
                    <div class="form__group naam">
                      <input type="text" class="form__input" id="name" placeholder="<?php echo translate('placeholder-naam') ?>" required/>
                      <label for="name" class="form__label"><?php echo translate('naam') ?></label>
                    </div>
                    <div class="form__group email">
                      <input type="text" class="form__input" id="email" placeholder="<?php echo translate('placeholder-email') ?>" required/>
                      <label for="email" class="form__label"><?php echo translate('email') ?></label>
                    </div>
                    <div class="form__group onderwerp">
                      <input type="text" class="form__input" id="onderwerp" placeholder="<?php echo translate('placeholder-onderwerp') ?>" required/>
                      <label for="onderwerp" class="form__label"><?php echo translate('onderwerp') ?></label>
                    </div>
                    <div class="form__group tel">
                      <input type="number" class="form__input" id="nummer" placeholder="<?php echo translate('placeholder-telefoon') ?>" required/>
                      <label for="nummer" class="form__label"><?php echo translate('telefoon') ?></label>
                    </div>
                    <div class="form__group bericht">
                      <textarea class="form__input1" id="bericht" placeholder="<?php echo translate('placeholder-bericht') ?>" required></textarea>
                      <label for="bericht" class="form__label"><?php echo translate('bericht') ?></label>
                    </div>
                    <div class="submit">
                      <input type="submit" class="submitinput" placeholder="<?php echo translate('placeholder-verzenden') ?>" />
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
    <footer class="section-5 center">
        <div class="social-media">
          <a onClick="window.open('https://github.com/Kamil38/IDP/');" class="social-media-link">
            <i class="fab fa-github-square"></i>
          </a> 
          <a onClick="" class="social-media-link">
            <!-- window.open('https://www.youtube.com/channel/UCzQAU9KGtwioNyHTaa4bnVA/featured?view_as=subscriber'); -->
            <i class="fab fa-youtube"></i>
          </a> 
          <a onClick="" class="social-media-link">
            <!-- window.open('https://www.facebook.com/kamilHLW'); -->
            <i class="fab fa-facebook-square"></i>
          </a>
          <a onClick="window.open('https://www.instagram.com/huyatagency/');" class="social-media-link">
            <i class="fab fa-instagram-square"></i>
          </a>
          <a href="mailto: huyatagency@gmail.com" class="social-media-link">
            <i class="fas fa-envelope"></i>
          </a>
        </div>
        <p class="portfolioMA">
        <?php echo translate('rechten') ?> - &copy; HUYAT - <?php echo translate('design') ?>
        </p>
      </footer>
    


    <script src="javascript.js"></script>
</body>
</html>