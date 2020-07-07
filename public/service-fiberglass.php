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

  <div class="modal fade style-modal" id="ModalSearch" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="header-modal-feedback">
          <span>Поиск по сайту</span>
          <button type="button" data-dismiss="modal">
            <i class="fas fa-times"></i>
          </button>
        </div>
        <div class="body-modal-feedback">
          <form method="post" action="search.php">
              <input type="text" name="string" placeholder="Текст запроса" required>
              <button type="submit">ПОИСК</button>
            </form>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade style-modal" id="ModalFeedback" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="header-modal-feedback">
          <span>Обратный звонок</span>
          <button type="button" data-dismiss="modal">
            <i class="fas fa-times"></i>
          </button>
        </div>
        <div class="body-modal-feedback">
          <form method="POST" action="/mail.php">
              <input type="text" name="name" placeholder="Имя" required>
              <input type="email" name="mail" placeholder="Email" required>
              <input name="phone" type="tel" style="position: absolute; z-index: -90;"/>
              <input name="phoneon" type="tel" placeholder="Телефон"/>
              <button type="submit">ОТПРАВИТЬ</button>
            </form>
        </div>
      </div>
    </div>
  </div>
  <header>
    <div class="up-header">
      <div class="mini-logo-header">
        <img src="img/logo.png" alt="">
      </div>
      <div class="feedback-header">
        <a href="tel:+78462251577"><span><i class="fas fa-phone"></i> +7 846 22-515-77</span></a>
        <a href="mailto:plast-decor@mail.ru"><span><i class="fas fa-at"></i> plast-decor@mail.ru</span></a>
        <button type="button" data-toggle="modal" data-target="#ModalFeedback">ОБРАТНЫЙ ЗВОНОК</button>
      </div>
      <div class="logo-header">
        <img src="img/logo.png" alt="">
      </div>
      <div class="search-header">
        <span data-toggle="modal" data-target="#ModalSearch" class="search-i"><i class="fas fa-search"></i> Поиск по сайту</span>
        <ul>
          <li><a href="https://www.instagram.com/plastdecor/"><i class="fab fa-instagram"></i></a></li>
          <li><a href="https://ok.ru/group/58176008486961"><i class="fab fa-odnoklassniki"></i></a></li>
          <li><a href="https://vk.com/plastdecor1"><i class="fab fa-vk"></i></a></li>
        </ul>
      </div>
    </div>
    <div class="nav-header-block">
      <div class="nav-header">
        <div class="nav-logo">
          <img src="img/logo.png" alt="">
        </div>
        <div class="nav-menu">
          <div class="nav__list">
              <a class="one a-nav" href="/index.php"><span>Главная</span></a>
              <a class="two a-nav" href="/contacts.php"><span>Контакты</span></a>
              <a class="three a-nav" href="/services.php"><span>Услуги</span></a>
              <a class="four a-nav" href="/gallery.php"><span>Галерея</span></a>
              <a class="five a-nav" href="/catalog.php"><span>Каталог &nbsp;<object><a href="\files\catalog.pdf" target="_blank"><i class="fas fa-download a-download"></i></a></object></span></a>
              <div id="line-menu" class="line-menu"></div>
          </div>
        </div>
      </div>
      <div class="nav-header-mini">
        <span class="menu-target">Меню <i class="fas fa-bars"></i></span>
        <i data-toggle="modal" data-target="#ModalSearch" class="fas fa-search search-header-mini"></i>
        <div class="nav__list">
            <a class="a-nav" href="/index.php">Главная</a>
            <a class="a-nav" href="/contacts.php">Контакты</a>
            <a class="a-nav" href="/services.php">Услуги</a>
            <a class="a-nav" href="/gallery.php">Галерея</a>
            <a class="a-nav download-a-mini" href="/catalog.php">Каталог<object class="a-download"><a href="\files\catalog.pdf" target="_blank"><i class="fas fa-download"></i></a></object></a>
        </div>
      </div>
    </div>
  </header>
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
  <section class="news">
    <div class="container">
      <h2>Наши новости</h2>
      <?php
        $result_footer=$induction->query("select `id`,`day_month`,`year`,`name`,`photo` from `block_news` order by `id` desc limit 0,4");
        $block_news=$result_footer->fetch_array();
      ?>
      <div class="news-block">
        <a class="latest-news" href="/news-article.php?newsid=<?php echo $block_news["id"]; ?>">
          <div class="img-latest-news" style="background: url('../img/news/<?php echo $block_news["photo"]; ?>') center; background-size: cover;"></div>
          <div class="latest-news-bottom">
            <div class="date-news">
              <span class="day-news"><?php echo $block_news["day_month"]; ?></span><br>
              <span class="year-news"><?php echo $block_news["year"]; ?></span>
            </div>
            <div class="text-news">
              <p><?php echo $block_news["name"]; ?></p>
            </div>
          </div>
        </a>
        <div class="recent-news">
          <?php
            $block_news=$result_footer->fetch_array();
          ?>
          <a class="recent-news-block" href="/news-article.php?newsid=<?php echo $block_news["id"]; ?>">
            <div class="img-news-mini" style="background: url('../img/news/<?php echo $block_news["photo"]; ?>') center; background-size: cover;">
              <div class="date-news-mini">
                <span class="day-news"><?php echo $block_news["day_month"]; ?></span><br>
                <span class="year-news"><?php echo $block_news["year"]; ?></span>
              </div>
            </div>
            <div class="text-news-mini">
             <p><?php echo $block_news["name"]; ?></p>
            </div>
          </a>
          <?php
            $block_news=$result_footer->fetch_array();
          ?>
          <a class="recent-news-block" href="/news-article.php?newsid=<?php echo $block_news["id"]; ?>">
            <div class="img-news-mini" style="background: url('../img/news/<?php echo $block_news["photo"]; ?>') center; background-size: cover;">
              <div class="date-news-mini">
                <span class="day-news"><?php echo $block_news["day_month"]; ?></span><br>
                <span class="year-news"><?php echo $block_news["year"]; ?></span>
              </div>
            </div>
            <div class="text-news-mini">
              <p><?php echo $block_news["name"]; ?></p>
            </div>
          </a>
          <?php
            $block_news=$result_footer->fetch_array();
          ?>
          <a class="recent-news-block" href="/news-article.php?newsid=<?php echo $block_news["id"]; ?>">
            <div class="img-news-mini" style="background: url('../img/news/<?php echo $block_news["photo"]; ?>') center; background-size: cover;">
              <div class="date-news-mini">
                <span class="day-news"><?php echo $block_news["day_month"]; ?></span><br>
                <span class="year-news"><?php echo $block_news["year"]; ?></span>
              </div>
            </div>
            <div class="text-news-mini">
              <p><?php echo $block_news["name"]; ?></p>
            </div>
          </a>
        </div>
      </div>
      <div class="a-news">
        <a href="/news.php">Посмотреть все новости  &nbsp; <i class="fas fa-arrow-right"></i></a>
      </div>
    </div>
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class=" col-md-6 col-lg-4 footer-left">
          <div class="nav-footer">
            <p>ССЫЛКИ</p>
            <ul>
              <li><a href="/services.php">Услуги</a></li>
              <li><a href="/catalog.php">Каталог</a></li>
              <li><a href="/gallery.php">Галерея</a></li>
              <li><a href="/news.php">Новости</a></li>
              <li><a href="/contacts.php">Контакты</a></li>
              <li><a href="/vacancies.php">Вакансии</a></li>
              <li><a href="/about-company.php">О компании</a></li>
              <li><a href="/certificates.php">Сертификаты</a></li>
              <li><a href="/finished-object.php">Готовые объекты</a></li>
              <li><a href="/articles.php">Полезные статьи</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 footer-center">
          <div class="contacts-footer">
            <p>КОНТАКТЫ</p>
            <ul>
              <li><a href="tel:+78462251577"><span>Телефон:</span><br>+7 846 225 15 77</a></li>
              <li><a href="mailto:plast-decor@mail.ru"><span>E-mail:</span><br>plast-decor@mail.ru</a></li>
              <li><span>Адрес:</span><br>г. Самара, ул. Кабельная 9 (на территории Самарской Кабельной Компании) </li>
              <li><span>Почтовый индекс:</span><br>443022</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 footer-right">
          <div class="social-footer">
            <button type="button" class="top-button"><i class="fas fa-chevron-up"></i></button>
            <img src="img/logo.png" alt="">
            <div class="social-i">
             <div>
              <a href="https://vk.com/plastdecor1"><i class="fab fa-vk"></i></a>
              <a href="https://ok.ru/group/58176008486961"><i class="fab fa-odnoklassniki"></i></a>
              <a href="https://www.facebook.com/%D0%9F%D0%BB%D0%B0%D1%81%D1%82-%D0%94%D0%B5%D0%BA%D0%BE%D1%80-387038868308927/"><i class="fab fa-facebook-f"></i></a>
              <a href="https://www.youtube.com/channel/UCSYe-tnc4l6WWUqWqytyh0g"><i class="fab fa-youtube"></i></a>
             </div>
             <div>
               <a href="https://twitter.com/plast_decor"><i class="fab fa-twitter"></i></a>
               <a href="https://www.instagram.com/plastdecor/"><i class="fab fa-instagram"></i></a>
               <a href="https://www.pinterest.ru/rudenkoek/"><i class="fab fa-pinterest"></i></a>
               <a href="#"><i class="fab fa-telegram-plane"></i></a>
             </div>
            </div>
            <button type="button" data-toggle="modal" data-target="#ModalFeedback">ОБРАТНЫЙ ЗВОНОК</button>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <span>www.пласт-декор.рф © 2020 Все права защищены</span>
      </div>
    </div>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script  src="js/bootstrap.min.js"></script>
  <script  src="js/service.js"></script>
</body>
</html>