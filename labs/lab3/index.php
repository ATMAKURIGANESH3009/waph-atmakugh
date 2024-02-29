<?php
	session_start();    
	if (checklogin_mysql($_POST["username"], $_POST["password"])) {
		$username = htmlspecialchars($_POST['username']); 
?>
	<h2> Welcome <?php echo $username; ?> !</h2>
<?php		
	} else {
		echo "<script>alert('Invalid username/password');window.location='form.php';</script>";
		die();
	}

  	function checklogin_mysql($username, $password) {
		$mysqli = new mysqli('localhost', 'ganesh', 'waph@UC!2024', 'waph');
		if ($mysqli->connect_errno) {
			printf("Database connection failed: %s\n", $mysqli->connect_error);
			exit();
	    }
	    $sql = "SELECT * FROM users WHERE username=? AND password=MD5(?);"; 
	    $stmt = $mysqli->prepare($sql);
	    $stmt->bind_param("ss", $username, $password);
	    $stmt->execute();
	    $result = $stmt->get_result();
	    if ($result->num_rows == 1)
	    	return true;
	    return false;
	}
?>
