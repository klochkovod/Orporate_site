<!DOCTYPE html>
<html lang="ru">
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
  <title>«Пласт Декор» - фасадный декор от производителя!</title>
  <meta name="keywords" content="декор фасада, стеклофибробетон, фибробетон, полимербетон, стеклопластик, гипс, архитектурный бетон, проектирование, лепной декор, лепнина, монтажные работы, маф, малые архитектурные формы, ландшафтный дизайн, проектирование, собственное производство">
  <meta name="description" content="Собственное производство фасадного декора из стеклофибробетона, минеральной ваты и других материалов.   Монтаж, проектирование.  Полный цикл работ.">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="fonts/stylesheet.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
</head>
<body>

  <div id="p_prldr"><div class="contpre"><div class="load-3"><div class="line"></div><div class="line"></div><div class="line"></div><div class="line"></div><div class="line"></div></div></div></div>
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

  <header>
    <main class="main">
      <div class="bg-slide1">
      </div>
      <div class="bg-slide2">
      </div>
      <div class="bg-slide3">
      </div>
      <div class="bg-intro">
      </div>
      <div class="intro">
        <div class="line-bottom">
          <div class="vertical-line"></div>
          <a href="#anchor_introduction" class="topLink">
            <div class="bottom-button">
              <span>Узнать больше</span>
              <img src="img/mouse.png" alt="">
              <i class="fas fa-angle-down"></i>
            </div>
          </a>
          <div class="vertical-line"></div>
          <div class="vertical-lineEnd">
          </div>
        </div>
        <div class="intro-block">
          <div class="nav-menu">
            <nav>
              <img src="img/logo.png" alt="">
              <button type="button" data-toggle="modal" data-target="#ModalFeedback">ОБРАТНЫЙ ЗВОНОК</button>
              <a href="tel:+78462251577"><span><i class="fas fa-phone"></i> +7 846 22-515-77</span></a>
              <a href="mailto:plast-decor@mail.ru"><span><i class="fas fa-at"></i> plast-decor@mail.ru</span></a>
              <span data-toggle="modal" data-target="#ModalSearch" class="search-i"><i class="fas fa-search"></i> Поиск по сайту</span>
              <div class="search-menu">
                <i data-toggle="modal" data-target="#ModalSearch" class="fas fa-search search-i-mini"></i>
                <i class="fas fa-bars nav-trigger menu-i"></i>
              </div>
            </nav>
          </div>
          <div class="nav-menu-mini">
            <div class="contacts-intro-mini">
              <button type="button" data-toggle="modal" data-target="#ModalFeedback">ОБРАТНЫЙ ЗВОНОК</button>
              <a href="mailto:plast-decor@mail.ru"><span><i class="fas fa-at"></i> plast-decor@mail.ru</span></a>
              <a href="tel:+78462251577"><span><i class="fas fa-phone"></i> +7 846 22-515-77</span></a>
            </div>
          </div>
          <div class="intro-info-block">
            <div class="text-slide-block">
              <div class="slide-text">
                <div class="slide-text1">
                  <div>
                    <span>Компания «Пласт-Декор»</span>
                  </div>
                  <div>
                    <p>Мы производим фасадный декор из стеклофибробетона, минеральной ваты и других материалов</p>
                  </div>
                  <div>
                    <a href="/services.php">Узнать подробнее &nbsp; <i class="fas fa-arrow-right"></i></a>
                  </div>
                </div>
                <div class="slide-text2">
                  <div>
                    <span>Компания «Пласт-Декор»</span>
                  </div>
                  <div>
                    <p>В нашем арсенале только лучшие материалы, признанные архитекторами всего мира</p>
                  </div>
                  <div>
                    <a href="/services.php">Узнать подробнее &nbsp; <i class="fas fa-arrow-right"></i></a>
                  </div>
                </div>
                <div class="slide-text3">
                  <div>
                    <span>Компания «Пласт-Декор»</span>
                  </div>
                  <div>
                    <p>Мы работаем с различными бюджетами – от эконом до эксклюзивных проектов</p>
                  </div>
                  <div>
                    <a href="\files\Прайс-лист.pdf">Узнать подробнее &nbsp; <i class="fas fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="social-intro">
            <ul>
              <li><a href="https://www.instagram.com/plastdecor/"><i class="fab fa-instagram"></i></a></li>
              <li><a href="https://ok.ru/group/58176008486961"><i class="fab fa-odnoklassniki"></i></a></li>
              <li><a href="https://vk.com/plastdecor1"><i class="fab fa-vk"></i></a></li>
            </ul>
          </div>
          <div class="slide-button">
            <div class="slide-button-intro1 active"></div>
            <div class="vert-line-intro"></div>
            <div class="slide-button-intro2"></div>
            <div class="vert-line-intro"></div>
            <div class="slide-button-intro3"></div>
          </div>
        </div>

      </div>
    </main>

    <nav class="nav">
        <ul class="nav__list">
            <li class="nav__item"><a href="#">Главная</a></li>
            <li class="nav__item"><a href="contacts.php">Контакты</a></li>
            <li class="nav__item"><a href="services.php">Услуги</a></li>
            <li class="nav__item"><a href="gallery.php">Галерея</a></li>
            <li class="nav__item"><a href="catalog.php">Каталог</a></li>
        </ul>
        <i class="fas fa-times nav-trigger2"></i>
    </nav>
  </header>
  <section id="anchor_introduction" class="introduction">
    <div class="container service-index">
      <div class="row align-items-center">
        <div class="col-lg-9">
          <h2>Главное преимущество нашей компании – это наличие собственного производства полного цикла!</h2>
          <span>Прямые поставки материалов</span>
        </div>
        <div class="col-lg-3 introduction-margin">
          <a href="services.php">ВСЕ УСЛУГИ</a>
        </div>
      </div>
    </div>
    <div class="line-possibilities"></div>
    <div class="possibilities">
      <a class="possibility" href="service-project.php">
        <i class="fas fa-pencil-ruler"></i>
        <span>Дизайн</span>
        <p>Разработка индивидуального дизайн проекта фасада с показом стилевых и цветовых решений</p>
      </a>
      <div class="line-possibilities display2-line"></div>
      <div class="vertical-line-possibilities"></div>
      <a class="possibility" href="service-installation.php">
        <i class="fas fa-tools"></i>
        <span>Монтаж</span>
        <p>Профессиональный монтаж декоративных элементов и фасадные работы</p>
      </a>
      <div class="line-possibilities display2-line"></div>
      <div class="vertical-line-possibilities"></div>
      <a class="possibility" href="services.php">
        <i class="fas fa-sticky-note"></i>
        <span>Продукция</span>
        <p>Продукция производимая на собственном производстве полного цикла</p>
      </a>
      <div class="line-possibilities display2-line"></div>
      <div class="vertical-line-possibilities"></div>
      <a class="possibility" href="service-coverings.php">
        <i class="fas fa-fill-drip"></i>
        <span>Продажа смеси</span>
        <p>Защитное покрытие собственного производства от «Пласт-Декор»</p>
      </a>
    </div>
  </section>
  <section class="action">
    <div class="bg-action"></div>
    <div class="container">
      <h2>Почему именно мы?</h2>
      <div class="lists">
        <div class="list1">
          <span>Наши преимущества</span>
          <ul>
            <li>Опыт работы более 10 лет</li>
            <li>Полный цикл работ</li>
            <li>Собственное производство</li>
            <li>Большой выбор декора из <br> различных материалов</li>
          </ul>
        </div>
        <div class="list2">
          <span>Фасадный декор</span>
          <ul>
            <li>Из стеклофибробетона</li>
            <li>Из пенопласта</li>
            <li>Из стеклокомпозита</li>
            <li>Из минеральной ваты</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section class="about-us-block">
    <div class="container sample-padding">
      <p>Мы работаем с различными бюджетами – от эконом до эксклюзивных проектов! На каждом этапе мы несём полную ответственность за качество. С нами вы можете контролировать весь процесс производства, начиная с проектирования и до завершения работ.</p>
      <div class="row">
        <div class="col-lg-5 img-about-us">
          <div class="switch-text">
            <div class="switch-text1 active"></div>
            <div class="switch-text2"></div>
            <div class="switch-text3"></div>
          </div>
          <div class="about-us-img-slides">
            <div class="about-us-img-slide1">
              <img src="img/bg-about-us.jpg" alt="">
            </div>
            <div class="about-us-img-slide2">
              <img src="img/bg-about-us2.jpg" alt="">
            </div>
            <div class="about-us-img-slide3">
              <img src="img/bg-about-us3.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="col-lg-7 text-about-us">
          <p class="about-us-p-slide1">С компанией «Пласт-Декор» можно решить любую задачу в мире строительных технологий: производство фасадного декора, изготовление малых архитектурных форм, монтаж архитектурного декора, авторский дизайн интерьеров, ландшафтный дизайн, изготовление объемных моделей и макетов, разработка дизайн-проекта, реставрация или ремонт, утепление или подсветка фасадов, штукатурка, покраска. Также мы являемся производителями лодок из стеклопластика PLAST-WATER.</p>
          <p class="about-us-p-slide2">В нашем арсенале только лучшие материалы, признанные архитекторами всего мира: стеклофибробетон, полимербетон, пенополистерол, стеклопластик, архитектурный бетон, минеральная вата и гипс – все они являются лучшим решением в изготовлении облицовочных и декоративных изделий. Любой из вышеперечисленных композитов может быть выполнен с различными фактурами и с нужным вам цветом.</p>
          <p class="about-us-p-slide3">Для того чтобы подчеркнуть уникальность фасада мы предлагаем использовать колонны, пилястры, фасадные карнизы, обрамления окон, обрамление дверей, балюстрады, скульптуры, декоративные панно, рустовые камни, замковые камни. Подробнее с ассортиментом можно ознакомиться <a style="text-decoration: none" href="/catalog.php">в нашем каталоге</a>.</p>
        </div>
      </div>
      <div class="about-us-advantage">
        <div class="advantage-line"></div>
        <div class="advantage-text">
          <p>Наша компания делает все для своих клиентов. Мы производитель и всегда готовы предложить своим клиентам лучшие условия. Стоимость услуг или изделий можно уточнить у наших специалистов по телефону <a style="text-decoration: none" href="tel:+78462251577">+7 846 225-15-77</a> или по электронной почте <a style="text-decoration: none" href="mailto:plast-decor@mail.ru">plast-decor@mail.ru</a>.</p>
          <a class="advantage-figure" href="\files\Прайс-лист.pdf" target="_blank">
            <object type="image/svg+xml" data="img/1070800.svg" width="150" height="150" >
              Your browser does not support SVG
            </object>
            <span>Скачать<br>прайс</span>
            <i class="fas fa-download"></i>
          </a>
        </div>
      </div>
    </div>
  </section>
  <section class="stages">
    <div class="container">
      <h2>Как мы работаем</h2>
    </div>
    <div class="stage-container">
      <div class="stages-block stages-left-block">
        <div class="row-stages1">
          <div class="stage-start"></div>
          <div class="stage">
            <i class="fas fa-headset"></i>
            <span>Получение<br>заказа</span>
            <div class="circle-stage"></div>
            <div class="vertical-stage"></div>
          </div>
          <div class="stage2">
            <p>Составляем Техническое Задание. Без сложных формулировок, чтобы вам было всё понятно. Схемы и описания.</p>
          </div>
          <div class="stage">
            <i class="fas fa-headset"></i>
            <span>Выезд<br>на объект</span>
            <div class="circle-stage"></div>
            <div class="vertical-stage"></div>
          </div>
          <div class="stage2">
            <p>Составлление смет и подписание договора.</p>
          </div>
        </div>
        <div class="row-stages2">
          <div class="stage-start">
            <div class="circle-stage-start"></div>
            <div class="horizontal-stage-start"></div>
          </div>
          <div class="stage">
            <div class="horizontal-stage2"></div>
            <div class="circle-stage2">
              <span>1</span>
            </div>
            <div class="horizontal-stage2"></div>
          </div>
          <div class="stage">
            <div class="horizontal-stage2"></div>
            <div class="circle-stage2">
              <span>2</span>
            </div>
            <div class="horizontal-stage2"></div>
          </div>
          <div class="stage">
            <div class="horizontal-stage2"></div>
            <div class="circle-stage2">
              <span>3</span>
            </div>
            <div class="horizontal-stage2"></div>
          </div>
          <div class="stage">
            <div class="horizontal-stage2"></div>
            <div class="circle-stage2">
              <span>4</span>
            </div>
            <div class="horizontal-stage2"></div>
          </div>
          <div class="stage-end">
            <div class="horizontal-stage-end"></div>
          </div>
        </div>
        <div class="row-stage3">
          <div class="stage2">
            <p>Составляем Техническое Задание. Без сложных формулировок, чтобы вам было всё понятно. Схемы и описания.</p>
          </div>
          <div class="stage">
            <div class="vertical-stage"></div>
            <div class="circle-stage"></div>
            <span>Получение<br>заказа</span>
            <i class="fas fa-headset"></i>
          </div>
          <div class="stage2">
            <p>Составлление смет и подписание договора.</p>
          </div>
          <div class="stage">
            <div class="vertical-stage"></div>
            <div class="circle-stage"></div>
            <span>Выезд<br>на объект</span>
            <i class="fas fa-headset"></i>
          </div>
          <div class="stage-start"></div>
        </div>
      </div>
      <div class="stages-block stages-right-block">
        <div class="row-stages1">
          <div class="stage-start"></div>
          <div class="stage">
            <i class="fas fa-headset"></i>
            <span>Получение<br>заказа</span>
            <div class="circle-stage"></div>
            <div class="vertical-stage"></div>
          </div>
          <div class="stage2">
            <p>Составляем Техническое Задание. Без сложных формулировок, чтобы вам было всё понятно. Схемы и описания.</p>
          </div>
          <div class="stage">
            <i class="fas fa-headset"></i>
            <span>Выезд<br>на объект</span>
            <div class="circle-stage"></div>
            <div class="vertical-stage"></div>
          </div>
          <div class="stage2">
            <p>Составлление смет и подписание договора.</p>
          </div>
        </div>
        <div class="row-stages2">
          <div class="stage-end">
            <div class="horizontal-stage-end"></div>
          </div>
          <div class="stage">
            <div class="horizontal-stage2"></div>
            <div class="circle-stage2">
              <span>5</span>
            </div>
            <div class="horizontal-stage2"></div>
          </div>
          <div class="stage">
            <div class="horizontal-stage2"></div>
            <div class="circle-stage2">
              <span>6</span>
            </div>
            <div class="horizontal-stage2"></div>
          </div>
          <div class="stage">
            <div class="horizontal-stage2"></div>
            <div class="circle-stage2">
              <span>7</span>
            </div>
            <div class="horizontal-stage2"></div>
          </div>
          <div class="stage">
            <div class="horizontal-stage2"></div>
            <div class="circle-stage2">
              <span>8</span>
            </div>
            <div class="horizontal-stage2"></div>
          </div>
          <div class="stage-start">
            <div class="horizontal-stage-start"></div>
            <div class="circle-stage-start"></div>
          </div>
        </div>
        <div class="row-stage3">
          <div class="stage2">
            <p>Составляем Техническое Задание. Без сложных формулировок, чтобы вам было всё понятно. Схемы и описания.</p>
          </div>
          <div class="stage">
            <div class="vertical-stage"></div>
            <div class="circle-stage"></div>
            <span>Получение<br>заказа</span>
            <i class="fas fa-headset"></i>
          </div>
          <div class="stage2">
            <p>Составлление смет и подписание договора.</p>
          </div>
          <div class="stage">
            <div class="vertical-stage"></div>
            <div class="circle-stage"></div>
            <span>Выезд<br>на объект</span>
            <i class="fas fa-headset"></i>
          </div>
          <div class="stage-start"></div>
        </div>
      </div>
    </div>
  </section>
  <section class="done">
    <div class="container">
      <h2>Наши готовые объекты</h2>
      <?php
      include "databases.php";
      $result=$induction->query("select * from `block_finished_object` order by `id` desc limit 0,4");

      while($block=$result->fetch_array()):
      ?>
      <div class="finished-object">
        <div class="img-object" style="background: url('../img/object/<?php echo $block["photo"]; ?>') center; background-size: cover;">
        </div>
        <div class="finished-object-container">
          <div class="finished-object-block">
            <div class="text-finished-object">
              <span class="name-object"><?php echo $block["name"]; ?></span>
              <p><?php echo $block["service"]; ?></p>
            </div>
          </div>
          <div class="finished-object-block2">
            <div class="line-finished-object"></div>
            <div class="text-finished-object2">
              <span class="object-town"><?php echo $block["location"]; ?></span>
              <span class="object-map"><a style="text-decoration: none;" data-fancybox href="img\object\<?php echo $block["photo"]; ?>">Посмотреть &nbsp; <i class="far fa-image"></i></a></span>
            </div>
          </div>
        </div>
      </div>
      <?php
      endwhile;
      ?>
      <div class="a-finished-object">
        <a href="/finished-object.php">Посмотреть все объекты  &nbsp; <i class="fas fa-arrow-right"></i></a>
      </div>
    </div>
  </section>
  <section class="certificates">
    <div class="bg-certificates"></div>
    <div class="container-right">
      <h2>Наши сертификаты</h2>
      <div class="slick-block">
        <div class="slide-certificate">
          <img src="img/certificates/certificate_1.jpg" alt="">
          <div class="slide-certificate-text">
            <p>Сертификат соответствия<br><span style="font-weight: normal;">На элименты фасадные декоративные марки "Пласт-Декор" на основе минераловатных плит.</span></p>
            <a data-fancybox href="img/certificates/certificate_1.jpg">Посмотреть</a>
          </div>
        </div>
        <div class="slide-certificate">
          <img src="img/certificates/certificate_2.jpg" alt="">
          <div class="slide-certificate-text">
            <p>Сертификат соответствия<br><span style="font-weight: normal;">На архитектурно-декоративные и облицовочные элементы из стеклофибробетона.</span></p>
            <a data-fancybox href="img/certificates/certificate_2.jpg">Посмотреть</a>
          </div>
        </div>
        <div class="slide-certificate">
          <img src="img/certificates/certificate_3.jpg" alt="">
          <div class="slide-certificate-text">
            <p>Сертификат соответствия<br><span style="font-weight: normal;">На архитектурно-декоративные и облицовочные элементы из армированной минеральной ваты "Пласт-Декор".</span></p>
            <a data-fancybox href="img/certificates/certificate_3.jpg">Посмотреть</a>
          </div>
        </div>
        <div class="slide-certificate">
          <img src="img/certificates/certificate_4.jpg" alt="">
          <div class="slide-certificate-text">
            <p>Сертификат соответствия<br><span style="font-weight: normal;">На архитектурно-декоративные и облицовочные элементы из армированного пенополистирола "Пласт-Декор".</span></p>
            <a data-fancybox href="img/certificates/certificate_4.jpg">Посмотреть</a>
          </div>
        </div>
        <div class="slide-certificate">
          <img src="img/certificates/certificate_5.jpg" alt="">
          <div class="slide-certificate-text">
            <p>Сертификат соответствия<br><span style="font-weight: normal;">На защитно-декоративные покрытия для пенополистирола, торговой марки: "Пласт-Декор". Серийный выпуск.</span></p>
            <a data-fancybox href="img/certificates/certificate_5.jpg">Посмотреть</a>
          </div>
        </div>
        <div class="slide-certificate">
          <img src="img/certificates/certificate_6.jpg" alt="">
          <div class="slide-certificate-text">
            <p>Сертификат соответствия<br><span style="font-weight: normal;">На декоративное архитектурные изделия из стеклофибробетона, марки "Пласт-Декор".</span></p>
            <a data-fancybox href="img/certificates/certificate_6.jpg">Посмотреть</a>
          </div>
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
  <script src="js/slick.min.js"></script>
  <script  src="js/bootstrap.min.js"></script>
  <script src = "js/jquery.fancybox.min.js"></script>
  <script  src="js/index.js"></script>
</body>
</html>