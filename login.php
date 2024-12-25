<?php include 'connection.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <form action="login_action.php" method="POST">
            <div class="title">Login</div>
            <div class="form">
                <div class="input_field">
                    <label>Email</label>
                    <input type="text" class="input" name="email" placeholder="Email" required>
                </div>
                <div class="input_field">
                    <label>Password</label>
                    <input type="password" class="input" name="password" placeholder="Password" required>
                </div>
                <div class="input_field">
                    <input type="submit" value="Login" class="btn" name="login">
                </div>
            </div>
            
            <!-- Display error messages at the bottom -->
            <?php if (isset($_GET['error'])): ?>
                <div class="error" style="text-align: center; margin-top: 10px; color: red;">
                    <?php 
                    if ($_GET['error'] == 'invalid_password') {
                        echo "Invalid password. Please try again.";
                    } elseif ($_GET['error'] == 'user_not_found') {
                        echo "No user found with this email.";
                    }
                    ?>
                </div>
            <?php endif; ?>
        </form>
    </div>


</body>
</html>
