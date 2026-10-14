<?php

session_start();
include 'includes/db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<nav>
    <h1>Greko Boxing</h1>

    <div>
        <a href="index.php">Home</a>
        <a href="logout.php">Logout</a>
    </div>
</nav>

<div class="cart-container">

    <h2>Your Shopping Cart</h2>

    <?php

    $total = 0;

    if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0){

        foreach($_SESSION['cart'] as $index => $product_id){

            $query = "SELECT * FROM products WHERE id='$product_id'";

            $result = mysqli_query($conn, $query);

            while($row = mysqli_fetch_assoc($result)){

                $total += $row['price'];

    ?>

    <div class="cart-item">

        <img src="images/<?php echo $row['image']; ?>" width="120">

        <div>

            <h3><?php echo $row['product_name']; ?></h3>

            <p><?php echo $row['description']; ?></p>

            <h4>$<?php echo $row['price']; ?></h4>

            <a class="remove-btn"
               href="remove_from_cart.php?index=<?php echo $index; ?>">
               Remove Item
            </a>

        </div>

    </div>

    <?php

            }
        }

        echo "<h2>Total: $$total</h2>";

    } else {

        echo "<p>Your cart is empty.</p>";
    }

    ?>

</div>

</body>
</html>