<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>線上月曆</title>
    <style>
        .dayoff1 {
            background-color: lightseagreen;
        }

        .dayoff2 {
            background-color: lightpink;
        }
        .special-date {
            /* background-color: red; */
            color: red;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
</head>

<body>
    <h1>線上月曆</h1>


    <style>
/* body{
    display: flex;
    justify-content: center;
} */

        .cell {
            width: 60px;
            height: 60px;
            border: 1px solid #999;
            display: flex;
            justify-content: center;
            /* display:inline-block; */
            margin: 0;
            box-sizing: border-box;
        }

        .cell:hover {
            background-color: lightblue;
        }

        .calendar {
            width: 422px;
            height: 422px;
            margin: auto;
            border: 1px solid lightblue;
            box-sizing: border-box;
            display: flex;
            flex-wrap: wrap;
            align-content: end;
            justify-content: start;
        }
    </style>
    <?php
    $specialDate = ['2021-11-15' =>  'nbsp&發薪水', '2021-12-25' => '聖誕節'];
    //echo $specialDate['2011-11-11'];
    /*     $firstDay=date("Y-m-01");
    $month=date("m"); */

    //直接訪問本頁不帶值
    //訪問本頁帶月份值
    /* empty(1)=>false
    !empty(1)=>!false=>true
    empty(0)=>true
    !empty(0)=!true=>false */


    if (isset($_GET['month'])) {
        $month = $_GET['month'];
        $year = $_GET['year'];
    } else {
        $month = date("m");
        $year = date("Y");
    }

    $lastmonth = $month - 1;
    $lastyear = $year;

    $nextmonth = $month + 1;
    $nextyear = $year;

    if ($month == 1) {
        $lastmonth = 12;
        $lastyear = $year - 1;

        $nextmonth = $month + 1;
        $nextyear = $year;
    } else if ($month == 12) {

        $lastmonth = $month - 1;
        $lastyear = $year;

        $nextmonth = 1;
        $nextyear = $year + 1;
    }

    $firstDay = date("$year-$month-01");
    $firstWeekWhiteDays = date("w", strtotime($firstDay));
    $monthDays = date("t", strtotime($firstDay));
    $firstWeekDays = 7 - $firstWeekWhiteDays;
    $weeks = ceil(($firstWeekWhiteDays + $monthDays) / 7);
    $lastWeekDays = ($firstWeekWhiteDays + $monthDays) % 7;
    $lastWeekWhiteDays = 7 - $lastWeekDays;
    $allCells = $weeks * 7;
    //陣列中加入首列資料
    $headers = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
    // echo '<img src= "https://i.pravatar.cc/'.$month.'/500">';
    // echo '<img src="https://pravatar.cc/500?img=38">';
    // echo '<img src="https://unsplash.it/500/500/?random">';
    echo '<img src="https://unsplash.it/1000/300?random" class=img-responsive">';
    // echo '<img src="https://picsum.photos/id/'.$month.'/1200/300">';
    //陣列中加入月前空白;
    for ($i = 0; $i < $firstWeekWhiteDays; $i++) {
        $td[] = "";
    }
    for ($i = 0; $i < $monthDays; $i++) { //決定當月有幾周
        $td[] = ($i + 1);
    }
    for ($i = 0; $i < $lastWeekWhiteDays; $i++) {
        $td[] = "";
    }

    ?>
<!-- <div class="wrap"> -->
    <h3><?= $year; ?>年<?= $month; ?>月</h3>

    <div>
        <a href="calendar_specialdate.php?year=<?= $lastyear; ?>&month=<?= $lastmonth; ?>"><i class="fas fa-arrow-alt-circle-left"></i>Prev Month</a>
        <a href="calendar_specialdate.php?year=<?= $nextyear; ?>&month=<?= $nextmonth; ?>">Next Month
            <i class="fas fa-arrow-alt-circle-right"></i></a>
            <br>
            <br>
    </div>
    <div class="calendar">

        <?php


        // 月曆頭的地方
        // foreach在php的用法
        // https://www.wibibi.com/info.php?tid=204
        foreach ($headers as $header) {
            echo "<div class='cell'>";
            echo $header;
            echo "</div>";
        }

        //月曆body的地方
        for ($i = 0; $i < $allCells; $i++) {
            $w = $i % 7;
            if (is_numeric($td[$i])) {
                $date = date("$year-$month-") . $td[$i];
            }

            if ($w == 0) {
                echo "<div class='dayoff2 cell'>";
            }
            else if($w == 6){
                echo "<div class='dayoff1 cell'>";
            }
            else {
                echo "<div class='cell'>";
            }
            echo $td[$i];
            if (isset($date) && array_key_exists($date, $specialDate)) {
                echo $specialDate[$date];
            }
            echo "</div>";
        }

        ?>
    </div>
    <!-- </div> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>