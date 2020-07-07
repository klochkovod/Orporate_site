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
  <title>"Пласт-Декор" - Услуги</title>
  <meta name="keywords" content="архитектурные элементы, лепной декор, лепнина, фасадные работы, монтаж, проектирование, малые архитектурные формы, МАФ">
  <meta name="description" content="Производство архитектурных элементов, разработка дизайн проектов, монтаж декора и фасадные работы, изготовление объемных моделей и макетов.">
    <link rel="stylesheet" href="css/services.min.css">
    <link rel="stylesheet" href="fonts/stylesheet.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
</head>
<body>

  //= template/modal-search.php
  //= template/modal.php
  //= template/header.php

  <section class="services">
    <div class="container">
      <h2>Услуги</h2>
      <div class="row">
        <div class="col-12 col-md-6 col-lg-4">
          <div>
            <div class="service-text">
              <p>Изготовление фасадного декора и форм для отливок из стеклопластика</p>
            </div>
            <div class="service-img" style="background: url('../img/services/service_bg_1.jpg') center;
            background-size: cover;"></div>
            <div class="service-button">
              <a href="\service-fiberglass.php">Узнать подробнее &nbsp; <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
          <div>
            <div class="service-text">
              <p>Производство элементов из стеклофибробетона</p>
            </div>
            <div class="service-img" style="background: url('../img/services/service_bg_2.jpg') center;
            background-size: cover;"></div>
            <div class="service-button">
              <a href="\service-fiberglass-concrete.php">Узнать подробнее &nbsp; <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
          <div>
            <div class="service-text">
              <p>Изготовление фасадного декора из пенопласта</p>
            </div>
            <div class="service-img" style="background: url('../img/services/service_bg_3.jpg') center;
            background-size: cover;"></div>
            <div class="service-button">
              <a href="\service-styrofoam.php">Узнать подробнее &nbsp; <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
          <div>
            <div class="service-text">
              <p>Производство фасадного декора из минеральной ваты</p>
            </div>
            <div class="service-img" style="background: url('../img/services/service_bg_4.jpg') center;
            background-size: cover;"></div>
            <div class="service-button">
              <a href="\service-mineral-woo.php">Узнать подробнее &nbsp; <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
          <div>
            <div class="service-text">
              <p>Разработка дизайн проекта фасада</p>
            </div>
            <div class="service-img" style="background: url('../img/services/service_bg_5.jpg') center;
            background-size: cover;"></div>
            <div class="service-button">
              <a href="\service-project.php">Узнать подробнее &nbsp; <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
          <div>
            <div class="service-text">
              <p>Монтаж декора и фасадные работы</p>
            </div>
            <div class="service-img" style="background: url('../img/services/service_bg_6.jpg') center;
            background-size: cover;"></div>
            <div class="service-button">
              <a href="\service-installation.php">Узнать подробнее &nbsp; <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
          <div>
            <div class="service-text">
              <p>Производство лодок из стеклопластика PLAST-WATER</p>
            </div>
            <div class="service-img" style="background: url('../img/services/service_bg_7.jpg') center;
            background-size: cover;"></div>
            <div class="service-button">
              <a href="\service-boats.php">Узнать подробнее &nbsp; <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
          <div>
            <div class="service-text">
              <p>Продажа защитных покрытий  "Пласт-Декор"</p>
            </div>
            <div class="service-img"  style="background: url('../img/services/service_bg_8.jpg') center;
            background-size: cover;"></div>
            <div class="service-button">
              <a href="\service-coverings.php">Узнать подробнее &nbsp; <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  //= template/footer.php
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script  src="js/bootstrap.min.js"></script>
  <script  src="js/services.js"></script>
</body>
</html>
