<?php

$acc='mack';
$pw='1234';

if($acc==$_POST['acc'] && $pw==$_POST['pw']){
    setcookie('user',$_POST['acc'],time()+3600);
    //$_SESSION['user']=$_POST['acc'];
    header("location:mem_center.php");
    //讓他留在header頁面約1個小時
}else{
    header("location:index.php?status=err");
    // 不然就回首頁
}

?>

