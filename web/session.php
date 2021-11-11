<?php
session_start();
$_SESSION['name']='keep';
echo $_SESSION['name'];
$_SESSION['students']=['張大頭','王小名','陳美麗'];
?>