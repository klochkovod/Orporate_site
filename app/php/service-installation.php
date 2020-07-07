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
      <h2>Монтаж декора и фасадные работы</h2>
      <div class="row row-service">
        <div class="col-12 text-service-row">
          <p class="h-text-service">Утепление</p>
          <p>Фасад любого здания - это прежде всего его лицо: оригинальное, являющееся дополнением к существующему архитектурному ансамблю. Вместе с тем фасад должен стать надежной защитой от погодных явлений и перепадов температур.</p>
          <p>Ваш дом будет крепостью, где будет тепло и уютно, если правильно подобрать утеплитель. Есть множество технологий утепления фасадов: от обычного оштукатуривания до применения различных утеплителей. Чтобы не прогадать, советуем обратиться к квалифицированным специалистам</p>
          <p class="end-text-service">В преддверии холодов перед каждым владельцем квартиры, дома или офиса встаёт задача утеплить помещение и удержать в нём тепло в течение необходимого времени. Прежде всего стратегический характер в данном случае носит утепление фасадов. 10 см. пенополистерольной плиты равны теплоизоляции 40 см кирпичной стены! 10 см пенополистерольной плиты равны теплоизоляции 42 см газобетонный блок! 4 см пенополистерольной плиты равны теплоизоляции 11 см пенобетона! 4 см пенополистерольной плиты равны теплоизоляции 14 см деревянной стены! Технология утепления фасадов предполагает различные системы утепления с применением разнообразных материалов предлагаемые компанией «Пласт-Декор».</p>
        </div>
        <div class="col-12 col-lg-5 text-service-row">
          <p>Каждый способ по-своему хорош. Но только специалист скажет вам, какой из них подойдёт конкретно вашему дому. Какой утеплитель применить базальт или пенополистерол. Какая толщина должна быть утеплителя.</p>
        </div>
        <div class="col-12 col-lg-7 img-service-row">
          <img src="img/services/services_img_1.png" alt="">
        </div>
      </div>
      <div class="row row-service">
        <div class="col-12 text-service-row">
          <p class="h-text-service">Штукатурка</p>
          <p class="end-text-service">В настоящее время отечественными и зарубежными производителями предлагается большой выбор штукатурных смесей для фасада.</p>
        </div>
        <div class="col-12 col-lg-7 text-service-row">
          <p>Фасады домов штукатурятся по маякам с применением сетки для армирования нанесенного слоя. Затем наносится слой декоративной штукатурки Если стены дома не планируются утеплять, но фасад дома хочется облагородить то достаточно их оштукатурить, и украсить декором.</p>
        </div>
        <div class="col-12 col-lg-5 img-service-row">
          <img src="img/services/services_img_34.jpg" alt="">
        </div>
      </div>
      <div class="row row-service">
        <div class="col-12 text-service-row">
          <p class="h-text-service">Облицовка камнем</p>
          <p class="end-text-service">Чаще всего по соседству с архитектурными элементами для декорирования фасада используют камень натуральный или искусственный.</p>
        </div>
        <div class="col-12 col-lg-7 text-service-row">
          <p>В комплексе с другими работами по утеплению и украшению фасада мы предлагаем работы по облицовки декоративным камнем. Прямые поставки камня из карьеров позволяют выполнять подобные заказы быстро, опираясь на большой ассортимент продукции.</p>
        </div>
        <div class="col-12 col-lg-5 img-service-row">
          <img src="img/services/services_img_35.jpg" alt="">
        </div>
      </div>
      <div class="row row-service">
        <div class="col-12 text-service-row">
          <p class="h-text-service">Монтаж декора</p>
          <p class="end-text-service">Компания Пласт Декор предлагаем профессиональный монтаж фасадных элементов. Стоимость и время монтажа архитектурного декора зависит от различных факторов: конфигурации фасада, особенности крепления декора, удаленности объекта, наличия строительных лесов и прочего.</p>
        </div>
        <div class="col-12 col-lg-7 text-service-row">
          <p>В случае, если вы намерены вести монтаж силами собственных строителей, мы можем проконсультировать ваших рабочих на объекте, а также провести последующий авторский надзор.</p>
        </div>
        <div class="col-12 col-lg-5 img-service-row">
          <img src="img/services/services_img_36.jpg" alt="">
        </div>
      </div>
      <div class="row row-service">
        <div class="col-12 text-service-row">
          <p class="end-text-service2">Если у вас остались вопросы по фасадным работам звоните по телефону <a style="text-decoration: none" href="tel:+78462251577">+7 (846) 22 515 77</a> или пишите нам на почту <a style="text-decoration: none" href="mailto:plast-decor@mail.ru">plast-decor@mail.ru</a>. «Пласт-Декор» всегда на связи!</p>
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
