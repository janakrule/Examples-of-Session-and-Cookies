<form method="post" action="">
<table border="2" align="center" bgcolor="#33CCFF">
<tr><td><div align="center"><strong>User Name:</strong></div></td>
<td><div align="center"><strong><input type="text" name="u"></strong></div></td>
</tr>
<tr><td><div align="center"><strong>Password:</strong></div></td>
<td><div align="center"><strong><input type="password" name="p"></strong></div></td>
</tr>
<tr><td><div align="center"><strong><input type="submit" name="login" value="Login">
</strong></div></td>
<td><div align="center"><strong><input type="reset" value="Cancel"></strong></div></td>
</tr>
</table>
</form>
<?php
session_start();
if(isset($_POST["login"]))
{
mysql_connect("localhost","root","");
mysql_query("create database demo");
mysql_select_db("demo");
mysql_query("create table lg(uname varchar(20),upass varchar(30))");
$_SESSION["uname"]=$_POST["u"];
$_SESSION["upass"]=$_POST["p"];
$q="select * from lg where uname='$_POST[u]' and upass='$_POST[p]'";
$res=mysql_query($q);
$c=mysql_num_rows($res);
if($c!=0)
{
header("location:admin.php");
}
else
{
echo "<h3><font face=castellar color=blue>Invalid username & password...</font></h3>";
}
}
?>