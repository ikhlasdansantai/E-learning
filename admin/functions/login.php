<?php
session_start();
// Include configuration
include '../config/db.php';
$conn = connect();

// Get value from POST form
$username = $_POST['username'];
$userpass = $_POST['password'];

$sql = "SELECT * FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc(); 

// If a user existed in the database
if (mysqli_num_rows($result) > 0) {

    // Run this
    // Verify the hashed password with the password inputted by the user
    if (password_verify($userpass, $row['password'])){
        // If user is locked, redirect to login page
        if ($row['is_locked'] === 1) {
            header('Location: ../index.php?status=account_locked');
            die();
        }

        // If user submit valid password after a few invalid password, the incorrect attempts is restored to 0
        $restore_failed_login_attempt = "UPDATE users SET incorrect_attempts = '0' WHERE username = '$username'";
        $query_restore_failed_login_attempt = $conn->prepare($restore_failed_login_attempt);
        $query_restore_failed_login_attempt->execute();
        
        // If none of the condition above not met, session will be generated and the user will be redirected to home page
        $_SESSION['username'] = $username;
        $_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        header('Location: ../home.php');
    } else {
        // If user is locked, redirect to login page
        if ($row['is_locked'] === 1) {
            header('Location: ../index.php?status=account_locked');
            die();
        }

        // Incrementing incorrect attempts value by 1 on each invalid password submission
        $add_increment_failed_login = "UPDATE users SET incorrect_attempts = incorrect_attempts + 1 WHERE username = '$username'";
        $query_add_increment_failed_login = $conn->prepare($add_increment_failed_login);
        $query_add_increment_failed_login->execute();
        
        // If incorrect attempts was greater than 5, the account will be locked
        if ($row['incorrect_attempts'] > 3) {
            $lock_account = "UPDATE users SET is_locked = '1' WHERE username = '$username'";
            $query_lock_account = $conn->prepare($lock_account);
            $query_lock_account->execute(); 
            
        }
        header('Location: ../index.php?status=wrong_username_or_password');
    }
} else {

    // If login was unsuccessful, redirect to login page with failed message
    header('Location: ../index.php?status=wrong_username_or_password');
}
?>