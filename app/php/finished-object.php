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
  <title>"Plast Decor" - Готовые объекты</title>
  <meta name="keywords" content="декор фасада, стеклофибробетон, фибробетон, полимербетон, стеклопластик, гипс, архитектурный бетон, проектирование, лепной декор, лепнина, монтажные работы, маф, малые архитектурные формы, ландшафтный дизайн, проектирование, собственное производство">
  <meta name="description" content="Наши готовые объекты с монтажными работами фасадного декора из стеклофибробетона, минеральной ваты и других материалов.">
    <link rel="stylesheet" href="css/finished-object.min.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="fonts/stylesheet.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
</head>
<body>

  //= template/modal-search.php
  //= template/modal.php
  //= template/header.php
  <section class="finished-object">
    <div class="container">
      <h2>Наши готовые объекты</h2>
      <?php
      $limit_page = 5;
      $limit = 10;
      $result=$induction->query("SELECT COUNT(*) as count FROM `block_finished_object`");
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
      $result=$induction->query("select * from `block_finished_object` order by `id` desc limit $limit offset $offset");

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
      <div class="navigation-done">
        <ul>
          <li><a href="<?php if ($page > 1) { echo "?page=", $page - 1; } else { echo "?page=1"; }?>"><i class="fas fa-angle-left"></i></a></li>
          <?php
          if ($page_count < 6) {
            for ($i = 1; $i <= $page_count; $i++) {
          ?>
          <li><a <?php if ($i == $page) {echo 'class="active" ';} echo "href=\"?page=$i\">$i"?></a></li>
          <?php
            }
          } elseif ($page_count > 5 && $page < 4) {
            for ($i = 1; $i <= 5; $i++) {
          ?>
          <li><a <?php if ($i == $page) {echo 'class="active" ';} echo "href=\"?page=$i\">$i"?></a></li>
          <?php
            }
          } elseif ($page_count > 5 && $page < ($page_count - 2) && $page > 3) {
            for ($i = ($page - 2); $i <= ($page + 2); $i++) {
          ?>
          <li><a <?php if ($i == $page) {echo 'class="active" ';} echo "href=\"?page=$i\">$i"?></a></li>
          <?php
            }
          } else {
            for ($i = ($page_count - 4); $i <= ($page_count); $i++) {
          ?>
          <li><a <?php if ($i == $page) {echo 'class="active" ';} echo "href=\"?page=$i\">$i"?></a></li>
          <?php
            }
          }
          ?>
          <li><a href="<?php if ($page >= $page_count) { echo "?page=", $page_count; } else { echo "?page=", $page + 1; }?>"><i class="fas fa-angle-right"></i></a></li>
        </ul>
      </div>
    </div>
  </section>
  //= template/footer.php
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script  src="js/bootstrap.min.js"></script>
  <script  src="js/finished-object.js"></script>
  <script src = "js/jquery.fancybox.min.js"></script>
</body>
</html>
