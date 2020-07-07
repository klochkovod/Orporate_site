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
  <title>«Пласт Декор» - Декор фасада</title>
  <meta name="keywords" content="декор фасада, колонны, пилястры, кронштейны, обрамление окон, замковый камень, подоконники, стеклофибробетон, фибробетон, сфб">
  <meta name="description" content="Лепнина из стеклофибробетона позволяет воспроизводить любой архитектурный стиль.">
    <link rel="stylesheet" href="css/gallery-album.min.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="fonts/stylesheet.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
</head>
<body>

  //= template/modal-search.php
  //= template/modal.php
  //= template/header.php
  <section class="all-gallery">
    <div class="container">
      <h2>Фасады</h2>
      <div class="row">
        <?php
        $limit_page = 5;
        $limit = 12;
        $result=$induction->query("SELECT COUNT(*) as count FROM `gallery-facades`");
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
        $result=$induction->query("select * from `gallery-facades` order by `id` desc limit $limit offset $offset");

        while($block=$result->fetch_array()):
            echo $block["album"];
        endwhile;
        ?>
      </div>
        <?php
        if ($page_count > 1) {
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
          <?php
        }
        ?>
    </div>
  </section>
  //= template/footer.php
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script  src="js/bootstrap.min.js"></script>
  <script  src="js/gallery-album.js"></script>
  <script src = "js/jquery.fancybox.min.js"></script>
</body>
</html>
