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
