<?php

$par1_ip = "";
$par2_name = "";
$par3_p = "";
$par4_db = "";

$induction = mysqli_connect($par1_ip, $par2_name, $par3_p, $par4_db);
mysqli_query($induction, "SET NAMES utf8");

if ($induction == false)
{
  echo "Ошибка подключения";
}

?>
