<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
<style>
    div{
        width: 400px;
        margin: auto;
        border: 1px solid #000;
        box-shadow: 1px 1px 10px lightgrey;
        padding: 10px; /*這樣才不會太貼邊  */
    }
    /* 也有css reset效果 會清空原設定 */
</style>
</head>
<body>
    <form action="actionlogin.php" method="POST">
Email:<br>
<input type="text" name="email"><br>
password<br>
<input type="text" name="password"><br>
<input type="submit" name="submit" value="login">
<input type="hidden" name="refer" value="<?php echo (isset($_GET['refer']))?$_GET['refer']:'index.php';?>">
    <!-- isset去確認這個是否是空的>
</form>

<div>
<form action="result.php" method="post"><!-- 用result去檢查 -->
    <p>帳號: <input type="text" name="acc"></p>|
    <p>帳號: <input type="password" name="nm"></p>
</form>

</div>
</body>
</html>