<!doctype html>
<?php
			
			include("connection.php");
			if($_POST['usave']=="Search")
			{
				$get_id=$_POST['title'];
				$where=" where course_n LIKE '$get_id%' ";
			}
			$run=mysql_query("select * from adcourses $where order by cid DESC ");
			$where="";
			
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
					SERVICES
				</div>
				<div align="center" >
	<form method="post">
	Search By ServiceName:
	<input type="text" name="title">
		<input type="submit" value="Search" name="usave">
		</form> 
	</div>
				<?php		
			while($row=mysql_fetch_array($run))
			{
				$showid=$row[0];
				$showname=$row[1];
				$showfees=$row[2];
				$showdura=$row[3];
				$showdes=$row[4];

			?>
			<div class="thrirdpage2coursesb">
					<table>
						<tr>
							<td>Service Name:<?php  echo $showname; ?></td>
						</tr>
						<tr>
							<td>:<?php  echo $showfees; ?></td>
						</tr>
						<tr>
							<td>Duration:<?php  echo $showdura; ?></td>
						</tr>
						<tr>
							<td>Description:<?php echo $showdes; ?></td>
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
	