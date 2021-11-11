<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- 檔案一直都在server端 -->
<!-- 瀏覽器看到的都是記憶體處理完的結果 -->
<h1>GET</h1>    
<form action="get.php" method="GET">
署名: <input type="text" name='book' value=''>
<input type="submit" value="送出">

<h1>FILE</h1>
<form action="api/get/book/1" method='POST'>
<input type="text" name="book" value=''>
<input type="submit" value="送出">

</form>


</form>

</body>
</html>