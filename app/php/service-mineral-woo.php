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
      <h2>Производство фасадного декора из минеральной ваты</h2>
      <div class="row row-service">
        <div class="col-12 text-service-row">
          <p class="h-text-service end-text-service">Минеральная вата для отделки фасада – выбор в пользу безопасности!</p>
        </div>
        <div class="col-12 col-lg-7 text-service-row">
          <p>Минеральная вата может использоваться в строительстве не только как утеплитель, но также как и отделочный материал. Компания Пласт-Декор изготавливает из армированной (полимерцементным составом) минеральной ваты архитектурный декор, готовый к покраске: карнизы, молдинги, обрамления окон и дверей, арки, пилястры, русты и многое другое. В нашем постоянно пополняющемся каталоге вы можете найти фасадный декор, который мы изготавливаем из минеральной ваты. Он прослужит вам долгие годы и будет радовать глаз своей красотой. Богатый выбор фактур поможет подобрать вам именно то, что подойдет вашему дому и отлично впишется в общую стилистику фасада, будь то классический фасад с отделкой под песчаник или фасад в стиле шале с элементами из камня и дерева.</p>
        </div>
        <div class="col-12 col-lg-5 img-service-row">
          <img src="img/services/services_img_21.jpg" alt="">
        </div>
      </div>
      <div class="row row-service">
        <div class="col-12 col-lg-7 order-lg-2 text-service-row">
          <p>Главное превосходство минеральной ваты перед другими материалами – это то, что этот материал – ПОЛНОСТЬЮ СООТВЕТСТВУЕТ ПОЖАРНОЙ БЕЗОПАСНОСТИ (класс пожарной опасности КМ0). Минеральная вата безвредна для человека и является экологически чистым материалом!</p>
          <p>Если вы думаете о безопасности своего дома и выбираете экологически чистые материалы для его отделки то, минеральная базальтовая вата – это идеальный вариант для отделки фасада!</p>
          <p>На фото: декоративные элементы из минеральной ваты</p>
        </div>
        <div class="col-12 col-lg-5 order-lg-1 img-service-row">
          <img src="img/services/services_img_22.jpg" alt="">
        </div>
      </div>
      <div class="row row-service">
        <div class="col-12 col-lg-7 text-service-row">
          <p>На фото: декоративные элементы крепятся на клеевой раствор, который наносится на тыльную сторону и торцы элемента, и механическим путем с помощью тарельчатых дюбелей. Затем места крепления и стыки шпаклюются и красятся в нужный цвет.</p>
        </div>
        <div class="col-12 col-lg-5 img-service-row">
          <img src="img/services/services_img_23.jpg" alt="">
        </div>
      </div>
      <div class="row row-service">
        <div class="col-12 col-lg-7 order-lg-2 text-service-row">
          <p class="h-text-service">Преимущества фасадного декора от компании «Пласт-Декор»:</p>
          <ul>
            <li>доступная цена и короткие сроки изготовления декора;</li>
            <li>прочное покрытие, сохранения четкости линий;</li>
            <li>малый вес элементов и простота монтажа;</li>
            <li>изготовление по эскизам заказчика и имеющимся каталогам;</li>
            <li>мы выполняем частные заказы физических лиц, а так же охотно сотрудничаем с архитекторами и строительными фирмами стараясь максимально выполнить их творческую мысль.</li>
          </ul>
        </div>
        <div class="col-12 col-lg-5 order-lg-1 img-service-row">
          <img src="img/services/services_img_24.jpg" alt="">
        </div>
      </div>
      <div class="row row-service">
        <div class="col-12 text-service-row">
          <p class="h-text-service">Сроки выполнения</p>
          <p>Конечно же, срок выполнения вашего заказа зависит от количества фасадных элементов и их сложности. Но есть еще один важный фактор - загруженность производства. В среднем изготовление декоративных элементов на двух этажный дом площадью фасада 300- 350 м2 составляет - 5-8 рабочих дней. Но в сезон, из-за загруженности производства, сроки выполнения заказа могут увеличиться.</p>
          <p class="end-text-service2">Если вы хотите заказать фасадный декор из минеральной ваты или проконсультироваться с нашими специалистами позвоните нам <a style="text-decoration: none" href="tel:+78462251577">+7 (846) 22 515 77</a> или пишите нам на почту <a style="text-decoration: none" href="mailto:plast-decor@mail.ru">plast-decor@mail.ru</a>.</p>
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
