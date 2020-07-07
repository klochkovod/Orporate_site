<?
$params = array (
        'host' => '',
        'dbname' => '',
        'user' => '',
        'password' => '',
);
$dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
$db = new PDO($dsn, $params['user'], $params['password']);
$db->exec("set names utf8");

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
  <title>"Plast Decor" - Результаты поиска</title>
    <link rel="stylesheet" href="css/search.min.css">
    <link rel="stylesheet" href="fonts/stylesheet.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
</head>
<body>

  //= template/modal-search.php
  //= template/modal.php
  //= template/header.php
  <section class="search-result">
    <div class="container">
      <h2>Результаты поиска</h2>
      <?php
      $error = true;
      $str = $_POST['string'];
      $mass = explode(' ', $str);
      $count = count($mass);
      $sql = "SELECT id, content, name FROM block_news WHERE (content LIKE '%".$mass[0]."%' OR name LIKE '%".$mass[0]."%')";
      $result = $db->query($sql);
      $result->setFetchMode(PDO::FETCH_ASSOC);
      $id_mass = array();
      $i=1;
      while ($row=$result->fetch()) {
        $id_mass[$i] = $row['id'];
      $i++;
      }

      $id_count = count($id_mass);

      for ($i=1; $i<=$count-1; $i++) {
          for ($j=1; $j<=$id_count; $j++) {
              $sql = "SELECT id, content, name FROM block_news WHERE id=".$id_mass[$j]." AND (content LIKE '%".$mass[$i]."%' OR name LIKE '%".$mass[$i]."%')";
              $result = $db->query($sql);
              $result->setFetchMode(PDO::FETCH_ASSOC);
              $result->execute();
              $id_mass2 = array();
              $row=$result->fetch();
              $temp = $row['id'];
              if($temp!=$id_mass[$j]) {
                  $id_mass[$j] = -1;
              }
          }
      }

      $l=1;
      for($i=1; $i<$id_count+1; $i++) {
          if ($id_mass[$i] == -1) continue;
          else {
              $result=$induction->query("select `name` from `block_news` WHERE id=".$id_mass[$i]."");
              $block=$result->fetch_array();
              echo "<a href='/news-article.php?newsid=", $id_mass[$i], "'>", "<p style='font-weight: bold;'>Новость</p>", $block["name"], "</a>";
              $error = false;
              $l++;
          }
      }

      $sql = "SELECT id, article, name FROM block_articles WHERE (article LIKE '%".$mass[0]."%' OR name LIKE '%".$mass[0]."%')";
      $result = $db->query($sql);
      $result->setFetchMode(PDO::FETCH_ASSOC);
      $id_mass = array();
      $i=1;
      while ($row=$result->fetch()) {
        $id_mass[$i] = $row['id'];
      $i++;
      }

      $id_count = count($id_mass);

      for ($i=1; $i<=$count-1; $i++) {
          for ($j=1; $j<=$id_count; $j++) {
              $sql = "SELECT id, article, name FROM block_articles WHERE id=".$id_mass[$j]." AND (article LIKE '%".$mass[$i]."%' OR name LIKE '%".$mass[$i]."%')";
              $result = $db->query($sql);
              $result->setFetchMode(PDO::FETCH_ASSOC);
              $result->execute();
              $id_mass2 = array();
              $row=$result->fetch();
              $temp = $row['id'];
              if($temp!=$id_mass[$j]) {
                  $id_mass[$j] = -1;
              }
          }
      }

      $l=1;
      for($i=1; $i<$id_count+1; $i++) {
          if ($id_mass[$i] == -1) continue;
          else {
              $result=$induction->query("select `name` from `block_articles` WHERE id=".$id_mass[$i]."");
              $block=$result->fetch_array();
              echo "<a href='/article.php?articleid=", $id_mass[$i], "'>", "<p style='font-weight: bold;'>Полезная статья</p>", $block["name"], "</a>";
              $error = false;
              $l++;
          }
      }

      $sql = "SELECT id, name FROM balustrade WHERE name LIKE '%".$mass[0]."%'";
      $result = $db->query($sql);
      $result->setFetchMode(PDO::FETCH_ASSOC);
      $id_mass = array();
      $i=1;
      while ($row=$result->fetch()) {
        $id_mass[$i] = $row['id'];
      $i++;
      }

      $id_count = count($id_mass);

      for ($i=1; $i<=$count-1; $i++) {
          for ($j=1; $j<=$id_count; $j++) {
              $sql = "SELECT id, name FROM balustrade WHERE id=".$id_mass[$j]." AND name LIKE '%".$mass[$i]."%'";
              $result = $db->query($sql);
              $result->setFetchMode(PDO::FETCH_ASSOC);
              $result->execute();
              $id_mass2 = array();
              $row=$result->fetch();
              $temp = $row['id'];
              if($temp!=$id_mass[$j]) {
                  $id_mass[$j] = -1;
              }
          }
      }

      $l=1;
      for($i=1; $i<$id_count+1; $i++) {
          if ($id_mass[$i] == -1) continue;
          else {
              $result=$induction->query("select `name`, `img_3` from `balustrade` WHERE id=".$id_mass[$i]."");
              $block=$result->fetch_array();
              echo "<a data-fancybox href='/img/catalog/", $block["img_3"], "'>", "<p style='font-weight: bold;'>Балюстрада</p>", $block["name"], "</a>";
              $error = false;
              $l++;
          }
      }

      $sql = "SELECT id, name FROM bracket WHERE name LIKE '%".$mass[0]."%'";
      $result = $db->query($sql);
      $result->setFetchMode(PDO::FETCH_ASSOC);
      $id_mass = array();
      $i=1;
      while ($row=$result->fetch()) {
        $id_mass[$i] = $row['id'];
      $i++;
      }

      $id_count = count($id_mass);

      for ($i=1; $i<=$count-1; $i++) {
          for ($j=1; $j<=$id_count; $j++) {
              $sql = "SELECT id, name FROM bracket WHERE id=".$id_mass[$j]." AND name LIKE '%".$mass[$i]."%'";
              $result = $db->query($sql);
              $result->setFetchMode(PDO::FETCH_ASSOC);
              $result->execute();
              $id_mass2 = array();
              $row=$result->fetch();
              $temp = $row['id'];
              if($temp!=$id_mass[$j]) {
                  $id_mass[$j] = -1;
              }
          }
      }

      $l=1;
      for($i=1; $i<$id_count+1; $i++) {
          if ($id_mass[$i] == -1) continue;
          else {
              $result=$induction->query("select `name`, `img_3` from `bracket` WHERE id=".$id_mass[$i]."");
              $block=$result->fetch_array();
              echo "<a data-fancybox href='/img/catalog/", $block["img_3"], "'>", "<p style='font-weight: bold;'>Кронштейн</p>", $block["name"], "</a>";
              $error = false;
              $l++;
          }
      }

      $sql = "SELECT id, name FROM capital WHERE name LIKE '%".$mass[0]."%'";
      $result = $db->query($sql);
      $result->setFetchMode(PDO::FETCH_ASSOC);
      $id_mass = array();
      $i=1;
      while ($row=$result->fetch()) {
        $id_mass[$i] = $row['id'];
      $i++;
      }

      $id_count = count($id_mass);

      for ($i=1; $i<=$count-1; $i++) {
          for ($j=1; $j<=$id_count; $j++) {
              $sql = "SELECT id, name FROM capital WHERE id=".$id_mass[$j]." AND name LIKE '%".$mass[$i]."%'";
              $result = $db->query($sql);
              $result->setFetchMode(PDO::FETCH_ASSOC);
              $result->execute();
              $id_mass2 = array();
              $row=$result->fetch();
              $temp = $row['id'];
              if($temp!=$id_mass[$j]) {
                  $id_mass[$j] = -1;
              }
          }
      }

      $l=1;
      for($i=1; $i<$id_count+1; $i++) {
          if ($id_mass[$i] == -1) continue;
          else {
              $result=$induction->query("select `name`, `img_3` from `capital` WHERE id=".$id_mass[$i]."");
              $block=$result->fetch_array();
              echo "<a data-fancybox href='/img/catalog/", $block["img_3"], "'>", "<p style='font-weight: bold;'>Капитель</p>", $block["name"], "</a>";
              $error = false;
              $l++;
          }
      }

      $sql = "SELECT id, name FROM castle_stone WHERE name LIKE '%".$mass[0]."%'";
      $result = $db->query($sql);
      $result->setFetchMode(PDO::FETCH_ASSOC);
      $id_mass = array();
      $i=1;
      while ($row=$result->fetch()) {
        $id_mass[$i] = $row['id'];
      $i++;
      }

      $id_count = count($id_mass);

      for ($i=1; $i<=$count-1; $i++) {
          for ($j=1; $j<=$id_count; $j++) {
              $sql = "SELECT id, name FROM castle_stone WHERE id=".$id_mass[$j]." AND name LIKE '%".$mass[$i]."%'";
              $result = $db->query($sql);
              $result->setFetchMode(PDO::FETCH_ASSOC);
              $result->execute();
              $id_mass2 = array();
              $row=$result->fetch();
              $temp = $row['id'];
              if($temp!=$id_mass[$j]) {
                  $id_mass[$j] = -1;
              }
          }
      }

      $l=1;
      for($i=1; $i<$id_count+1; $i++) {
          if ($id_mass[$i] == -1) continue;
          else {
              $result=$induction->query("select `name`, `img_3` from `castle_stone` WHERE id=".$id_mass[$i]."");
              $block=$result->fetch_array();
              echo "<a data-fancybox href='/img/catalog/", $block["img_3"], "'>", "<p style='font-weight: bold;'>Замковый камень</p>", $block["name"], "</a>";
              $error = false;
              $l++;
          }
      }

      $sql = "SELECT id, name FROM columns WHERE name LIKE '%".$mass[0]."%'";
      $result = $db->query($sql);
      $result->setFetchMode(PDO::FETCH_ASSOC);
      $id_mass = array();
      $i=1;
      while ($row=$result->fetch()) {
        $id_mass[$i] = $row['id'];
      $i++;
      }

      $id_count = count($id_mass);

      for ($i=1; $i<=$count-1; $i++) {
          for ($j=1; $j<=$id_count; $j++) {
              $sql = "SELECT id, name FROM columns WHERE id=".$id_mass[$j]." AND name LIKE '%".$mass[$i]."%'";
              $result = $db->query($sql);
              $result->setFetchMode(PDO::FETCH_ASSOC);
              $result->execute();
              $id_mass2 = array();
              $row=$result->fetch();
              $temp = $row['id'];
              if($temp!=$id_mass[$j]) {
                  $id_mass[$j] = -1;
              }
          }
      }

      $l=1;
      for($i=1; $i<$id_count+1; $i++) {
          if ($id_mass[$i] == -1) continue;
          else {
              $result=$induction->query("select `name`, `img_3` from `columns` WHERE id=".$id_mass[$i]."");
              $block=$result->fetch_array();
              echo "<a data-fancybox href='/img/catalog/", $block["img_3"], "'>", "<p style='font-weight: bold;'>Колонна</p>", $block["name"], "</a>";
              $error = false;
              $l++;
          }
      }

      $sql = "SELECT id, name FROM pilaster_base WHERE name LIKE '%".$mass[0]."%'";
      $result = $db->query($sql);
      $result->setFetchMode(PDO::FETCH_ASSOC);
      $id_mass = array();
      $i=1;
      while ($row=$result->fetch()) {
        $id_mass[$i] = $row['id'];
      $i++;
      }

      $id_count = count($id_mass);

      for ($i=1; $i<=$count-1; $i++) {
          for ($j=1; $j<=$id_count; $j++) {
              $sql = "SELECT id, name FROM pilaster_base WHERE id=".$id_mass[$j]." AND name LIKE '%".$mass[$i]."%'";
              $result = $db->query($sql);
              $result->setFetchMode(PDO::FETCH_ASSOC);
              $result->execute();
              $id_mass2 = array();
              $row=$result->fetch();
              $temp = $row['id'];
              if($temp!=$id_mass[$j]) {
                  $id_mass[$j] = -1;
              }
          }
      }

      $l=1;
      for($i=1; $i<$id_count+1; $i++) {
          if ($id_mass[$i] == -1) continue;
          else {
              $result=$induction->query("select `name`, `img_3` from `pilaster_base` WHERE id=".$id_mass[$i]."");
              $block=$result->fetch_array();
              echo "<a data-fancybox href='/img/catalog/", $block["img_3"], "'>", "<p style='font-weight: bold;'>База пилястры</p>", $block["name"], "</a>";
              $error = false;
              $l++;
          }
      }

      if ($error == true) {
        echo "<span>По вашему запросу ничего не найдено.</span>";
      }
      ?>
    </div>
  </section>
  //= template/footer.php
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script  src="js/bootstrap.min.js"></script>
  <script  src="js/search.js"></script>
  <script src = "js/jquery.fancybox.min.js"></script>
</body>
</html>
