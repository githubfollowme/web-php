<?php
if(!empty($_POST)){
$acc=$_POST["acc"];
$pw=$_POST["pw"];
if($acc=="mack" && $pw=="1234"){
    echo "帳號[或]密碼正確";
    echo "<br>";
    echo "登入成功";
}else if{
    echo "帳號或密碼錯誤";
    echo "<br>";
    echo "登入失敗";
}
else{
    echo "<h1 style=color:"red";font-size="45px">非法入侵</h1>"</style>;
}
}
?>

<!-- 表單除了file傳過來的任何資料 全部都是文字型態 -->