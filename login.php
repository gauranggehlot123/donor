<!doctype html>
<?php
include("connection.php");
session_start();
if(isset($_POST['ubutt']))
{
$sel="select * from register where email_id='".$_POST['uname']."' and password='".$_POST['upass']."'";
$exe=mysql_query($sel);
$tot=mysql_num_rows($exe);
if($tot==1)
{
	$fetch=mysql_fetch_array($exe);
	$_SESSION['udid']=$fetch['nid'];
	echo'<script>window.location="myprofile.php"</script>';
	echo $_SESSION['udid'] ;
}
else
{
	echo"invalid username and password";	
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
					<div class="thirdpage2aboutus1"><h1>Login</h1></div>
					<div class="thirdpage2aboutus2">
						<form method="post">
							<table text align="center">
								<tr>
							<td><h3>Username:</h3></td>
							<td><input type="text" name="uname" value="" textholder="name"></td>
						</tr>
						<tr>
							<td><h3>Password:</h3></td>
							<td><input type="password" name="upass" value="" textholder="password"></td>
						</tr>
							<tr>
							<td><input type="submit" name="ubutt" value="Login" id="button1" ></td>
						</tr>
					</table>
						</form>
					</div>
		</div>
</div>

	<?php 
    include("footer.php");
    ?>
</div>
</div>