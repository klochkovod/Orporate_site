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
      <h2>Изготовление фасадного декора и форм для отливок из стеклопластика</h2>
      <div class="row row-service">
        <div class="col-12 col-lg-7 text-service-row">
          <p>На рынке строительных технологий каждый год появляются новые синтетические материалы, которые постепенно вытесняют натуральные, а все потому что они обладают более привлекательными свойствами. Один из таких новых материалов – стеклокомпозит, он же стеклопластик. Преимущества этого материала уже успели оценить наши постоянные клиенты: стеклокомпозит имеет более низкую стоимость по сравнению с натуральным камнем, а также ничем не уступает ему во внешнем виде.<br></p>
          <p>Компания «Пласт-Декор» изготавливает фасадный декор из стеклокомпозита любого размера, фактуры и цвета.<br></p>
          <p>На фото - производство компании "Пласт-Декор"</p>
        </div>
        <div class="col-12 col-lg-5 img-service-row">
          <img src="img/services/services_img_1.jpg" alt="">
        </div>
      </div>
      <div class="row row-service">
        <div class="col-12 col-lg-7 order-lg-2 text-service-row">
          <p class="h-text-service">Разбираем состав стеклокомпозита</p>
          <p>Состав стеклокомпозита:</p>
          <ul>
            <li>стекловолокно;</li>
            <li>связующее вещество;</li>
            <li>дополнительные добавки (модификаторы, пластификаторы, пигменты, смазочные материалы).</li>
          </ul>
          <p>Стекловолокно в составе стеклокомпозита обеспечивает прочность материала. Связующее вещество защищает армирующие волокна от механических и других неблагоприятных воздействий. В зависимости от того как будет использоваться стеклокомпозит в него добавляют дополнительные добавки.</p>
          <p>На фото пика из стеклопластика. Высота - 2 м. Самое широкое место у пики - 600х600 мм.</p>
        </div>
        <div class="col-12 col-lg-5 order-lg-1 img-service-row">
          <img src="img/services/services_img_2.jpg" alt="">
        </div>
      </div>
      <div class="row row-service">
        <div class="col-12 col-lg-7 text-service-row">
          <p>Пики из стеклокомпозита, смонтированные  на фасад комплексного научно-исследовательского и проектно-изыскательного института АО «Гипровостокнефть». Производство и монтаж изделий - "Пласт-Декор".</p>
        </div>
        <div class="col-12 col-lg-5 img-service-row">
          <img src="img/services/services_img_3.jpg" alt="">
        </div>
      </div>
      <div class="row row-service">
        <div class="col-12 text-service-row">
          <p class="h-text-service">13 главных преимуществ стеклокомпозита</p>
          <p class="end-text-service">Стеклокомпозит – это материал, стремительно набирающий популярность, благодаря своим преимуществам:</p>
        </div>
        <div class="col-12 col-lg-6 text-service-row no-flex">
          <ul class="end-text-service2">
            <li>легкий вес (в 3,5 раз ниже, чем у стали);</li>
            <li>высокая механическая прочность;</li>
            <li>низкая теплопроводность;</li>
            <li>стойкость к перепадам температур;</li>
            <li>превосходные диэлектрические свойства;</li>
            <li>неподверженность ко всем видам агрессивных веществ;</li>
            <li>поддается всем видам механической обработки;</li>
          </ul>
        </div>
        <div class="col-12 col-lg-6 text-service-row no-flex">
          <ul class="end-text-service2">
            <li>высокие конструкционные характеристики;</li>
            <li>отлично окрашивается;</li>
            <li>коррозиестойкий;</li>
            <li>легко восстанавливается при повреждении поверхности;</li>
            <li>выдерживает высокое давление;</li>
            <li>низкая стоимость производства и, как следствие, готовых изделий.</li>
          </ul>
        </div>
      </div>
      <div class="row row-service">
        <div class="col-12 order-lg-1 text-service-row">
          <p class="h-text-service">Стеклокомпозит или стеклофибробетон – что выбрать?</p>
          <p class="end-text-service">Компания «Пласт-Декор» постоянно совершенствуется, предлагая вам самые новые и проверенные материалы для изготовления фасадного декора. Но что же лучше выбрать – стеклофибробетон или стеклокомпозит? Названия так похожи, но каждый материал по-своему уникальный. Стеклокомпозит имеет преимущество перед стеклофибробетоном в своем более низком весе, что очень привлекательно для высотного строительства. Зато на стеклофибробетон дают сертификат пожарности Г0, а на стеклопластик Г1.</p>
        </div>
        <div class="col-12 col-lg-6 order-lg-2 img-service-row">
          <img class="end-img-service" src="img/services/services_img_4.jpg" alt="">
        </div>
        <div class="col-12 col-lg-6 order-lg-4 text-service-row no-flex">
          <p>Архитектурный декор из стеклокомпозита</p>
        </div>
        <div class="col-12 col-lg-6 order-lg-3 img-service-row">
          <img class="end-img-service" src="img/services/services_img_5.jpg" alt="">
        </div>
        <div class="col-12 col-lg-6 order-lg-5 text-service-row no-flex">
          <p class="end-text-service2">Фасадный декор из стеклопластика. Производство - "Пласт-Декор"</p>
        </div>
      </div>
      <div class="row row-service">
        <div class="col-12 order-lg-6 text-service-row">
          <p class="end-text-service2">Если у вас остались вопросы по выбору материала звоните по телефону <a style="text-decoration: none" href="tel:+78462251577">+7 (846) 22 515 77</a> или пишите нам на почту <a style="text-decoration: none" href="mailto:plast-decor@mail.ru">plast-decor@mail.ru</a>. «Пласт-Декор» всегда на связи!</p>
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
