<?php
$facility_name = $_POST["facility_name"];
$pref = $_POST["pref"];
$add = $_POST["add"];
$url = $_POST["url"];
$open_time = $_POST["open_time"];
$close_time = $_POST["close_time"];
$closed_day = $_POST["closed_day"];
$exhibition_type1 = $_POST["exhibition_type1"];
$exhibition_type2 = $_POST["exhibition_type2"];
$exhibition_type3 = $_POST["exhibition_type3"];
$exhibition_type4 = $_POST["exhibition_type4"];
$exhibition_info = $_POST["exhibition_info"];
$recommend = $_POST["recommend"];
$s= '"';
$c = '","';
$str = 
$s.$facility_name.$c.
$pref.$c.
$add.$c.
$url.$c.
$open_time.$c.
$close_time.$c.
$closed_day.$c.
$exhibition_type1.$c.
$exhibition_type2.$c.
$exhibition_type3.$c.
$exhibition_type4.$c.
$exhibition_info.$c.
$recommend.$s
;

$file = fopen("data.csv","a");
fwrite($file, $str."\n");
fclose($file);

header("Location: index.php");
exit;
?>