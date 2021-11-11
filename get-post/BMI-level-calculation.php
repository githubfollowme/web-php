<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>計算結果</title>
</head>
<body>
    <h1>計算BMI(php)</h1>
<?php 
$bmi=$_GET['weight']/(($_GET['height']/100)*($_GET['height']/100));
if(!empty($_GET['bmi'])){
    $bmi=$_GET['bmi'];
}
if(isset($bmi)){
    echo"你上次計算的bmi為:".$bmi;
}

if(18.5<=$bmi && $bmi<24){
    echo"妳的bmi為" .$bmi;
    echo "經判定為正常";
}else{
    echo "經判定為異常";
}
?>

<!-- <a href="index-bmi.php">回首頁</a>  但最後沒回到首頁 -->
<a href="index-bmi.php?bmi=<?=$bmi;?>">回首頁</a>

</body>
</html>