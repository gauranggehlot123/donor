<?php
			error_reporting(0);
			mysql_connect("localhost","root","");
			mysql_select_db("iipweb");
			$run1=mysql_query("select * from addnews");
			session_start();
?>
<div class="firstpage">
<div class="firstpage1"> 
<img src="images/hvlogo.png" width="210px" height="160px">
</div>
	<div class="firstpage2">
<h3>HELPING SAVE LIFE</h3></div>
		<?php
		if($_SESSION['udid']=="")
		{
			?>
	<div class="firstpage3"><a href="login.php"> Login </a>/ <a href="register.php">Register</a><br> www.donorhub.com
		<br>
		<strong>info@donorhub.com</strong>
		<br>
		<h3>+91-9999999999</h3>
	</div>
	<?php
	}
	else
	{
		?>
	<div class="firstpage3"><a href="iq.php"> IQ </a>/ <a href="changepassword.php">Change Password</a>/
		<a href="myprofile.php">My Profile</a>/<a href="logout.php">logout</a><br> www.donorhub.com
		<br>
		<strong>info@donorub.com</strong>
		<br>
		<h3>+91-9999999999</h3>
	</div>
	<?php	
	}
	?>
</div>
<div class="secondarypage">
	<div class="secondarypage1"><b><a href="index.php">Home</a></b></div>
	<div class="secondarypage2"><b><a href="contact.php">Contact us</a></b></div>
	<div class="secondarypage3"><b><a href="gallery.php">Gallery</a></b></div>
	<div class="secondarypage4"><b><a href="enquiry.php">Enquiry</a></b></div>
	<div class="secondarypage5"><b><a href="courses.php">Services</a></b></div>
	<div class="secondarypage6"><b><a href="about.php">About us</a></b></div>
</div>

<div class="secondarypage"><div>News:</div>

<marquee scrolldelay=200 bgcolor="yellow">
		<?php		
			while($row1=mysql_fetch_array($run1))
			{
				$showid1=$row1[0];
				$showtitle1=$row1[1];
		?>
	<a href="news.php?nid=<?php echo $showid1 ?>"><div class="abc"><?php echo $showtitle1."&nbsp&nbsp&nbsp"; ?></div></a>
		<?php	
			}
		?>
</marquee>
</div>
				