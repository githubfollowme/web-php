<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 500px;
            margin: auto;
            padding: 20px;


        }
    </style>
</head>

<body>
    <h1>線上月曆</h1>
    <?php
    // $month="2021-10-1";
    $firstDay=date("Y-m-01");
    $month=date("m");
    $firstWeekfirstDay=date("w",strtotime($firstDay));
    echo "firstday".$firstday;
echo"<br>";
    echo"<table>";
    echo "<td>日</td>";
    echo "<td>一</td>";
    echo "<td>二</td>";
    echo "<td>三</td>";
    echo "<td>四</td>";
    echo "<td>五</td>";
    echo "<td>六</td>";

    echo "</tr>";

    echo "<table>";
    // 開始思考 如何剛好1號排在周五
    for ($i = 0; $i < 7; $i++) {
        echo "</tr>";
        
        for ($j = 0; $j < 7; $j++) {
            if($i==0 $$ $j<5){
            echo "<td>";
            echo $i * 7 + $j + 1;
            echo "</td>";}
        }elseif($i==5 && $j>0){
            echo"<td>";
            echo"&nbsp;";
            echo"</td>";
        }

        else{
            echo"<td>";
        }
    }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>

</html>