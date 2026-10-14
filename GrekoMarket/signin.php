<?php

session_start();
include 'includes/db.php';

if(isset($_POST['signin'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM customers WHERE email='$email'";

    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0){

        $user = mysqli_fetch_assoc($result);

        if(password_verify($password, $user['password'])){

            $_SESSION['fullname'] = $user['fullname'];

            header("Location: index.php");

        } else {

            $error = "Incorrect Password";
        }

    } else {

        $error = "User Not Found";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sign In</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="form-container">

    <h2>Sign In</h2>

    <?php
    if(isset($error)){
        echo "<p class='error'>$error</p>";
    }
    ?>

    <form method="POST">

        <input type="email"
               name="email"
               placeholder="Email"
               required>

        <input type="password"
               name="password"
               placeholder="Password"
               required>

        <button type="submit" name="signin">
            Sign In
        </button>

    </form>

    <p>
        Don't have an account?
        <a href="signup.php">Create One</a>
    </p>

</div>

</body>
</html>