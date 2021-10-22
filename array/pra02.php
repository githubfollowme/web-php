<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>陣列練習</title>
</head>

<body>



</body>

</html>

<?php
$nine = [];
// $a=$i*3;
for ($j = 1; $j <= 9; $j++) {

    for ($i = 1; $i <= 9; $i++) {
        $nine[] = "$j X $i=" . ($j * $i);
    }
    //注意x跟j要有點空間 連在一起就變成jx了
}
// echo "<pre>";
// print_r($nine);
// echo "</pre>"

for ($i = 0; $i <= count($nine); $i++) {
    echo $nine[$i];
    if ($i % 9 == 8) {
        echo "<br>";
    }
}

for ($i = 0; $i <= count($nine); $i++) {
    echo $nine[$i];
    if ($i % 9 == 0) {
        echo "<br>";
    }
}

?>