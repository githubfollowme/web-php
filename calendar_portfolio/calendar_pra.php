<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>線上月曆</title>
</head>
<body>
<h1>線上月曆</h1>
<style>

</style>
<?php
$specialDate=['2021-11-15'=>'發薪水','2021-12-25'=>'聖誕節'];
if(isset($_GET['month'])){
    $month=$_GET['month'];
    $month=$_GET['year'];
}
else{
    $month=date("m");
    $year=date("Y");
}
$lastmonth=$month-1;
$lastyear=$year;

if($month==1){
    $lastmonth=12;
    $lastyear=$year-1;

    $nextmonth=$month+1;
    $nextyear=$year;
}else if($month==12){
    $lastmonth=$month-1;
    $lastyear=$year;
    $nextmonth=1;
    $nextyear=$year+1;
}

?>
</body>
</html>

