<?php
include "databases.php";
?>
<?php
$result=$induction->query("SELECT COUNT(*) as count FROM `block_news`");
$count = mysqli_fetch_assoc($result)['count'];
$newsid = isset($_GET['newsid']) ? $_GET['newsid']: 1;
if (ctype_digit($newsid) === false) $newsid = $count;
if ($newsid > $count) {
  $newsid = $count;
} elseif ($newsid < 1) {
  $newsid = 1;
}
$result=$induction->query("select * from `block_news` where id=$newsid");

$block_news=$result->fetch_array();
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
  <title><?php echo $block_news["name"]; ?></title>
    <link rel="stylesheet" href="css/news.min.css">
    <link rel="stylesheet" href="fonts/stylesheet.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
</head>
<body>

  //= template/modal-search.php
  //= template/modal.php
  //= template/header.php
  <section class="all-news">
    <div class="container">
      <h2>Новость за <?php echo $block_news["day_month"], " ", $block_news["year"]; ?></h2>
      <p style="font-weight: bold;"><?php echo $block_news["name"]; ?></p>
      <?php echo $block_news["content"]; ?>
    </div>
  </section>
  //= template/footer.php
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script  src="js/bootstrap.min.js"></script>
  <script  src="js/news.js"></script>
</body>
</html>
