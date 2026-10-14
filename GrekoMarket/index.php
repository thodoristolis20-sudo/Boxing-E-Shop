<?php
session_start();
include 'includes/db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Greko Market</title>
    <link rel="stylesheet" href="css/style.css">
	<script src="js/script.js"></script>
</head>

<body>

    <nav>
        <h1>Greko Boxing</h1>

        <div>
            <a href="index.php">Home</a>
            <a href="cart.php">Cart</a>

            <?php
            if(isset($_SESSION['fullname'])) {
                echo "<span>Welcome, " . $_SESSION['fullname'] . "</span>";
                echo "<a href='logout.php'>Logout</a>";
            } else {
                echo "<a href='signup.php'>Sign Up</a>";
                echo "<a href='signin.php'>Sign In</a>";
            }
            ?>
        </div>
    </nav>

    <section class="hero">
        <h2>Best Boxing Equipment Store</h2>
        <p>Shop professional boxing gear and accessories.</p>
    </section>

    <section class="products">

        <?php

        $query = "SELECT * FROM products";
        $result = mysqli_query($conn, $query);

        while($row = mysqli_fetch_assoc($result)) {

        ?>

        <div class="product-card">

            <img src="images/<?php echo $row['image']; ?>" width="200">

            <h3><?php echo $row['product_name']; ?></h3>

            <p><?php echo $row['description']; ?></p>

            <h4>$<?php echo $row['price']; ?></h4>

            <a class="btn"
               onclick="addedToCart()"
               href="add_to_cart.php?id=<?php echo $row['id']; ?>">
               Add To Cart
             </a>
        </div>

        <?php
        }
        ?>

    </section>

</body>

</html>