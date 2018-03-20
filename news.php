<!doctype html>
<?php
			include("connection.php");
			$run2=mysql_query("select * from addnews where nid='".$_GET['nid']."'");
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
					NEWS
				</div>
				<?php		
			while($row2=mysql_fetch_array($run2))
			{
				$showid2=$row2[0];
				$showtitle2=$row2[1];
				$showdes2=$row2[2];
			?>
				<div class="thrirdpage2coursesb">
				<?php echo $showtitle2 ?><br>
				<?php echo $showdes2 ?><br>
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