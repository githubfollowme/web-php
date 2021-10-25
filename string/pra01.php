<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>字串取代-密碼隱藏</title>
</head>
<body>
<h1>字串取代</h1>
<h3>將"aaddw1123"改成******</h3>
<?php


echo "<hr>";
$str='aaddw1123';
echo str_repeat("*",strlen($str));
echo "<pre>";
print_r($str);

echo "<hr>";
echo str_replace(['a','d','w','1','2','3'],"*",strlen($str));
echo "<hr>";
// 聰明喔 用陣列直接全換 還有更聰明的 用explode先去拆字
//可是一開始槓龜了 但是有個解決辦法
//用while可以把重複的東西 避免再跑出來(回想威力彩)
$array=[];
for($i=0;$i<strlen($str);$i++){
    // 
    $s=substr($str,$i,1);
    // if(!in_array($s,$array)){
        // 其實不寫重複也可取值出來
        $array[]=$s;
        echo $array[$i];
    // }
}

?>

</body>
</html>