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
    <link rel="stylesheet" href="css/service.min.css">
    <link rel="stylesheet" href="fonts/stylesheet.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
</head>
<body>

  //= template/modal-search.php
  //= template/modal.php
  //= template/header.php
  <section class="service-section">
    <div class="container">
      <h2>Продажа защитных покрытий<br>"Пласт-Декор"</h2>
      <div class="row row-service">
        <div class="col-12 order-lg-1 text-service-row">
          <p class="h-text-service end-text-service">МАСТИЧНЫЕ МАТЕРИАЛЫ</p>
        </div>
        <div class="col-12 col-lg-6 order-lg-2 img-service-row no-flex">
          <p class="h-text-service end-img-service">Пласт-Декор-М Жесткий</p>
          <p>Жесткое покрытие на мраморном заполнителе</p>
        </div>
        <div class="col-12 col-lg-6 order-lg-4 img-service-row">
          <img src="img/services/services_img_39.jpg" alt="">
        </div>
        <div class="col-12 col-lg-6 order-lg-3 img-service-row no-flex">
          <p class="h-text-service end-img-service">Пласт-Декор М Эластичный</p>
          <p>Эластичное покрытие на мраморном заполнителе</p>
        </div>
        <div class="col-12 col-lg-6 order-lg-5 img-service-row">
          <img src="img/services/services_img_40.jpg" alt="">
        </div>
        <div class="col-12 col-lg-6 order-lg-6 img-service-row no-flex">
          <p class="h-text-service">Пласт-Декор-М Контакт</p>
        </div>
        <div class="col-12 col-lg-6 order-lg-7 img-service-row no-flex">
        </div>
        <div class="col-12 col-lg-6 order-lg-8 img-service-row">
          <img src="img/services/services_img_41.jpg" alt="">
        </div>
      </div>
      <div class="row row-service">
        <div class="col-12 order-lg-1 text-service-row">
          <p class="h-text-service end-text-service">ПОЛИМЕРЦЕМЕНТНЫЕ (ДВУХУПАКОВОЧНЫЕ) МАТЕРИАЛЫ</p>
        </div>
        <div class="col-12 col-lg-6 order-lg-2 img-service-row no-flex">
          <p class="h-text-service end-img-service">Пласт-Декор-Ц База</p>
          <p>Серое покрытие на кварцевом заполнителе</p>
        </div>
        <div class="col-12 col-lg-6 order-lg-4 img-service-row">
          <img src="img/services/services_img_42.jpg" alt="">
        </div>
        <div class="col-12 col-lg-6 order-lg-3 img-service-row no-flex">
          <p class="h-text-service end-img-service">Пласт-Декор-Ц Финиш</p>
          <p>Белое покрытие на мраморном заполнителе</p>
        </div>
        <div class="col-12 col-lg-6 order-lg-5 img-service-row">
          <img src="img/services/services_img_43.jpg" alt="">
        </div>
      </div>
      <div class="row row-service">
        <div class="col-12 text-service-row">
          <p class="h-text-service end-text-service">ЗАТВОРИТЕЛИ (ЖИДКИЕ КОМПОНЕНТЫ) ДЛЯ ПОЛИМЕРЦЕМЕНТНЫХ МАТЕРИАЛОВ</p>
        </div>
        <div class="col-12 col-lg-6 img-service-row no-flex">
          <p class="h-text-service">Пласт-Декор-Д2</p>
        </div>
        <div class="col-12 col-lg-6 img-service-row no-flex">
        </div>
        <div class="col-12 col-lg-6 img-service-row">
          <img src="img/services/services_img_44.jpg" alt="">
        </div>
      </div>
      <div class="row row-service">
        <div class="col-12 text-service-row">
          <p class="h-text-service end-text-service">ОДНОУПАКОВОЧНАЯ ПОЛИМЕРЦЕМЕНТНАЯ ШТУКАТУРНО-КЛЕЕВАЯ СУХАЯ СМЕСЬ</p>
        </div>
        <div class="col-12 col-lg-6 img-service-row no-flex">
          <p class="h-text-service end-img-service">Пласт-Декор-Ц Супермонтаж</p>
          <p>Армированный штукатурно-клеевой состав</p>
        </div>
        <div class="col-12 col-lg-6 img-service-row no-flex">
        </div>
        <div class="col-12 col-lg-6 img-service-row">
          <img src="img/services/services_img_45.jpg" alt="">
        </div>
      </div>
      <div class="row row-service">
        <div class="col-12 text-service-row">
          <p>Представьте, что вы приобрели такой легкий, удобный, недорогой материал, как пенопласт. Установили его на дом и довольны проделанной работой.</p>
          <p>А через полгода, год-два все декоративные элементы отвалились. Или выцвели. Или разрушились. Почему это может произойти?</p>
          <ul>
            <li>Отсутствие защиты</li>
            <li>Неправильный выбор материалов</li>
          </ul>
        </div>
      </div>
      <div class="row row-service">
        <div class="col-12 text-service-row">
          <p class="h-text-service">Как правильно выбрать материалы для пенопласта</p>
          <p>Защитное покрытие для пенопласта от «Пласт-Декор» обладает следующими характеристиками:</p>
          <ul>
            <li>легкость нанесения</li>
            <li>стойкость к внешним воздействиям</li>
            <li>возможность восстановления</li>
            <li>возможность декорирования</li>
          </ul>
          <p>Это значит, что наши смеси пластичны, не разрушаются под воздействием осадков или химических веществ. В любой момент покрытие можно повторить, убрав недостатки, что продляет жизнь любому элементу из пенопласта. И самое приятное – покрытие для пенопласта можно декорировать как угодно! Помимо прочного покрытия вам также понадобится стойкий клей для пенопласта.</p>
          <p>Небольшой совет: как покрытие, так и клей желательно брать у одного производителя. В таком случае будет достигнута максимальная защита.</p>
          <p>Все наши материалы прошли испытания и сертификацию. При работе с ними мы рекомендуем использовать миксеры ЗМР-1350Э-2 и ЗМР-1400 ЭП-3.</p>
        </div>
      </div>
      <div class="row row-service">
        <div class="col-12 text-service-row">
          <p class="h-text-service">Мы приготовили для вас самые качественные материалы. Посмотрите их в каталоге выше!</p>
          <ul class="end-text-service2">
            <li>Прайс на смеси Пласт-Декор без НДС (<a style="font-weight: bold; text-decoration: none;" href="\files\Прайс на смеси Пласт-Декор без НДС.pdf" target="_blank">Скачать прайс <i class="fas fa-download"></i></a>)</li>
            <li>Прайс на смеси Пласт-Декор с НДС (<a style="font-weight: bold; text-decoration: none;" href="\files\Прайс на смеси Пласт-Декорт с НДС.pdf" target="_blank">Скачать прайс <i class="fas fa-download"></i></a>)</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  //= template/footer.php
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script  src="js/bootstrap.min.js"></script>
  <script  src="js/service.js"></script>
</body>
</html>
