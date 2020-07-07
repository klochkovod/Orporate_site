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
  <title>"Plast Decor" - Контакты</title>
  <meta name="keywords" content="реставрация, ремонт, утепление, штукатурка, покраска, подсветка фасадов,  дизайн интерьеров, ландшафтный дизайн, стройматериалы">
  <meta name="description" content="Имея собственное производство, прямые поставки материалов и чёткую организацию работ «Пласт-Декор» может предложить приятные цены.">
    <link rel="stylesheet" href="css/contacts.min.css">
    <link rel="stylesheet" href="fonts/stylesheet.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
</head>
<body>

  //= template/modal-search.php
  //= template/modal.php
  //= template/header.php

  <section class="contacts-h">
    <div class="container block-contacts">
      <h2>Контакты «Пласт-Декор»</h2>
      <p class="contains-p">Мы работаем по всей России (Центр России, Северо-Запад, Поволжье, Юг, Сибирь, Дальний Восток, Республика Крым, Северный Кавказ, Урал).<br>Получить подробную консультацию вы всегда можете по телефону <a style="text-decoration: none" href="tel:+78462251577">+7 846 225-15-77</a><br>или по электронной почте <a style="text-decoration: none" href="mailto:plast-decor@mail.ru">plast-decor@mail.ru</a>. </p>
    </div>
  </section>
  <section class="map">
    <div class="map-text">
      <div class="map-text-top">
        <div>
          <p class="h-contact">Отдел по продаже смесей</p>
          <p>Телефон:<br><a href="tel:+79266949400">+7 926 694-94-00</a></p>
          <p>E-mail:<br><a href="mailto:info@пласт-декор.рф">info@пласт-декор.рф</a></p>
        </div>
        <div>
          <p class="h-contact">Отдел по продаже декора</p>
          <p>Телефон:<br><a href="tel:+79277251577">+7 927 725-15-77</a></p>
          <p>E-mail:<br><a href="mailto:plast-decor@mail.ru">plast-decor@mail.ru</a></p>
        </div>
        <div>
          <p class="h-contact">Главный офис и производство</p>
          <p>Телефон:<br><a href="tel:+78462251577">+7 846 225-15-77</a></p>
          <p>E-mail:<br><a href="mailto:plast-decor@mail.ru">plast-decor@mail.ru</a></p>
        </div>
      </div>
      <div class="map-text-bottom">
        <div>
          <p>Адрес: г. Самара, ул. Кабельная 9 (на территории Самарской Кабельной Компании)</p>
          <p>Почтовый индекс: 443022</p>
        </div>
      </div>
    </div>
    <div id="wrapMap">
      <iframe style="pointer-events: none;" src="https://yandex.ru/map-widget/v1/?um=constructor%3A2a9aface7fa35e3475ac73d3f325665a2d2888d12bdad0d37642bcc64c8ac7ff&amp;source=constructor" width="100%" height="700" frameborder="0"></iframe>
    </div>
    <div class="line-map"></div>
  </section>
  //= template/footer.php
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script  src="js/bootstrap.min.js"></script>
  <script  src="js/contacts.js"></script>
</body>
</html>
