<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>下次生日還有幾天</title>
</head>
<body>
    <h1>計算距離自己下一次生日還有幾天</h1>
    <div>我的生日1-12</div>
    <div>下一次生日</div>
    <?php
date_default_timezone_set("Asia/Taipei");
// echo date("Y-m-d H:i:s");
// echo "<br>";
// echo date("Y-m-d H:i:s", 100000);
// echo strtotime('1970-1-1 01:00:00');

$currentTime=strtotime('now');
// 原本寫2021-10-25 但可改成now,更方便
$birthdayTime=strtotime('2022-1-12');
echo '<hr>';
echo "<br>"."距離下次生日間隔為".(ceil(($birthdayTime-$currentTime)/86400))."天";
   ?>
</body>
</html>