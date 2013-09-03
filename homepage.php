<?php include("includes/header.php"); ?>
<?php require_once("includes/connection.php"); ?>
<div id="homepage_name" >
	<?php  
		echo "Welcome back, " . $_SESSION['s_firstname'] . " " . $_SESSION['s_lastname'];
		 ?>
</div>	
<div id="homepage_leftbox" >
	<ul>
		<li>My Profile</li>
		<li>Field 1</li>
		<li>Field 2</li>
		<li>Field 3</li>
	</ul>
</div>
<div id="homepage_rightbox" >
</div>

<?php require("includes/footer.php"); ?>
