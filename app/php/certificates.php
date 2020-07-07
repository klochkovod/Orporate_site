<?php
include "databases.php";
?>
<!DOCTYPE html>
<html lang="ru" >
<head>
  <meta charset="UTF-8">
  <script type="text/javascript">
      (function(){
        if (typeof(window.orientation) !== 'undefined')
        {
          function getDeviceWidth()
          {
            var deviceWidth = window.orientation == 0 ? window.screen.width : window.screen.height;
            if (navigator.userAgent.indexOf('Android') >= 0 && window.devicePixelRatio)
              deviceWidth = deviceWidth / window.devicePixelRatio;
            return deviceWidth;
          }
          var deviceWidth = getDeviceWidth();
          var minWidth = 550;
          if (deviceWidth < minWidth)
            document.write('<meta name="viewport" content="width=550">');
          else
            document.write('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
        }
      })();
  </script>
  <title>"Plast Decor" - Сертификаты</title>
    <link rel="stylesheet" href="css/certificates.min.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="fonts/stylesheet.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
</head>
<body>

  //= template/modal-search.php
  //= template/modal.php
  //= template/header.php

  <section class="all-certificates">
    <div class="container">
      <h2>Наши сертификаты</h2>
      <div class="row">
        <div class="col-lg-6">
          <a data-fancybox="certificates" href="\img\certificates\certificate_1.jpg">
            <img src="\img\certificates\certificate_1.jpg" alt="">
          </a>
        </div>
        <div class="col-lg-6">
          <a data-fancybox="certificates" href="\img\certificates\certificate_5.jpg">
            <img src="\img\certificates\certificate_5.jpg" alt="">
          </a>
        </div>
        <div class="col-lg-6">
          <a data-fancybox="certificates" href="\img\certificates\certificate_3.jpg">
            <img src="\img\certificates\certificate_3.jpg" alt="">
          </a>
        </div>
        <div class="col-lg-6">
          <a data-fancybox="certificates" href="\img\certificates\certificate_4.jpg">
            <img src="\img\certificates\certificate_4.jpg" alt="">
          </a>
        </div>
        <div class="col-lg-6">
          <a data-fancybox="certificates" href="\img\certificates\certificate_2.jpg">
            <img src="\img\certificates\certificate_2.jpg" alt="">
          </a>
        </div>
        <div class="col-lg-6">
          <a data-fancybox="certificates" href="\img\certificates\certificate_6.jpg">
            <img src="\img\certificates\certificate_6.jpg" alt="">
          </a>
        </div>
      </div>
    </div>
  </section>

  //= template/footer.php
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script  src="js/bootstrap.min.js"></script>
  <script  src="js/certificates.js"></script>
  <script src = "js/jquery.fancybox.min.js"></script>
</body>
</html>
