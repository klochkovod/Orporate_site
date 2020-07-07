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
  <title>"Пласт-Декор" - Галерея работ</title>
  <meta name="keywords" content="Фасадный декор, декор фасада, проектирование, ландшафтный дизайн, монтаж декор, фасадные работы, реконструкция, реставрация, архитектурный декор">
  <meta name="description" content="Выполненные архитектурные проекты компании &quot;Пласт Декор&quot;. Основным видом деятельности компании является решение задач по проектированию, производству, монтажу архитектурного декора.">
    <link rel="stylesheet" href="css/gallery.min.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="fonts/stylesheet.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
</head>
<body>

  //= template/modal-search.php
  //= template/modal.php
  //= template/header.php
  <section class="all-gallery">
    <div class="container">
      <h2>Галерея работ</h2>
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <a href="gallery-facades.php" class="photo-category">
            <div style="background: url('../img/gallery/gallery_1.jpg') center;
            background-size: cover;" class="bg-img-category"></div>
            <div class="text-photo-category">
              <p>Фасады</p>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-lg-4">
          <a href="/gallery-maf.php" class="photo-category">
            <div style="background: url('../img/gallery/gallery_2.jpg') center;
            background-size: cover;" class="bg-img-category"></div>
            <div class="text-photo-category">
              <p>Малые архитектурные формы</p>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-lg-4">
          <a href="/gallery-design.php" class="photo-category">
            <div style="background: url('../img/gallery/gallery_3.jpg') center;
            background-size: cover;" class="bg-img-category"></div>
            <div class="text-photo-category">
              <p>Проектирование</p>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-lg-4">
          <a href="/gallery-reconstruction.php" class="photo-category">
            <div style="background: url('../img/gallery/gallery_4.jpg') center;
            background-size: cover;" class="bg-img-category"></div>
            <div class="text-photo-category">
              <p>Реконструкция</p>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-lg-4">
          <a href="/gallery-landscape-design.php" class="photo-category">
            <div style="background: url('../img/gallery/gallery_5.jpg') center;
            background-size: cover;" class="bg-img-category"></div>
            <div class="text-photo-category">
              <p>Ландшафтный дизайн</p>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-lg-4">
          <a href="/gallery-layouts.php" class="photo-category">
            <div style="background: url('../img/gallery/gallery_6.jpg') center;
            background-size: cover;" class="bg-img-category"></div>
            <div class="text-photo-category">
              <p>3D макеты</p>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-lg-4">
          <a href="/gallery-installation.php" class="photo-category">
            <div style="background: url('../img/gallery/gallery_7.jpg') center;
            background-size: cover;" class="bg-img-category"></div>
            <div class="text-photo-category">
              <p>Монтаж</p>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-lg-4">
          <a href="/gallery-new-items.php" class="photo-category">
            <div style="background: url('../img/gallery/gallery_8.jpg') center;
            background-size: cover;" class="bg-img-category"></div>
            <div class="text-photo-category">
              <p>Новинки</p>
            </div>
          </a>
        </div>
      </div>
      <h2>Видео</h2>
      <div class="row">
        <div class="col-lg-6">
          <a class="video-block" data-fancybox href="https://www.youtube.com/watch?v=CA6navkd9AQ">
            <div class="left-video-block">
              <i class="fab fa-youtube"></i>
            </div>
            <div class="right-video-block">
              <p>Производство лодок из стеклопластика</p>
            </div>
          </a>
        </div>
        <div class="col-lg-6">
          <a class="video-block" data-fancybox href="https://www.youtube.com/watch?v=JxVEymr4690">
            <div class="left-video-block">
              <i class="fab fa-youtube"></i>
            </div>
            <div class="right-video-block">
              <p>Лодка из стеклопастика Амиго. Производство - "Пласт-Декор"</p>
            </div>
          </a>
        </div>
        <div class="col-lg-6">
          <a class="video-block" data-fancybox href="https://www.youtube.com/watch?v=Lo1dgKwlWPA">
            <div class="left-video-block">
              <i class="fab fa-youtube"></i>
            </div>
            <div class="right-video-block">
              <p>"Пласт Декор" - изготовление архитектурного декора на часовню. Московская область, Голицино</p>
            </div>
          </a>
        </div>
        <div class="col-lg-6">
          <a class="video-block" data-fancybox href="https://www.youtube.com/watch?v=Eycyv3B1rb8">
            <div class="left-video-block">
              <i class="fab fa-youtube"></i>
            </div>
            <div class="right-video-block">
              <p>Процесс изготовления вазона из стеклофибробетона</p>
            </div>
          </a>
        </div>
        <div class="col-lg-6">
          <a class="video-block" data-fancybox href="https://www.youtube.com/watch?v=UBIzk6eaaJw">
            <div class="left-video-block">
              <i class="fab fa-youtube"></i>
            </div>
            <div class="right-video-block">
              <p>Прочность изделий из стеклофибробетона</p>
            </div>
          </a>
        </div>
        <div style="padding-bottom: 30px;" class="col-lg-6">
          <a class="video-block" data-fancybox href="https://www.youtube.com/watch?v=CA6navkd9AQ">
            <div class="left-video-block">
              <i class="fab fa-youtube"></i>
            </div>
            <div class="right-video-block">
              <p>Заливка стеклофибробетона</p>
            </div>
          </a>
        </div>
        <div class="col-lg-6">
          <a class="video-block" data-fancybox href="https://www.youtube.com/watch?v=IKk-HcqWRJI">
            <div class="left-video-block">
              <i class="fab fa-youtube"></i>
            </div>
            <div class="right-video-block">
              <p>Фигурная резка пенопласта</p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
  //= template/footer.php
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script  src="js/bootstrap.min.js"></script>
  <script  src="js/gallery.js"></script>
  <script src = "js/jquery.fancybox.min.js"></script>
</body>
</html>
