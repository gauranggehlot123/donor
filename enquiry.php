<!doctype html>
<?php
include("connection.php");
if($_POST['save']=="submit")
{
$ins="insert into enquiry set name='".$_POST['text1']."',country='".$_POST['country']."',
password='".$_POST['text3']."',gender='".$_POST['gender']."',address='".$_POST['Address']."',
email='".$_POST['text2']."',city='".$_POST['City']."',enquiryr='".$_POST['Enquiry']."'";
mysql_query($ins);
}
?>
<html>
<head>
	<title>Donor Hub</title>
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
			<div class="thirdpage2aboutusa"><h1>Enquiry</h1></div>
				<form method="post" action="">
					
						<div class="form">
						Name:&nbsp
						
						<input type="text" name="text1" value="" placeholder="Name">
					</div>
                          <div class="form">
							Email:&nbsp
						<input type="text" placeholder="Email" name="text2"/>
						</div>
						 <div class="form">
							Password:&nbsp
							<input type="password" placeholder="Password" name="text3"/>
						</div>
						 <div class="form">
							Gender:&nbsp
							<input type="radio"  name="gender" value="male" />Male</input>
							<input type="radio"  name="gender" value="female"/>Female</input>
						</div>
						<div class="form">
							Category:&nbsp
							<input type="radio"  name="category" value="Donor" />Donor</input>
							<input type="radio"  name="category" value="Exigency"/>Exigency</input>
						</div>
						
						
						
						
						<div class="form">
							BLOOD GROUP:&nbsp
							<select name="Blood Group">
								<option value="">---Select---</option>
								<option value="A">A</option>
								<option value="B">B</option>
								<option value="-O">-O</option>
								<option value="+O">+O</option>
								<option value="AB">AB</option>
							</select>
						</div>
						
						<div class="form">
							Country:&nbsp
							<select name="country">
								<option value="">---Select---</option>
								<option value="india">India</option>
								<option value="hindu">china</option>
								<option value="bharat">Bhutan</option>
							</select>
						</div>
					<div class="form">
						State:&nbsp
							<select name="State">
								<option value="">---Select---</option>
								<option value="">Rajasthan</option>
								<option value="">gujart</option>
								<option value="">up</option>
							</select>
						</div>
						<div class="form">
						City:&nbsp
							<select name="City">
								<option value="">---Select---</option>
								<option value="Jodhpur">Jodhpur</option>
								<option value="Jaipur">Jaipur</option>
								<option value="Udaipur">Udaipur</option>
							</select>
						</div>
						<div class="form">
						Address:&nbsp
						<textarea name="Address" rows="1" cols="1"></textarea>
					</div>
					<div class="form">
						Enquiry:&nbsp
						<textarea name="Enquiry" rows="1" cols="1"></textarea>
					</div>
					<div class="form">
						<input type="submit" name="save" value="submit">
					</div>
				</div>
			</div>
	<?php 
    include("footer.php");
    ?>
</div>
</div>