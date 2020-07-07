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
  <title>"Plast Decor" - О компании</title>
  <meta name="keywords" content="декор фасада, стеклофибробетон, фибробетон, полимербетон, стеклопластик, гипс, архитектурный бетон, проектирование, лепной декор, лепнина, монтажные работы, маф, малые архитектурные формы, ландшафтный дизайн, проектирование, собственное производство">
  <meta name="description" content="Наши готовые объекты с монтажными работами фасадного декора из стеклофибробетона, минеральной ваты и других материалов.">
    <link rel="stylesheet" href="css/about-company.min.css">
    <link rel="stylesheet" href="fonts/stylesheet.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
</head>
<body>

  //= template/modal-search.php
  //= template/modal.php
  //= template/header.php
  <section class="about-company">
    <div class="container">
      <h2>О компании «Пласт-Декор»</h2>
      <p>Компания «Пласт-Декор» была основана более 10 лет назад. За это время мы показали себя профессионалами в сфере архитектурного декора.</p>
      <p>В настоящее время нет такой задачи, с которой бы компания не справилась. Имея собственное производство, прямые поставки материалов и чёткую организацию работ «Пласт-Декор» может предложить приятные цены. Этот немаловажный фактор сделает совместную работу с нами наиболее доступной, будь это производство фасадного декора, изготовление малых архитектурных форм, монтаж архитектурного декора, авторский дизайн интерьеров, ландшафтный дизайн, изготовление объемных моделей и макетов или создание дизайн-проектов.</p>
      <p>В работе мы используем только идеально подходящие материалы по основным критериям оценки качества. Это даёт нам возможность быть уверенными в результате. Делая выбор в пользу стеклофибробетона, стеклопластика, полимербетона, пенополистерола, архитектурного бетона, минеральной ваты или гипса, вы сможете получить облицовочные или декоративные изделия любого цвета и фактуры. Мы сможем создать имитацию натурального камня, песчаника или дерева.</p>
      <p>Наша компания делает все для своих клиентов. Мы работаем по всей России (Центр России, Северо-Запад, Поволжье, Юг, Сибирь, Дальний Восток, Республика Крым, Северный Кавказ, Урал). Мы ценим ваше время!</p>
      <p>Получить подробную консультацию вы всегда можете по телефону <a style="text-decoration: none" href="tel:+78462251577">+7 (846) 22 515 77</a> или по почте <a style="text-decoration: none" href="mailto:plast-decor@mail.ru">plast-decor@mail.ru</a></p>
      <p>Мы ждём вас в гости, чтобы создать вместе неповторимый декор вашего здания!</p>
    </div>
  </section>
  //= template/footer.php
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script  src="js/bootstrap.min.js"></script>
  <script  src="js/about-company.js"></script>
</body>
</html>
