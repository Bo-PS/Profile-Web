<?php include_once "Config.php" ?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> <!-- stats.js lib -->
  <!-- SETTINGS -->
  <link rel="shortcut icon" href="<?php echo $WebLogo; ?>" type="image/webp">
  <title><?php echo $WebName; ?></title>

</head>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Alexandria:wght@100;200;300;400;500;600;700;800;900&display=swap');

  ::-webkit-scrollbar {
    display: none;
  }

  body {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100vh;
    text-align: center;
    font-family: 'Alexandria', sans-serif;
    background-image: url(/Img/bg.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    overflow: hidden;
  }

  body .Error {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  body .Error h1 {
    font-weight: bold;
    color: #1a4e97;
  }

  body .Error span {
    color: rgb(26 78 151);
    font-weight: bold;
    font-size: 12vh;
  }
  
  .particles-js {
    position: absolute;
    left: 0px;
    top: 0px;
    transform: translate(0px, 0px);
    z-index: -1;
    opacity: 0.2;
    width: 100% !important;
    height: 99% !important;
  }

</style>

<body>
  <div class="particles-js" id="particles-js"></div>

  <div class="Error">
    <h1><span>404</span><br style="color: red">This page could not be found.</h1>
  </div>
</body>

<script src="./Js/app.js"></script>

</html>