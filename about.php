<!doctype html>
<?php
			include("connection.php");
			$row1=mysql_query("select * from aboutus where nid='1'");
			$run1=mysql_fetch_array($row1);
			$showtitle=$run1[1];
			$showdes=$run1[2];
			$run=mysql_query("select * from whyiip");
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
			<div class="thirdpage2aboutusa"><h1><?php echo $showtitle; ?></h1></div>
			<div class="thirdpage2aboutusb"><?php echo $showdes ?></div>
			<div class="thirdpage2aboutusc">Why Donor Hub</div>
			<div class="thirdpage2aboutusd">
				<?php $i=1; ?>
				<?php		
			while($row=mysql_fetch_array($run))
			{
				$showid=$row[0];
				$showtitle=$row[1];
			?>
		 	
			<?php echo $i."&nbsp&nbsp ".$showtitle ?>
			<?php echo "<br>" ?>
			<?php echo "<br>" ?>
			<?php $i++; ?>
					
				
				<?php	
			}
		?>

		</div>
		</div>
	</div>	
<?php 
    include("footer.php");
    ?>
</div>
</div>