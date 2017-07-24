<?php
session_start();
if(empty($_SESSION["uname"]) and empty($_SESSION["upass"]))
{
header("location:login.php");
}
echo "<h1><font face=forte color=red><marquee behavior=alternate><br>Welcome $_SESSION[uname] in our site.....</marquee></font></h1>";

?>