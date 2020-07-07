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
      <h2>Производство лодок из стеклопластика<br>PLAST-WATER</h2>
      <div class="row row-service">
        <div class="col-12 text-service-row">
          <p class="end-text-service2">Мы расширяем свои горизонты! Компания "Пласт-Декор" запустила новый проект под названием PLAST-WATER по производству лодок из стеклопластика.</p>
        </div>
      </div>
      <div class="row row-service">
        <div class="col-12 col-lg-6 text-service-row">
          <p class="h-text-service">Лодка из стеклопластика Антарес</p>
          <p>Первая лодка под названием Антарес сейчас находится в производстве.</p>
          <p>На фото: лодка из стеклопластика Антарес</p>
        </div>
        <div class="col-12 col-lg-6 img-service-row">
          <img src="img/services/services_img_37.jpg" alt="">
        </div>
      </div>
      <div class="row row-service">
        <div class="col-12 text-service-row">
          <p class="h-text-service end-text-service">Краткий список основных отличий проекта Антарес от своих конкурентов:</p>
        </div>
        <div class="col-12 text-service-row">
          <ul class="end-text-service">
            <li>глубокое V, совместно с высоким бортом обеспечивают непревзойденную мореходность для этого размерного класса;</li>
            <li>наличие короткой гидролыжи обеспечивают мягкий ход при волнении, а наличие стационарныйх транцевых плит компенсируют эффект дельфинирования и быстрый выход на режим глиссирования даже с двигателем минимальной мощности;</li>
            <li>высокий рецесс защищает кокпит от кормовой волны; широкий задний диван позволяет удобное размещение водителя и двух пассажиров;</li>
            <li>применение гелькоута Антиосмос премиум-класса и конструкционных тканей и эпоксидных смол обеспечивают долговечность корпуса и отсутствие эффекта паутина при небольших ударах;</li>
            <li>установка деревянного настила протопчин и задних ступеней как на дорогих катерах определяют не только внешний вид, но и удобство уборки салона и отсутствие сильного нагрева в солнечную погоду;</li>
            <li>умеренная ценовая политика и широкий ассортимент отделочных материалов позволяют оформить корпус как бюджетный и премиум класс;</li>
            <li>возможность установки двигателя мощностью от 30 л.с. с короткой ногой позволяет сэкономить на покупке П.М. или установить уже имеющийся.</li>
          </ul>
        </div>
        <div class="col-12 text-service-row">
          <p>Основной задачей была разработка изделия с небольшим весом, под двигатель умеренной «бюджетной» мощности, высокой мореходностью, практичной и универсальной компоновкой. В качестве прототипа был взят проект известного спортсмена-конструктора Ю, Зимина, зарекомендовавший себя проверенностью обводов. Единственным изменением донной части было лонгирование корпуса стационарными транцевыми плитами, ставшими частью корпуса. Это позволило изменить положение продольного центра тяжести, что облегчило быстрый выход на глиссер при малой мощности ПМ, уменьшить «дельфинирование» присущего этому размерному классу, обеспечило более удобный доступ к ПМ «на воде», а так же простой и удобный сход в воду для купания и для рыбалки. Высота рецесса и подмоторной ниши обеспечивает незаливаемость кокпита при резкой остановке и сильном волнении. Верхняя часть задних ступенек и протопчины кокпита покрыты имитацией тикового настила, что в свою очередь обеспечивает отсутствие сильного нагрева ступеней в солнечную погоду, и отсутствием скольжения для безопасности.</p>
          <p>Размещение в стационарных транцевых плитах-ступеньках дополнительного объема запаса плавучести резко сместило аварийный центр тяжести при полном затоплении кокпита в сторону горизонтальной плоскости, что обеспечило не только полную непотопляемость, но отсутствие «опрокидывающего момента» со стороны ДВС. Так же на этих ступенях предусмотрена установка складной лестницы -сходни для удобства купания. Для данной донной части было разработано несколько компоновочных решений палубы, которые позволили удовлетворить практически все потребности водомоторников этого размерного класса:</p>
          <ul class="end-text-service2">
            <li>ANTARES Sport</li>
            <li>ANTARES Classic</li>
            <li>ANTARES Patrol</li>
          </ul>
        </div>
      </div>
      <div class="row row-service">
        <div class="col-12 text-service-row">
          <p class="h-text-service end-text-service">В описании мы рассматриваем первый вариант, хотя донная часть одинакова для всех вариантов.</p>
        </div>
        <div class="col-12 col-lg-6 text-service-row no-flex">
          <ul class="end-text-service2">
            <li>Длина наибольшая: 4520 мм</li>
            <li>Ширина наибольшая: 2060 мм</li>
            <li>Высота на миделе: 1010 мм</li>
            <li>Угол килеватости на транце: 28 гр.</li>
          </ul>
        </div>
        <div class="col-12 col-lg-6 text-service-row no-flex">
          <ul class="end-text-service">
            <li>Вес снаряженный, без ДВС до 200 кг.</li>
            <li>Допустимая мощность ДВС: до 50л.с.</li>
            <li>Пасажировместимость: 5 чел.</li>
            <li>Высота транца: 580, 360 мм.</li>
          </ul>
        </div>
        <div class="col-12  text-service-row">
          <p>Стандартная комплектация: Рулевое управление мощностью до 50л.с., топливный бак с датчиком и прибором – указателем уровня 45л, бортовые и топовый огни -белый пластик, Носовые и кормовые рейленги -дюраль, кормовая помпа 12 v, покрытие кормовых ступенеки протопчин имитацией тикового покрытия, шпигаты, топливная горловина, отдушка бака-пластик, мягкие съемные подушки салона, ходовой тент (каркас дюраль), блок предохранителей, выключатель массы + проводка АКБ, запираемые носовой и коровой рундуки(фурнитура –нерж.), утки швартовые- 5шт.- пластик.</p>
          <p>Несколько слов о процессе изготовления корпуса. В процессе проектирования был основной приоритет-вес корпуса. Мы применили технологии использующиеся при изготовлении малой авиации. Во-первых мы отказались от неориентированного стекломатериала- стекломатов в качестве набора основной толщины, а также полиэфирного связующего, и фанерных - закладных. В данном изделии применяются только конструкционные стеклоткани, а немецкие эпоксидные компаунды, совместно с вакуумной формовкой обеспечивают непревзойденную прочность обшивки, ее качество и долговечность при минимальном весе, исключая так называемый человеческий фактор брака при изготовлении. Термическая стабилизация «корок» корпуса производится в матрицах , а не вне их. Продольные кильсоны во всю длину корпуса подкрепленные поперечным силовым набором обеспечивают равномерное распределение нагрузки от ДВС по корпусу, а частичное заполнение пустот между корками корпуса ППУ еще и хорошую шумоизоляцию. И в заключении хотелось бы отметить, что конструкция корпуса позволяет установку стационарной ДВС, как с поворотно-откидной колонкой, так и водометом, а так же изготовление донной части из АМГ.</p>
          <p class="end-text-service2">Помимо проекта Антарес подлежащего обязательной регистрации в ГИМС, и обязательным наличием прав на управление маломерным судном, наша фирма разрабатывает линейку водной техники не подлежащей регистрации в ГИМСе и не нуждающейся в водных правах. Это два проекта Амиго и Атаман. Оба проекта разрабатывались как под установку электродвигателей, так и под ДВС.</p>
        </div>
      </div>
      <div class="row row-service">
        <div class="col-12 col-lg-6 text-service-row">
          <p class="h-text-service">Лодка из стеклопластика Амиго</p>
          <p>Лодка из стеклопластика Амиго уже была спущена на воду и опробована.</p>
          <p><a style="text-decoration: none" href="#">Смотреть видео испытаний лодки Амиго.</a></p>
          <p>На фото: лодка из стеклопластика Амиго</p>
        </div>
        <div class="col-12 col-lg-6 img-service-row">
          <img class="end-img-service" src="img/services/services_img_38.jpg" alt="">
        </div>
        <div class="col-12 text-service-row">
          <p>Проект Амиго это небольшой картоп вместимостью 2-3 чел с удобным диваном (аналогов среди российских производителей нет) Предназначен для закрытых водоемов. Установка только дистанционного управления двигателем: электромотора -джойстик, у ДВС -рулевой колонки. Хорошие обводы обеспечивают отличную продольную устойчивость (для удобства посадки и для рыбной ловли) высокий борт обеспечивает комфорт даже при небольшом волнении. Длина 2.8 м (без транцевах плит) позволяет удобную транспортировку до водоема. Возможность использования как водный аттракцион на турбазах и парках. Возможность установки ДВС мощьностью до 9.8 л.с.</p>
        </div>
      </div>
      <div class="row row-service">
        <div class="col-12 text-service-row">
          <p class="h-text-service">Лодка из стеклопластика Атаман</p>
          <p>Проект Атаман - это мореходный катамаран с высокой грузоподъемностью. Длина (без транцевых плит) - 3.6 м, с плитами (вариант с ДВС) - 4.2 м. Возможность установки 2-х электродвигателей мощьностью по 44 lbs, так и ДВС мощностью до 9.9 л.с (без регистрации), и до 30 л.с (с регистрацией в ГИМСе). Полностью разборная конструкция незаймет много места при зимнем хранении в гараже - стопка всего 50 см шириной. Ширина катамарана 2.0 м при использовании в водоизмещающих режимах, и 1.75 м. Для использования под ДВС в глиссирующем и переходном режиме.</p>
          <p class="end-text-service2">Следите за  новостями и вы будете в курсе наших последних новинок!</p>
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