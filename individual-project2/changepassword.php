<?php
	require "session_auth.php";
	$username = $_SESSION['username'];
	$password = $_REQUEST['newpassword'];
	$token = $_POST["nocsrftoken"];
	if (!isset($token) or ($token!=$_SESSION["nocsrftoken"])){
	echo "CSRF Attack is detected";
	die();
	}

	
	if (isset($username) and isset($password)){
		echo "Debug> changepassword.php got username=$username; password=$password";
		if (changepassword($username,$password)) {
			echo "Password has been changed";
		}else {
		 	echo "Change password failed";	
		}
	}else{
		echo "No username/password provided!";
	}

  	function changepassword($username, $password) {
		$mysqli = new mysqli('localhost', 'atmakugh', 'Prameela@123', 'waph_indproj2');
		if ($mysqli->connect_errno){
			printf("Database connection failed: %s\n", $mysqli->connect_error);
			return FALSE;
	    }
	    $prepared_sql = "UPDATE users SET password = md5(?) WHERE username = ?;"; 
	    $stmt = $mysqli->prepare($prepared_sql);
	    $stmt->bind_param("ss", $password, $username);
	    if($stmt->execute()) return TRUE;
	    return FALSE;
	}
?>

<br>
<a href="logout.php">Logout</a>