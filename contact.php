<!doctype html>
<?php
			include("connection.php");
			$run=mysql_query("select * from contactus");
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
			<div class="thirdpage2courses">
				<div class="thrirdpage2coursesa">
					Contact Us
				</div>
				<?php		
			while($row=mysql_fetch_array($run))
			{
				$showid=$row[0];
				$showcomany_n=$row[1];
				$showadress=$row[2];
				$showph_no=$row[3];
				$showmob_no=$row[4];
				$showemail=$row[5];
			?>
				<div class="thrirdpage2coursesb">
					<table>
				

						<tr>
							<td>Company Name:<?php  echo $showcomany_n ?></td>
						</tr>
						<tr>
							<td>Address:<?php  echo $showadress ?></td>
						</tr>
						<tr>
							<td>Phone No:<?php  echo $showph_no ?></td>
						</tr>
						<tr>
							<td>Mob No:<?php echo $showmob_no ?></td>
						</tr>
						<tr>
							<td>Email:<?php  echo $showemail ?></td>
						</tr>
			
					</table>
				</div>
				<?php	
			}
		?>
			</div>
			</div>


	<?php 
    include("footer.php");
    ?>
	</div>
</div>