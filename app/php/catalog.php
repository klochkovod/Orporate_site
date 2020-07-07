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

  //= template/modal-search.php
  //= template/modal.php
  //= template/header.php
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
  //= template/footer.php
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script  src="js/bootstrap.min.js"></script>
  <script  src="js/catalog.js"></script>
  <script src = "js/jquery.fancybox.min.js"></script>
</body>
</html>
