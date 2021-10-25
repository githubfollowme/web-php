<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>子字串取用</title>
</head>
<body>
<h1>子字串取用</h1>
<?php
$str='The reason why a great man is that... 台商確定繼續維持防疫措施..';
$sub=substr($str,0,20);
$sub1=mb_substr($str,0,40);
echo $sub . "...";
echo"<br>";
echo $sub . str_repeat(".",3);
echo '<hr>';
echo $sub1 . str_repeat(".",3);
echo '<hr>';
// mb_ 是專門對字元所做的函式處理
?>
</body>
</html>