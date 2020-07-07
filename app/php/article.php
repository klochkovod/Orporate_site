<?php
include "databases.php";
?>
<?php
$result=$induction->query("SELECT COUNT(*) as count FROM `block_articles`");
$count = mysqli_fetch_assoc($result)['count'];
$articleid = isset($_GET['articleid']) ? $_GET['articleid']: 1;
if (ctype_digit($articleid) === false) $articleid = $count;
if ($articleid > $count) {
  $articleid = $count;
} elseif ($articleid < 1) {
  $articleid = 1;
}
$result=$induction->query("select `id`, `article`, `name` from `block_articles` where id=$articleid");

$block=$result->fetch_array();
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
  <title><?php echo $block["name"]; ?></title>
    <link rel="stylesheet" href="css/news.min.css">
    <link rel="stylesheet" href="fonts/stylesheet.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
</head>
<body>

  //= template/modal.php
  //= template/modal-search.php
  //= template/header.php
  <section class="all-news">
    <div class="container">
      <h2><?php echo $block["name"]; ?></h2>
      <?php echo $block["article"]; ?>
    </div>
  </section>
  //= template/footer.php
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script  src="js/bootstrap.min.js"></script>
  <script  src="js/news.js"></script>
</body>
</html>
