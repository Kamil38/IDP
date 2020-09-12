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
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="" sizes="192x192">
</head>
<body>

      <div class="videoamk">
        <video autoplay muted loop id="myvideo">
          <source src="typen.mp4" type="video/mp4">
        </video>
      </div>

    <nav class="navbar center">
        <a href="#section-1" class="navbar-link">Home</a>
        <a href="#section-2" class="navbar-link">bla</a>
        <a href="#section-3" class="navbar-link">bla</a>
        <a href="#section-4" class="navbar-link">bla</a>
    </nav>

    <div class="container">

      <section class="section-1 center" id="section-1">
        <h2>hallo</h2>
      </section>

      <section class="section-2" id="section-2">
        <h2>hallo</h2>
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