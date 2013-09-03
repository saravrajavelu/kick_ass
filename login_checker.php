<?php include("includes/header.php"); ?>
<?php require_once("includes/connection.php"); ?>


<div id="home_about" style="background-color:skyblue ;height:620px;width:100%;float:left;">
	
	<?php
		$out_firstname = trim($_GET['signup_firstname']);
		$out_lastname = $_GET['signup_lastname'];
		$out_username = $_GET['signup_username'];
		$out_sex = $_GET['signup_sex'];
		$out_age = $_GET['signup_age'];
		$out_password = $_GET['signup_password'];
		$out_squestion = $_GET['signup_securityquestion'];
		$out_sanswer = $_GET['signup_securityanswer'];
		//$out_date = date_create();
		//$out_timestamp = date_timestamp_get($out_date);
		//,'$out_timestamp','$out_date'
	
		
	$query="INSERT INTO users VALUES ('$out_username','$out_firstname','$out_lastname',
	'$out_age','$out_sex','$out_password','$out_squestion','$out_sanswer')";
			$result = mysql_query($query,$connection);
				if (!$result){
					die("Database query failed : " . mysql_error());
					}
				echo "1 record added";

	?>
</div>			
<?php require("includes/footer.php"); ?>