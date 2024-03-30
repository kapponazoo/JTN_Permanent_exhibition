<?php
 
// ファイルを変数に格納
$filename = 'data.csv';

 
// ファイルを配列に格納し、さらに変数に格納
$info_set = file($filename);


var_dump($info_set);
$info_parts = explode(",",$info_set);
var_dump($info_parts);

?>
 
<!-- <ul>
 
<!-- foreachでファイルの配列をループ処理 -->
<?php foreach ($lines as $line) : ?>
 
  <!-- 配列の要素を1行ずつ<li>タグに埋め込む -->
  <li><?php echo $line; ?></li>
 
<?php endforeach; ?>
</ul>

<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
施設名：<?=$line?>
</body>
</html> -->