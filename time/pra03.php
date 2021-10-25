<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date格式化參數</title>
</head>
<body>
    <h1>Date格式化參數</h1>
<?php
echo date("m月j日");
?>   
<hr>
<?php
echo date("m月j日");
?>   
<hr>
<?php
echo date("m月j日");
?>   
<hr>
<?php
$date=date("今天是西元Y年m月j日");
if(date("N")>=6){
    // N就是
    echo $date . "假日";
}else{
    echo $date ."上班日";
}
?>   
<hr>
</body>
</html>