<?php include 'connection.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Form</title>
</head>
<body>
    <div class="container">
        <form action="#" method="POST">
        <div class="title">
            Registration Form
        </div>
        <div class="form">
            <div class="input_field">
                <label>Full Name</label>
                <input type="text" class="input" name="fname" placeholder="Full Name">
            </div>
            <div class="input_field">
                <label>Email Address</label>
                <input type="text" class="input" name="email" placeholder="Email">
            </div>
            <div class="input_field">
                <label>Password</label>
                <input type="password" class="input" name="password" placeholder="Password">
            </div>
            <div class="input_field">
                <label>Mobile Number</label>
                <input type="text" class="input" name="mobile" placeholder="Mobile Number">
            </div>
            <div class="input_field">
                <label>Date of Birth</label>
                <input type="text" class="input" name="dob" placeholder="Date of Birth">
            </div>
            <div class="input_field">
                <label>Gender</label>
                <div class="custom_select">
                <select name="gender">
                    <option value="Not Selected">Select</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>

            </div>
            <div class="input_field">
                <label>Interests</label>
                <textarea class="textarea" name="interests" placeholder="Interests"></textarea>

            </div>
            <div class="input_field terms">
                <label class="check">
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <p>Agree with terms and conditions</p>
                
            </div>
            <div class="input_field">
                <input type="submit" value="Register" class="btn" name="register">
            </div>

        </div>
        </form>
    </div>
</body>
</html>

<?php
    if(isset($_POST['register'])){
        $fname = $_POST['fname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $mobile = $_POST['mobile'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $interests = $_POST['interests'];

        $query = "INSERT INTO user VALUES ('$fname', '$email', '$password', '$mobile', '$dob', '$gender', '$interests')";
        $data=mysqli_query($conn, $query);

        if ($data){
            echo "Data inserted into database";
        }
        else{
            echo "Failed to insert data into database";
        }

    }


?>


