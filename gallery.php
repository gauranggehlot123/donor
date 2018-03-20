<!doctype html>
<?php
			include("connection.php");
			$run=mysql_query("select * from add_gallery");
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
		<div class="thirdpage2courses">
			<div class="thrirdpage2coursesa">
					Gallery
				</div>
			<?php		
			while($row=mysql_fetch_array($run))
			{
				$showid=$row[0];
				$showq=$row[1];
				$showa=$row[2];
			?>
				<div class="image">
					<div class="image1"><img src="admin/uploadsimage/<?php  echo $showa ?>" width="200" height="200" ></div>
					<div class="image2"><?php  echo $showq ?></div>
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
