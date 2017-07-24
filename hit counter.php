<body>
<marquee><h1><font face="Castellar">A Session Hit Counter</font></h1></marquee>
<br>
<br>
<font color="#FF0000"><h3>Hello there, You have been here, 
<?php
session_start();
if(!isset($_SESSION['count']))
{
$_SESSION['count']=1250;
}
else
{
$_SESSION['count']++;
}
echo $_SESSION['count'];
?>

times before.</h3></font>
</body>