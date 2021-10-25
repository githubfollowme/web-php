<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>尋找字串與HTML,CSS整合應用</h1>
    <h3>給定一個句子,將指定的關鍵字放大</h3>
    <ul>
        <li>"學會PHP網頁程式設計,薪水會加倍,工作會好找"</li>
        <li>請將上句中的"程式設計"放大字形或變色</li>
    </ul>
    <?php
    $str="學會PHP網頁程式設計,薪水會加倍,工作更好找";
    $sub="程式設計";
    // 方法1
    $split=explode($sub,$str);
    print_r($split);
    echo $split[0];
    "<span style='font-size:30px;color:red>";
    $sub .
    "</span>".
    $split[1];
    ?>
    <hr>
    <h4>方法2</h4>
    <style>
.font-effect{
    font-size: 30px;
    font-weight: 600;

}

        .font-effect:hover{
            color:green;
        }
        </style>
    
    <?php
// $style="<span style='font-size:30px;color:blue>"  . //移動到上面去;
$sub .
'</span>';
echo str_replace($sub,$style,$str);

    ?>
    <!-- 學會PHP網頁<span style="font-size: 30px;color:red">程式設計</span> 薪水會加倍,工作更好找 -->
</body>
</html>