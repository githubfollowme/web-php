<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>給定兩個日期,計算中間間隔天數</title>
</head>

<body>
    <h1>給定兩個日期,計算中間間隔天數</h1>
    <span>開始日期:2021-10-1</span><br>
    <span>結束日期:2021-11-3</span>
    <hr>
    <?php
    date_default_timezone_set("Asia/Taipei");
    echo date("Y-m-d H:i:s");
    echo "<br>";
    echo date("Y-m-d H:i:s", 100000);
    echo strtotime('1970-1-1 01:00:00');
    
    $endinTime=strtotime('2021-11-3');
    $beginTime=strtotime('2021-10-1');
    echo '<hr>';
    echo "<br>間隔為".(($endTime-$beginTime)/86400)."天";

    
    ?>


</body>

</html>