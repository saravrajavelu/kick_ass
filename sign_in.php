<?php include("includes/header.php"); ?>
<?php require_once("includes/connection.php"); ?>
<?php

	// Grab User submitted information
	$username = $_POST['login_username'];
	$password = $_POST['login_password'];

	// Selecting the records
	$query="SELECT * FROM users 
	WHERE  
	username = '$username'";
	$result = mysql_query($query,$connection);
		if (!$result){
					die("Database query failed : " . mysql_error());
					}

		$row = mysql_fetch_array($result);
		if($row["username"]==$username && $row["hashed_password"]==$password)
		{
		$_SESSION['s_username']=$row["username"];
		$_SESSION['s_firstname']=$row["first_name"];
		$_SESSION['s_lastname']=$row["last_name"];
		$_SESSION['s_age']=$row["age"];
		$_SESSION['s_sex']=$row["sex"];
		$_SESSION['s_securityquestion']=$row["security_question"];
		$_SESSION['s_securityanswer']=$row["security_answer"];
		header("Location: homepage.php");
		}
	else
		{
		$_SESSION["error"]="Invalid Credentials!";
		header("Location: index.php");
		exit;
		}
		//echo"Sorry, your credentials are not valid, Please try again.";
		//echo "mysql_num_rows($result)";
?>

<?php require("includes/footer.php"); ?>