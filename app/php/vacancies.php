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
  <title>Вакансии компании Пласт-Декор</title>
  <meta name="keywords" content="реставрация, ремонт, утепление, штукатурка, покраска, подсветка фасадов,  дизайн интерьеров, ландшафтный дизайн, стройматериалы в самаре">
  <meta name="description" content="Пласт-Декор предоставляет различные услуги, связанные со строительством, архитектурой и дизайном помещений">
    <link rel="stylesheet" href="css/vacancies.min.css">
    <link rel="stylesheet" href="fonts/stylesheet.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
</head>
<body>

  //= template/modal-search.php
  //= template/modal.php
  //= template/header.php

  <section class="vacancies">
    <div class="container">
      <h2>Вакансии компании Пласт-Декор</h2>
      <p>Требуются монтажники архитектурных элементов из стеклофибробетона и пенополистерола.</p>
      <p>Требования: опыт фасадных работ не менее 3 лет.</p>
      <p style="margin: 0;">Узнать подробнее о вакансии или записаться на собеседование вы можете по телефону <a style="text-decoration: none" href="tel:+78462251577">+7 846 225-15-77</a> или по электронной почте <a style="text-decoration: none" href="mailto:plast-decor@mail.ru">plast-decor@mail.ru</a>.</p>
    </div>
  </section>

  //= template/footer.php
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script  src="js/bootstrap.min.js"></script>
  <script  src="js/vacancies.js"></script>
</body>
</html>
