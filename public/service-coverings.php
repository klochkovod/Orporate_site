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