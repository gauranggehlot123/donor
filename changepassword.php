<!doctype html>
<?php
include("connection.php");
include("session.php");
if(isset($_POST['save']))
{
$sel="select * from register where password='".$_POST['old']."' and  nid='".$_SESSION['udid']."'";
$exe=mysql_query($sel);
 $tot=mysql_num_rows($exe);
if($tot==1)
{
	$upd="update register set password='".$_POST['new']."' where nid='".$_SESSION['udid']."'";
	if(mysql_query($upd))
	{
		echo"<h1>UpDATE SUCESSFULLY</h1>";
	}
}
if($tot==0)
{
echo"invalid old password";
}
}
?>
<html>
<head>
	<title>ws cube tech</title>
	<link href="style.css" rel="stylesheet"/>
</head>
<body>
<div class="backgroungpage">
<div class="mainpage">
	<?php
    include("header.php");
    ?>
	<?php
    include("sidemenu.php");
    ?>
		<div class="thirdpage2aboutus">
			<div align="center"><h1><u>CHANGE PASSWORD</u></h1></div>
			<form method="post">
			<table text align="center">
				<tr>
					<br>
		<td><h3>OLD PASSWORD:</h3></td>
		<td><input type="password" maxlength="20" name="old"></td>
				</tr>
				<tr>
		<td><h3>NEW PASSWORD:</h3></td>
		<td><input type="password" name="new"></td>
				</tr>
				<tr>
			<td><br><input type="submit" value="Update" name="save" id="search"></td>
				</tr>
			</table>
			</form>
				</div>
			</div>
	<?php 
    include("footer.php");
    ?>
</div>
</div>