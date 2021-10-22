<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>威力彩電腦選號沒有重複號碼</h1>
    <?php

    $nums = [];
    $i=0;
    //for($i=0;$i<6;$i++){
    // 後來改用while count
    while (count($nums) < 6) {
        $t = rand(1, 38);
        // echo rand(1,38);
        if (!in_array($t, $nums)) {
            $nums[] = $t;
        }
        $i++;
    }
    // $nums[]=rand(1,38);
    echo "<pre>";
    print_r($nums);
    echo "</pre>";
    echo"回圈次數".$i;
    echo"<hr>";
    foreach($nums as $num){
        echo $num .",";
    }
    ?>
</body>

</html>