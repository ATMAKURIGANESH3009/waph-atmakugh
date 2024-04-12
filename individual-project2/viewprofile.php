<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Sign Up Form</title>
  <link rel="stylesheet" href="style.css" />
</head>


<?php
	session_set_cookie_params(15*60, "/","atmakugh.waph.io",TRUE,TRUE);
	session_start();    
	if (isset($_POST["username"]) and isset($_POST["password"])) {
		if (checklogin_mysql($_POST["username"], $_POST["password"])) {
			$_SESSION['authenticated'] = TRUE;
			$_SESSION['username'] = $_POST["username"];
			$_SESSION["browser"] = $_SERVER["HTTP_USER_AGENT"];
		} else {
			session_destroy();
			echo "<script>alert('Invalid username/password');window.location='form.php';</script>";
			die();
		}
	}
	if (!$_SESSION['authenticated'] or $_SESSION['authenticated']!=TRUE) {
		session_destroy();
		echo "<script>alert('You have not logged in. Please login first!');</script>";
		header("Refresh: 0; url=form.php");
		die();
	}	

    if ($_SESSION["browser"]!= $_SERVER["HTTP_USER_AGENT"]){
    	session_destroy();
    	echo "<script>alert('Session hijacking attack is detected!');</script>";
    	header("Refresh:0; url=form.php");
    	die();
    }

  	function checklogin_mysql($username, $password) {
		$mysqli = new mysqli('localhost', 'atmakugh', 'Prameela@123', 'waph_indproj2');
		if ($mysqli->connect_errno) {
			printf("Database connection failed: %s\n", $mysqli->connect_error);
			exit();
	    }
	    $sql = "SELECT * FROM users WHERE username=? AND password= md5(?);"; 
	    $stmt = $mysqli->prepare($sql);
	    $stmt->bind_param("ss", $username, $password);
	    $stmt->execute();
	    $result = $stmt->get_result();
	    if ($result->num_rows == 1)
	    	return true;
	    return false;
	}

	// Fetch and display profile
$mysqli = new mysqli('localhost', 'atmakugh', 'Prameela@123', 'waph_indproj2');
if ($mysqli->connect_errno) {
    printf("Database connection failed: %s\n", $mysqli->connect_error);
    exit();
}

$username = $_SESSION['username']; // Get the username of the logged-in user



$prepared_posts = "SELECT username, fullname, email, phone FROM users where username=?" ;
$stmt = $mysqli->prepare($prepared_posts);
$stmt->bind_param("s", $username);
$stmt->execute();


// Check for errors in query execution
if ($stmt->error) {
    printf("Error: %s\n", $stmt->error);
}

$result_posts = $stmt->get_result();

if ($result_posts->num_rows > 0) {
    echo "<h3>Your Profile:</h3>";
    while ($row = $result_posts->fetch_assoc()) {
        echo "<div>";
        echo "<h4>" . htmlentities($row['username']) . "</h4>";
        echo "<p>" . htmlentities($row['fullname']) . "</p>";
        echo "<p>" . htmlentities($row['email']) . "</p>";
        echo "<p>" . htmlentities($row['phone']) . "</p>";
        echo "</div>";
    }
} else {
    echo "<p>No profile found for username: " . $username . "</p>";
}

// Close the database connection
$stmt->close();
$mysqli->close();

?>

<a href="changepasswordform.php">Change Password</a> <br>
<a href="changeprofileform.php">Edit Profile</a><br>
<a href="logout.php">Logout</a>
</body>
</html>
