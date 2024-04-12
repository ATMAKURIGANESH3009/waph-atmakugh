<?php
    require "session_auth.php";
    $Username = $_SESSION['username'];
    $Fullname = $_REQUEST['new_fullname'];
    $Email = $_REQUEST['new_email'];
    $Phone = $_REQUEST['new_phone'];
    
    if (isset($Username) && isset($Fullname) && isset($Email) && isset($Phone)){
        echo "Debug> changeprofile.php got username=$Username; fullname=$Fullname; email=$Email; phone=$Phone";
        if (changeprofile($Username, $Fullname, $Email, $Phone)) {
            echo "Profile has been updated";
        } else {
            echo "Update failed";    
        }
    } else {
        echo "Required fields are missing!";
    }

    function changeprofile($Username, $Fullname, $Email, $Phone) {
        $mysqli = new mysqli('localhost', 'atmakugh', 'Prameela@123', 'waph_indproj2');
        if ($mysqli->connect_errno){
            printf("Database connection failed: %s\n", $mysqli->connect_error);
            return FALSE;
        }
        $prepared_sql = "UPDATE users SET fullname = ?, email = ?, phone = ? WHERE username = ?"; 
        $stmt = $mysqli->prepare($prepared_sql);
        $stmt->bind_param("ssss", $Fullname, $Email, $Phone, $Username);
        if($stmt->execute()) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
?>
<br>
<a href="logout.php">Logout</a>
