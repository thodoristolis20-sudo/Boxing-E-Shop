<?php

session_start();
include 'includes/db.php';

if(isset($_POST['signup'])){

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $checkEmail = "SELECT * FROM customers WHERE email='$email'";
    $result = mysqli_query($conn, $checkEmail);

    if(mysqli_num_rows($result) > 0){

        $error = "Email already exists";

    } else {

        $query = "INSERT INTO customers(fullname, email, password)
                  VALUES('$fullname', '$email', '$password')";

        if(mysqli_query($conn, $query)){

            $_SESSION['fullname'] = $fullname;

            header("Location: index.php");
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="form-container">

    <h2>Create Account</h2>

    <?php
    if(isset($error)){
        echo "<p class='error'>$error</p>";
    }
    ?>

    <form method="POST">

        <input type="text"
               name="fullname"
               placeholder="Full Name"
               required>

        <input type="email"
               name="email"
               placeholder="Email"
               required>

        <input type="password"
               name="password"
               placeholder="Password"
               required>

        <button type="submit" name="signup">
            Sign Up
        </button>

    </form>

    <p>
        Already have an account?
        <a href="signin.php">Sign In</a>
    </p>

</div>

</body>
</html>