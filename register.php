<!doctype html>
<?php
include("connection.php");
session_start();
if($_POST['b']=="Register")
{
	$exe=mysql_query("select * from register where email_id='".$_POST['e']."'");
		
		$tot=mysql_num_rows($exe);
		if($tot==1)
		{
			echo"<h1>Alreadry register</h1>";
		}
		else
		{
	$name1=$_POST['n'];
	$email=$_POST['e'];
	$ins="insert into register set name='$name1',email_id='$email',
	phone_no='".$_POST['p']."',mob_no='".$_POST['m']."',adr='".$_POST['a']."',password='".$_POST['pass']."'";
	mysql_query($ins);
		echo"<h1>Sucesfully Register</h1>";
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
			<div class="registera"><h1>REGISTER</h1></div>
			<div class="register">
					<form method="post">
					<table text align="center">
						<tr>
							<td><h2>Name:</h2></td>
							<td><input type="text" name="n" value=""></td>

						</tr>
						<tr>
							<td><h2>Email-id:</h2></td>
							<td><input type="text" name="e" value=""></td>
						</tr>
						<tr>
							<td><h2>Phone-no:</h2></td>
							<td><input type="text" name="p" value=""></td>
						</tr>
						<br>
						<tr>
							<td><h2>Mob-no:</h2></td>
							<td><input type="text" name="m" value=""></td>
						</tr>
						<tr>
							<td><h2>Address:</h2></td>
							<td><textarea name="a"></textarea></td>
						</tr>
						<tr>
							<td><h2>Password:</h2></td>
							<td><input type="password" name="pass"></td>
						</tr>
						<tr>
							
							<td><h2><input type="submit" name="b" value="Register"></h2></td>
						</tr>
					</table>
				</form>
				</div>	
				</div>
				<?php
				include("footer.php");
				?>
			</div>				
	
