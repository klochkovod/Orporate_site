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
      <h2>Производство элементов из стеклофибробетона</h2>
      <div class="row row-service">
        <div class="col-12 text-service-row">
          <p class="end-text-service2">Бетон, армированный отрезками стекловолокна, или стеклофибробетон является одним из самых универсальных строительных материалов, имеющихся ныне в распоряжении у архитекторов и проектировщиков.</p>
        </div>
      </div>
      <div class="row row-service">
        <div class="col-12 col-lg-7 text-service-row">
          <p class="h-text-service">Стеклофибробетон – это материал, используемый в строительстве и архитектуре, полученный на основе:</p>
          <ul>
            <li>кварцевого песка (ГОСТ 8736);</li>
            <li>цемента высоких марок (М 500 по ГОСТ 10178);</li>
            <li>полимерных добавок, воды;</li>
            <li>стекловолокна (ТУ 21-38-285-95)(ГОСТ 23732-79).</li>
          </ul>
        </div>
        <div class="col-12 col-lg-5 img-service-row">
          <img src="img/services/services_img_6.jpg" alt="">
        </div>
      </div>
      <div class="row row-service">
        <div class="col-12 col-lg-7 order-lg-2 text-service-row">
          <p class="h-text-service">Преимущества стеклофибробетона:</p>
          <ul>
            <li>срок эксплуатации – более 50 лет, долговечный;</li>
            <li>экологичный;</li>
            <li>огнестойкий;</li>
            <li>водонепроницаемый (W-20);</li>
            <li>морозостойкий ( более 150 циклов);</li>
            <li>ударопрочный;</li>
            <li>пластичный, неограниченный в формообразовании;</li>
            <li>трещиностойкий;</li>
            <li>легкий, пустотелый;</li>
            <li>быстрый в монтаже;</li>
            <li>неограниченный в текстуре и цвете.</li>
          </ul>
        </div>
        <div class="col-12 col-lg-5 order-lg-1 img-service-row">
          <img src="img/services/services_img_7.jpg" alt="">
        </div>
      </div>
      <div class="row row-service">
        <div class="col-12 text-service-row">
          <p class="h-text-service">"Пласт-Декор" - собственное производство стеклофибробетона</p>
          <p class="end-text-service">Компания "Пласт-Декор" имеет собственное производство изделий из стеклофибробетона. Благодаря опыту и отлаженному производству полного цикла, "Пласт-Декор" предлагает продукцию из стеклофибробетона по конкурентно способным ценам. Что позволяет работать не только на строительном рынке Самары, но и в других регионах. Мы используем проверенные временем технологии, и только качественный материал, обеспечивая при этом весь процесс проектирования, производства и монтаж изделий из стеклофибробетона.</p>
        </div>
        <div class="col-12 col-lg-7 text-service-row">
          <p><span style="font-weight: bold">Проектирование</span> – включает обмерные чертежи, чертежи изделий, узлов крепления, монтажа декора и визуализацию проекта Вашего фасада. <a style="text-decoration: none" href="/service-project.html">Подробнее</a></p>
          <p><span style="font-weight: bold">Производство</span> – включает три основных этапа:</p>
          <ul>
            <li>изготовление моделей;</li>
            <li>изготовление форм;</li>
            <li>изготовление изделий из стеклофибробетона.</li>
          </ul>
        </div>
        <div class="col-12 col-lg-5 img-service-row">
          <img src="img/services/services_img_8.jpg" alt="">
        </div>
      </div>
      <div class="row row-service">
        <div class="col-12 text-service-row">
          <p class="h-text-service">Монтаж изделий из стеклофибробетона</p>
          <p class="end-text-service">Компания "Пласт-Декор" предлагает услугу монтажа, установки изделий из стеклофибробетона. <a style="text-decoration: none" href="/service-installation.html">Подробнее</a></p>
        </div>
      </div>
      <div class="row row-service">
        <div class="col-12 text-service-row">
          <p class="h-text-service end-text-service">Применение стеклофибробетона</p>
        </div>
        <div class="col-12 col-lg-6 text-service-row no-flex">
          <ul class="end-text-service2">
            <li>Архитектурные фасадные элементы</li>
            <li>Различные панели и плитка</li>
            <li>Декоративное обрамление окон</li>
            <li>Крупногабаритные изделия и изящные с мелкой прорисовкой</li>
          </ul>
        </div>
        <div class="col-12 col-lg-6 text-service-row no-flex">
          <ul class="end-text-service2">
            <li>Кровельная черепица</li>
            <li>Садовые и парковые скульптуры</li>
            <li>Малые архитектурные формы</li>
            <li>Ограждения, балюстрады</li>
          </ul>
        </div>
      </div>
      <div class="row row-service">
        <div class="col-12 text-service-row">
          <p class="h-text-service">Почему архитекторы предпочитают изделия из стеклофибробетона?</p>
          <p>Стеклофибробетон предоставляет в распоряжение архитекторов и проектировщиков такой материал, с помощью которого могут быть реализованы самые смелые проектные решения. Он может придать зданию как остросовременную форму, так и воссоздать традиционные исторические очертания.</p>
          <p class="end-text-service2">Декор из стеклофибробетона отвечает самым требовательным эстетическим вкусам. Он долговечен и не теряет заданную форму, цвет и фактуру. Стеклофибробетон всегда выглядит дорого и стильно, поэтому архитекторы и дизайнеры рекомендуют использовать именно этот материал в декоре не только экстерьеров, но и в интерьере. </p>
        </div>
      </div>
      <div class="row row-service">
        <div class="col-12 text-service-row">
          <p class="h-text-service end-text-service">Образцы цвета и фактуры изделий из стеклофибробетона</p>
        </div>
        <div class="col-6 col-lg-4 img-service-row">
          <img class="end-img-service" src="img/services/services_img_9.jpg" alt="">
        </div>
        <div class="col-6 col-lg-4 img-service-row">
          <img class="end-img-service" src="img/services/services_img_10.jpg" alt="">
        </div>
        <div class="col-6 col-lg-4 img-service-row">
          <img class="end-img-service" src="img/services/services_img_11.jpg" alt="">
        </div>
        <div class="col-6 col-lg-4 img-service-row">
          <img class="end-img-service" src="img/services/services_img_12.jpg" alt="">
        </div>
        <div class="col-6 col-lg-4 img-service-row">
          <img class="end-img-service" src="img/services/services_img_13.jpg" alt="">
        </div>
        <div class="col-6 col-lg-4 img-service-row">
          <img class="end-img-service" src="img/services/services_img_14.jpg" alt="">
        </div>
        <div class="col-6 col-lg-4 img-service-row">
          <img src="img/services/services_img_15.jpg" alt="">
        </div>
        <div class="col-6 col-lg-4 img-service-row">
          <img src="img/services/services_img_16.jpg" alt="">
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
