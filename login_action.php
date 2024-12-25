<?php
include 'connection.php';
session_start();

if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Fetch user details
    $query = "SELECT * FROM user WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);

        // Verify password
        if (password_verify($password, $user['password'])) {
            // Set session variables
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['user_name'] = $user['fname'];

            // Redirect to home page
            header("Location: home.php");
            exit;
        } else {
            //echo "Invalid password.";
            header("Location: login.php?error=invalid_password");
            exit;
        }
    } else {
        //echo "No user found with this email.";
        header("Location: login.php?error=user_not_found");
        exit;
    }
}
?>


