<!doctype html>
<?php
include("connection.php");
include("session.php");
if($_POST['save']=="Update")
{
	$up="update register set name='".$_POST['old']."',adr='".$_POST['new']."',mob_no='".$_POST['m']."' where nid='".$_SESSION['udid']."'";
	if( mysql_query($up))
	{
	echo"<h1>Update Sucesfully</h1>";
	}
}
$sel="select * from register where nid='".$_SESSION['udid']."'";
$exe=mysql_query($sel);
$fetch=mysql_fetch_array($exe);
$name=$fetch[1];
$mobno=$fetch[4];
$adr=$fetch[5];

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
			<div align="center"><h1><u>MY PROFILE</u></h1></div>
			<form method="post">
			<table text align="center">
				<tr>
					<br>
		<td><h3>NAME:</h3></td>
		<td><input type="Text" maxlength="20" name="old" value="<?php echo $name; ?>" ></td>
				</tr>
				<tr>
		<td><h3>ADDRESS:</h3></td>
		<td><input type="Text" name="new" value="<?php echo $adr; ?>"></td>
				</tr>
				<tr>
		<td><h3>MOBILE:</h3></td>
		<td><input type="Text" name="m" value="<?php echo $mobno; ?>"></td>
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