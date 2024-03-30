<?php
$facility_name = $_POST["facility_name"];
$pref = $_POST["pref"];
$add = $_POST["add"];
$url = $_POST["url"];
$open_time = $_POST["open_time"];
$close_time = $_POST["close_time"];
$closed_day = $_POST["closed_day"];

$exhibition_info = $_POST["exhibition_info"];


$c = ",";
$str = $facility_name.$c.
$pref.$c.
$add.$c.
$url.$c.
$open_time.$c.
$close_time.$c.
$closed_day.$c.
$exhibition_info
;

$file = fopen("data.csv","a");
fwrite($file, $str."\n");
fclose($file);

header("Location: index.php");
exit;
?>