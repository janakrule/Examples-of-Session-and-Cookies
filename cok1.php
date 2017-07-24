<?php
session_start();
$id="Welcome";
$_SESSION['sid']=$id;
setcookie('cid',$_SESSION['sid'],time()+60);
header('location:cok2.php');
?>