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
  <title>"Plast Decor" - Каталог</title>
  <meta name="keywords" content="декор фасада, стеклофибробетон, фибробетон, полимербетон, стеклопластик, гипс, архитектурный бетон, проектирование, лепной декор, лепнина, монтажные работы, маф, малые архитектурные формы, ландшафтный дизайн, проектирование, собственное производство">
  <meta name="description" content="Собственное производство фасадного декора из стеклофибробетона, минеральной ваты и других материалов.   Монтаж, проектирование.  Полный цикл работ.">
    <link rel="stylesheet" href="css/catalog.min.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css">
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
  <section class="catalog">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-4 col-lg-3 categories">
          <ul>
            <?php
            $limit_page = 5;
            $limit = 18;
            $result=$induction->query("SELECT COUNT(*) as count FROM `block_table_directory`");
            $table_count = mysqli_fetch_assoc($result)['count'];
            $category = isset($_GET['category']) ? $_GET['category']: 1;
            if (ctype_digit($category) === false) $category = 1;
            if ($category > $table_count) {
              $category = $table_count;
            } elseif ($category < 1) {
              $category = 1;
            }
            $result=$induction->query("select * from `block_table_directory`");

            while($block_table_directory=$result->fetch_array()):
            ?>
            <li><a <?php if ($block_table_directory["id"] == $category) { echo "class=\"active\""; $table_name = $block_table_directory["table_name"]; $category_name = $block_table_directory["category_name"]; $description = $block_table_directory["description"];}?> href="<?php echo "?category=", $block_table_directory["id"]; ?>"><?php echo $block_table_directory["category_name"]; ?></a></li>
            <?php
            endwhile;
            ?>
          </ul>
        </div>
        <div class="col-12 col-md-8 col-lg-9 elements">
          <h2><?php echo $category_name; ?></h2>
          <p class="description"><?php echo $description; ?></p>
          <div class="row">
            <?php
            $result=$induction->query("SELECT COUNT(*) as count FROM `$table_name`");
            $count = mysqli_fetch_assoc($result)['count'];
            $page_count = ceil($count / $limit);
            $page = isset($_GET['page']) ? $_GET['page']: 1;
            if (ctype_digit($page) === false) $page = 1;
            if ($page > $page_count) {
              $page = $page_count;
            } elseif ($page < 1) {
              $page = 1;
            }
            $offset = $limit * ($page - 1);
            $result=$induction->query("select * from `$table_name` limit $limit offset $offset");

            while($block_elements=$result->fetch_array()):
            ?>
            <div class="col-md-6 col-lg-4">
              <a data-fancybox class="element" href="/img/catalog/<?php echo $block_elements["img_3"]; ?>">
                <div class="img-element">
                  <img class="img-1" src="/img/catalog/<?php echo $block_elements["img_1"]; ?>" alt="">
                  <img class="img-2" src="/img/catalog/<?php echo $block_elements["img_2"]; ?>" alt="">
                </div>
                <div class="name-element">
                  <p><?php echo $block_elements["name"]; ?></p>
                  <p><?php echo $block_elements["status"]; ?></p>
                </div>
              </a>
            </div>
            <?php
            endwhile;
            ?>
          </div>
            <?php
              if ($page_count > 1) {
                ?>
                <div class="navigation-done">
                  <ul>
                    <li><a href="<?php if ($page > 1) { echo "?category=", $category, "&page=", $page - 1; } else { echo "?category=", $category, "&page=1"; }?>"><i class="fas fa-angle-left"></i></a></li>
                    <?php
                    if ($page_count < 6) {
                      for ($i = 1; $i <= $page_count; $i++) {
                    ?>
                    <li><a <?php if ($i == $page) {echo 'class="active" ';} echo "href=\"?category=", $category, "&page=$i\">$i";?></a></li>
                    <?php
                      }
                    } elseif ($page_count > 5 && $page < 4) {
                      for ($i = 1; $i <= 5; $i++) {
                    ?>
                    <li><a <?php if ($i == $page) {echo 'class="active" ';} echo "href=\"?category=", $category, "&page=$i\">$i";?></a></li>
                    <?php
                      }
                    } elseif ($page_count > 5 && $page < ($page_count - 2) && $page > 3) {
                      for ($i = ($page - 2); $i <= ($page + 2); $i++) {
                    ?>
                    <li><a <?php if ($i == $page) {echo 'class="active" ';} echo "href=\"?category=", $category, "&page=$i\">$i";?></a></li>
                    <?php
                      }
                    } else {
                      for ($i = ($page_count - 4); $i <= ($page_count); $i++) {
                    ?>
                    <li><a <?php if ($i == $page) {echo 'class="active" ';} echo "href=\"?category=", $category, "&page=$i\">$i";?></a></li>
                    <?php
                      }
                    }
                    ?>
                    <li><a href="<?php if ($page >= $page_count) { echo "?category=", $category, "&page=", $page_count; } else { echo "?category=", $category, "&page=", $page + 1; }?>"><i class="fas fa-angle-right"></i></a></li>
                  </ul>
                </div>
                <?php
              }
            ?>
        </div>
      </div>
    </div>
  </section>
  <section class="constructor">
    <div class="container">
      <h2>Онлайн примерка декоративных элементов</h2>
      <div class="row">
        <div class="col-lg-4">
          <div class="switch-constructor">
            <p>Отделка стен</p>
            <div class="switch-block">
              <div class="bg-button buttons-2"></div>
              <div class="switch-button buttons-2" data-position="1" data-img=".constructor-img-2">
                кирпич
              </div>
              <div class="switch-button buttons-2" data-position="2" data-img=".constructor-img-3">
                фактура
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="switch-constructor">
            <p>Рустовый камень</p>
            <div class="switch-block">
              <div class="bg-button buttons-4"></div>
              <div class="switch-button buttons-4" data-position="1" data-img=".constructor-img-1">
                <i class="fas fa-times"></i>
              </div>
              <div class="switch-button buttons-4" data-position="2" data-img=".constructor-img-11">
                РК-01 30х60
              </div>
              <div class="switch-button buttons-4" data-position="3" data-img=".constructor-img-12">
                РК-01 20х50
              </div>
              <div class="switch-button buttons-4" data-position="4" data-img=".constructor-img-13">
                РК-01 20х50 зуб
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="switch-constructor">
            <p>Готовые решения окон</p>
            <div class="switch-block">
              <div class="bg-button buttons-5"></div>
              <div class="switch-button buttons-5" data-position="1" data-img=".constructor-img-1">
                <i class="fas fa-times"></i>
              </div>
              <div class="switch-button buttons-5" data-position="2" data-img=".constructor-img-4">
                ОК-13
              </div>
              <div class="switch-button buttons-5" data-position="3" data-img=".constructor-img-5">
                ОК-14
              </div>
              <div class="switch-button buttons-5" data-position="4" data-img=".constructor-img-6">
                ОК-15
              </div>
              <div class="switch-button buttons-5" data-position="5" data-img=".constructor-img-7">
                ОК-16
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="switch-constructor">
            <p>Готовые решения дверей</p>
            <div class="switch-block">
              <div class="bg-button buttons-4"></div>
              <div class="switch-button buttons-4" data-position="1" data-img=".constructor-img-1">
                <i class="fas fa-times"></i>
              </div>
              <div class="switch-button buttons-4" data-position="2" data-img=".constructor-img-8">
                ДВ-01
              </div>
              <div class="switch-button buttons-4" data-position="3" data-img=".constructor-img-9">
                ДВ-02
              </div>
              <div class="switch-button buttons-4" data-position="4" data-img=".constructor-img-10">
                ДВ-03
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="switch-constructor">
            <p>Балюстрада</p>
            <div class="switch-block">
              <div class="bg-button buttons-3"></div>
              <div class="switch-button buttons-3" data-position="1" data-img=".constructor-img-1">
                <i class="fas fa-times"></i>
              </div>
              <div class="switch-button buttons-3" data-position="2" data-img=".constructor-img-14">
                БЛ-01
              </div>
              <div class="switch-button buttons-3" data-position="3" data-img=".constructor-img-15">
                БЛ-02
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="switch-constructor">
            <p>Колонны</p>
            <div class="switch-block">
              <div class="bg-button buttons-3"></div>
              <div class="switch-button buttons-3" data-position="1" data-img=".constructor-img-1">
                <i class="fas fa-times"></i>
              </div>
              <div class="switch-button buttons-3" data-position="2" data-img=".constructor-img-16">
                КЛ-01
              </div>
              <div class="switch-button buttons-3" data-position="3" data-img=".constructor-img-17">
                КЛ-02
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="switch-constructor">
            <p>Профиль карниза</p>
            <div class="switch-block">
              <div class="bg-button buttons-3"></div>
              <div class="switch-button buttons-3" data-position="1" data-img=".constructor-img-1">
                <i class="fas fa-times"></i>
              </div>
              <div class="switch-button buttons-3" data-position="2" data-img=".constructor-img-18">
                ПК-41
              </div>
              <div class="switch-button buttons-3" data-position="3" data-img=".constructor-img-19">
                ПК-31
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="switch-constructor">
            <p>Профиль подоконника</p>
            <div class="switch-block">
              <div class="bg-button buttons-3"></div>
              <div class="switch-button buttons-3" data-position="1" data-img=".constructor-img-1">
                <i class="fas fa-times"></i>
              </div>
              <div class="switch-button buttons-3" data-position="2" data-img=".constructor-img-20">
                ПП-23
              </div>
              <div class="switch-button buttons-3" data-position="3" data-img=".constructor-img-21">
                ПП-13
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="switch-constructor">
            <p>Профиль разделительный</p>
            <div class="switch-block">
              <div class="bg-button buttons-3"></div>
              <div class="switch-button buttons-3" data-position="1" data-img=".constructor-img-1">
                <i class="fas fa-times"></i>
              </div>
              <div class="switch-button buttons-3" data-position="2" data-img=".constructor-img-22">
                ПР-15
              </div>
              <div class="switch-button buttons-3" data-position="3" data-img=".constructor-img-23">
                ПР-43
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="img-constructor">
        <img class="constructor-img-1" src="\img\constructor\constructor-1.png" alt="">
        <img class="constructor-img-2" style="display: inline; position: static;" src="\img\constructor\constructor-2.png" alt="">
        <img class="constructor-img-3" style="position: static;" src="\img\constructor\constructor-3.png" alt="">
        <img class="constructor-img-4" src="\img\constructor\constructor-4.png" alt="">
        <img class="constructor-img-5" src="\img\constructor\constructor-5.png" alt="">
        <img class="constructor-img-6" src="\img\constructor\constructor-6.png" alt="">
        <img class="constructor-img-7" src="\img\constructor\constructor-7.png" alt="">
        <img class="constructor-img-8" src="\img\constructor\constructor-8.png" alt="">
        <img class="constructor-img-9" src="\img\constructor\constructor-9.png" alt="">
        <img class="constructor-img-10" src="\img\constructor\constructor-10.png" alt="">
        <img class="constructor-img-11" src="\img\constructor\constructor-11.png" alt="">
        <img class="constructor-img-12" src="\img\constructor\constructor-12.png" alt="">
        <img class="constructor-img-13" src="\img\constructor\constructor-13.png" alt="">
        <img style="z-index: 3;" class="constructor-img-14" src="\img\constructor\constructor-14.png" alt="">
        <img style="z-index: 3;" class="constructor-img-15" src="\img\constructor\constructor-15.png" alt="">
        <img style="z-index: 2;" class="constructor-img-16" src="\img\constructor\constructor-16.png" alt="">
        <img style="z-index: 2;" class="constructor-img-17" src="\img\constructor\constructor-17.png" alt="">
        <img class="constructor-img-18" src="\img\constructor\constructor-18.png" alt="">
        <img class="constructor-img-19" src="\img\constructor\constructor-19.png" alt="">
        <img class="constructor-img-20" src="\img\constructor\constructor-20.png" alt="">
        <img class="constructor-img-21" src="\img\constructor\constructor-21.png" alt="">
        <img class="constructor-img-22" src="\img\constructor\constructor-22.png" alt="">
        <img class="constructor-img-23" src="\img\constructor\constructor-23.png" alt="">
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
  <script  src="js/catalog.js"></script>
  <script src = "js/jquery.fancybox.min.js"></script>
</body>
</html>