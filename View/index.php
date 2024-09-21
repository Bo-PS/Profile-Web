<?php
include_once "Config.php";
?>

<!doctype html>
<html dir="rtl">

<head>
  <!--SETTINGS -->
  <link rel="shortcut icon" href="<?php echo $WebLogo; ?>" type="image/webp">
  <title><?php echo $WebName; ?></title>

  <!--OTHERS -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./Style/style.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> <!-- stats.js lib -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <!--META -->

  <meta content="Bo & Ad0m | Profiles" property="og:title" />
  <meta content="Hello! We Are Bo & Ad0m !. We Full Stack Developer , My Experiences : [ LUA , HTML , CSS , JS, PHP, C# ]." property="og:description" />
  <meta content="https://germanyteam.shop" property="og:url" />
  <meta content="yallow" data-react-helmet="true" name="theme-color" />

  <!--FONT AWESOME-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

  <main>
    <div class="continer">

      <div class="BestFriend" style="border-left: 1px rgb(255 255 255 / 40%) solid;">
        <h2>Best Friends</h2>
        <div class="Discord_Cart">
          <div class="Banner">
            <img src="../Img/GermanyBanner.gif" alt="">
          </div>
          <div class="Avatar">
            <img src="../Img/Bo.png" alt="">
          </div>
          <h5>Bo-PS</h5>
        </div>
      </div>

      <div class="card">
        <div class="ds-top" style="background: #28618b;"></div>
        <div class="avatar-holder">
          <img src="../img/Ad0m.png" alt="">
        </div>
        <div class="name">
          <a href="https://discord.gg/7xMnv6MQ4M">Ad0m-PS</a>
        </div>
        <div class="sochal">
          <i name="Ad0m-Youtube" class="fa-brands fa-youtube"></i>
          <i name="Ad0m-GitHub" class="fa-brands fa-github"></i>
          <i name="Ad0m-Discord" class="fa-brands fa-discord"></i>
        </div>
        <div class="InfoMe">
          <div class="continer">
            <h4>Clients</h4>
            <h5>+180</h5>
          </div>

          <div class="continer">
            <h4>Experience</h4>
            <h5>+4</h5>
          </div>

          <div class="continer">
            <h4>Projects</h4>
            <h5>+55</h5>
          </div>
        </div>
        <div class="Skills">
          <h4>Skills</h4>
          <img src="https://skillicons.dev/icons?i=lua,js,css,html" />
        </div>
      </div>

      <div class="card">
        <div class="ds-top" style="background: #00ffff;"></div>
        <div class="avatar-holder">
          <img src="../img/Bo.png" alt="">
        </div>
        <div class="name">
          <a href="https://discord.gg/7xMnv6MQ4M">Bo-PS</a>
        </div>
        <div class="sochal">
          <i name="Bo-Youtube" class="fa-brands fa-youtube"></i>
          <i name="Bo-GitHub"  class="fa-brands fa-github"></i>
          <i name="Bo-Discord" class="fa-brands fa-discord"></i>
        </div>
        <div class="InfoMe">
          <div class="continer">
            <h4>Clients</h4>
            <h5>+180</h5>
          </div>
          <div class="continer">
            <h4>Experience</h4>
            <h5>+4</h5>
          </div>
          <div class="continer">
            <h4>Projects</h4>
            <h5>+65</h5>
          </div>
        </div>
        <div class="Skills">
          <h4>Skills</h4>
          <img src="https://skillicons.dev/icons?i=php,lua,js,css,html,c#" />
        </div>
        
      </div>

      <div class="BestFriend" style="border-right: 1px rgb(255 255 255 / 40%) solid;">
        <h2>Best Friends</h2>
        <div class="Discord_Cart">
          <div class="Banner">
            <img src="../Img/GermanyBanner.gif" alt="">
          </div>
          <div class="Avatar" style="width: 57px; height: 57px;">
            <img src="../Img/Ad0m.png" alt="">
          </div>
          <h5>Ad0m-PS</h5>
        </div>
      </div>

    </div>
  </main>

  <footer>
    <div class="continer">
      <aside>
        <img src="<?php echo $WebLogo; ?>">
        <p style="font-weight: bold;"><?php echo $WebName; ?><br><a href="https://discord.gg/G1T" target="_blank">This Website Made By Bo_4#0</a></p>
        <p>Copyright © 2024 - 2025 | All right reserved</p>
      </aside>
    </div>
  </footer>

  <div class="loading">
    <div class="load"></div>
  </div>

  <div class="particles-js" id="particles-js"></div>

  <script src="./Js/app.js"></script>

</body>

</html>