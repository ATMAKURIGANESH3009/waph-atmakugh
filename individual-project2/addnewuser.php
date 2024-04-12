


<?php
// Function to sanitize input
function sanitize_input($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input
    $username = sanitize_input($_POST['username']);
    $password = sanitize_input($_POST['password']);
    $fullname = sanitize_input($_POST['fullname']);
    $email = sanitize_input($_POST['email']);
    $phone = sanitize_input($_POST['phone']);

    // Check if required fields are missing
    if (empty($username) || empty($password) || empty($fullname) || empty($email) || empty($phone)) {
        die("Required fields are missing!");
    }

    // Validate username and password against client-side rules
    if (!preg_match("/\w+/", $username) || !preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&])[a-zA-Z0-9!@#$%^&]{8,}$/", $password)) {
        die("Invalid username or password!");
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format!");
    }

    // Validate phone number format (optional, if you have specific format requirements)
    // if (!preg_match("/^\d{10}$/", $phone)) {
    //     die("Invalid phone number format!");
    // }

    // Hash the password
    $hashed_password = md5($password);

    // Insert data into the database
    $mysqli = new mysqli('localhost', 'atmakugh', 'Prameela@123', 'waph_indproj2');
    if ($mysqli->connect_errno) {
        printf("Database connection failed: %s\n", $mysqli->connect_error);
        exit();
    }

    $prepared_sql = "INSERT INTO users (username, password, fullname, email, phone) VALUES (?, ?, ?, ?, ?)";
    $stmt = $mysqli->prepare($prepared_sql);
    $stmt->bind_param("sssss", $username, $hashed_password, $fullname, $email, $phone);

    if ($stmt->execute()) {
        echo "Registration Succeed!";
    } else {
        echo "Registration Failed";
    }

    $stmt->close();
    $mysqli->close();
}
?>
<a href="form.php">Login</a>
