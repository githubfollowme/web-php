<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
h1{
    text-align:center;
    width: 100%;
}

</style>
</head>
<body>
<?php
$name=[];
 //關鍵一行 一維陣列的宣告 
echo "建立陣列練習";
//原始寫法
$name=['judy','amo','john','peter','hebe'];
$subject=['國文','英文','數學','地理','歷史'];

//$name['judy']=[95,64,70,90,84];或者改寫成下面key value的方式
$name['judy']=['國文'=>95,'英文'=>64,'地理'=>90,'地理'=>84];

$name['judy']=[95,64,70,90,84];
$name['amo']=[88,78,54,81,71];
$name['john']=[88,78,54,81,71];
$name['peter']=[88,78,54,81,71];
$name['hebe']=[88,78,54,81,71];



echo "<pre>";
// 可保持原來的斷行 或狀態
print_r($name);
print_r($subject);
//print_r函數可將整個array輸出

$subject=array_keys($name['judy']);
echo"</pre>";
// echo $name[0];

print_r ($name['judy']);

echo "judy的數學成績為".$name['judy'][2]."分"
//或者也可寫成echo "judy的數學成績為".$name['judy']['數學']."分"


?>
    




</body>
</html>
