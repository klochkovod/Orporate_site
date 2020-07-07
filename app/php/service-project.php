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
      <h2>Разработка дизайн проекта фасада</h2>
      <div class="row justify-content-center row-service">
        <div class="col-12 text-service-row">
          <p>Профессиональный подход к оформлению фасада здания поможет избежать массы проблем и существенно сэкономит время и деньги. Мы предлагаем оценить фасад Вашего дома до его возведения, внести свои пожелания на этапе согласования проекта. Необходимость проекта при создании фасада сложно переоценить.</p>
          <p>Достаточно сравнить результаты работ специалистов и самоучек-самоделок, которые стараются на всём сэкономить, в том числе и на квалифицированной помощи. Проект не просто помогает избежать ненужных ошибок при возведении фасада, но и существенно увеличивает шансы на то, что он будет смотреться гармонично и продуманно.</p>
          <p class="end-text-service">Вот к примеру три разных строения. Казалось бы, что здесь можно придумать? Поэтому лучше предоставить эту задачу опытному архитектору.</p>
        </div>
        <div class="col-12 col-lg-6 img-service-row">
          <img class="end-img-service" src="img/services/services_img_25.jpg" alt="">
        </div>
        <div class="col-12 col-lg-6 img-service-row">
          <img class="end-img-service" src="img/services/services_img_27.jpg" alt="">
        </div>
        <div class="col-12 col-lg-6 img-service-row">
          <img class="end-img-service" src="img/services/services_img_26.jpg" alt="">
        </div>
        <div class="col-12 text-service-row">
          <p>Проект созданный компанией «Пласт-Декор»  позволяет оценить фасад в целом до его возведения. Гораздо проще перечертить пару линий, чем снять приклеенные декоративные элементы с фасада в случае, когда они не подошли по каким-то причинам. Проработка проекта потребует не только четкого представления его вида, но и знания основ архитектуры и строительных работ.</p>
          <p>Фасад может до неузнаваемости измениться, сменив стиль, цвет и архитектурные детали. Для заказчика очень важно еще до начала работ увидеть возможные варианты, смоделированные во всех деталях на компьютере или бумаге.</p>
          <p class="end-text-service">Например, в ходе совместной работы с заказчиком мы приходим к такому архитектурному решению главного фасада:</p>
        </div>
        <div class="col-12 col-lg-6 img-service-row">
          <img class="end-img-service" src="img/services/services_img_28.jpg" alt="">
        </div>
        <div class="col-12 col-lg-6 img-service-row">
          <img class="end-img-service" src="img/services/services_img_29.jpg" alt="">
        </div>
        <div class="col-12 col-lg-6 img-service-row">
          <img class="end-img-service" src="img/services/services_img_30.jpg" alt="">
        </div>
        <div class="col-12 text-service-row">
          <p>Только после согласования проекта с клиентом, можно приступать к строительным работам и изменять фасад здания.</p>
          <p class="end-text-service">Новый фасад скроет все дефекты стен, а новейшие строительные материалы в состоянии в корне изменить облик строения, придав ему индивидуальный и стильный вид.</p>
        </div>
        <div class="col-12 col-lg-6 img-service-row">
          <img class="end-img-service" src="img/services/services_img_31.jpg" alt="">
        </div>
        <div class="col-12 col-lg-6 img-service-row">
          <img class="end-img-service" src="img/services/services_img_32.jpg" alt="">
        </div>
        <div class="col-12 col-lg-6 img-service-row">
          <img class="end-img-service" src="img/services/services_img_33.jpg" alt="">
        </div>
        <div class="col-12 text-service-row">
          <p class="end-text-service2">К сожалению, фасады домов и строений часто безлики и невыразительны. Это объясняется незнанием или пренебрежением к элементарным основам дизайна. Инструментарий дизайна способен преобразить фасады домов и зданий.</p>
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
