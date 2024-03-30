<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>常設展示リスト</title>
    <link rel="stylesheet" href="css/style.css" >
</head>
<body>
<div class="wrapper">
    <h1>染織の常設展示リスト</h1>
    
    <?php
 
// ファイルを変数に格納
$filename = 'data.csv';

 
// ファイルを配列に格納し、さらに変数に格納
$info_set = file($filename);


// var_dump($info_set);

//フォームに入力された回数をカウントする
$c = count($info_set);
//フォームに入力された回数分、行を配列に分割する
// var_dump("回数".$c);
  for($i = 0; $i < $c; $i++){
    // echo $i;
    $info_parts = explode(",",$info_set[$i]);
    // var_dump( $info_parts);
//配列を変数に格納する
$facility_name = $info_parts[0];
$pref = $info_parts[1];
$add = $info_parts[2];
$url = $info_parts[3];
$open_time = $info_parts[4];
$close_time = $info_parts[5];
$closed_day = $info_parts[6];
$exhibition_info = $info_parts[7];



echo '<table><tr><th>施設名</th><td>'.$facility_name.'</td></tr>';
echo '<tr><th>都道府県</th><td>'.$pref.'</td></tr>';
echo '<tr><th>住所</th><td>'.$add.'</td></tr>';
echo '<tr><th>URL</th><td>'.$url.'</td></tr>';
echo '<tr><th>開館時間</th><td>'.$open_time.'～'.$close_time.'</td></tr>';
echo '<tr><th>休日</th><td>'.$closed_day;
echo '<tr><th>展示について</th><td>'.$exhibition_info.'</td></tr></table>';



};




?>



</div>

</body>
</html>