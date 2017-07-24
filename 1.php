<?php
session_start();
echo session_id();
echo "<br>";
$_SESSION['name']="Welcome to My Website";
$_SESSION['addr']="Noida";
//unset($_SESSION['name']);
//session_destroy();
?>