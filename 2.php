<?php
session_start();
echo session_id();
echo "<br>";
$n=$_SESSION['name'];
$m=$_SESSION['addr'];
echo $n;
echo "<br>$m";
?>