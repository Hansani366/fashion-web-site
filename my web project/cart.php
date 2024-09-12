<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$statusMessage = '';
if (isset($_GET['status']) && $_GET['status'] == 'deleted') {
    $statusMessage = "";
}


$sql = "SELECT id, product_name, product_price FROM cart";
$result = $conn->query($sql);


$totalPrice = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart</title>

   
    <style>
       body {
    font-family: 'Arial', sans-serif;
    background-color: #f8f9fa;
    margin: 0;
    padding: 20px;
    color: #333;
}

h1 {
    text-align: center;
    color: #343a40;
    margin-bottom: 20px;
    font-size: 2em;
    font-weight: bold;
}

.cart-container {
    padding: 20px;
    background-color: #ffffff;
    border-radius: 10px;
    max-width: 1000px;
    margin: 0 auto;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

table {
    width: 100%;
    border-collapse: collapse;
    background-color: #ffffff;
    border-radius: 8px;
    overflow: hidden;
    margin-bottom: 20px;
}

th, td {
    padding: 15px;
    text-align: center;
    border: 1px solid #dee2e6;
}

th {
    background-color: #007bff;
    color: #ffffff;
    font-size: 1.1em;
}

td {
    background-color: #f8f9fa;
}

tr:nth-child(even) td {
    background-color: #e9ecef;
}

tr:hover td {
    background-color: #d6e9f5;
}

.remove-btn {
    color: #dc3545; 
    background-color: #fff; 
    border: 2px solid #dc3545; 
    padding: 8px 12px; 
    border-radius: 5px; 
    text-decoration: none; 
    font-weight: bold; 
    transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease; 
}

.remove-btn:hover {
    background-color: #dc3545; 
    color: #fff; 
    border-color: #dc3545;
}

.remove-btn:active {
    background-color: #c82333; 
    border-color: #c82333; 
    color: #fff; 
}

input[type='number'] {
    width: 60px;
    padding: 5px;
    border-radius: 5px;
    border: 1px solid #ced4da;
    text-align: center;
}

.total-price {
    text-align: right;
    font-size: 1.2em;
    font-weight: bold;
    margin-top: 20px;
    margin-right: 10%;
    color: #007bff;
}

.checkout-button {
    display: block;
    width: 200px;
    margin: 20px auto;
    padding: 15px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    text-align: center;
    font-size: 1.1em;
    cursor: pointer;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.checkout-button:hover {
    background-color: #0056b3;
}

.empty-cart {
    text-align: center;
    font-size: 1.3em;
    color: #868e96;
    margin-top: 30px;
}

nav {
    background-color: #e9ecef;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0.5em 0;
    border-bottom: 2px solid #007bff;
    font-family: Arial, sans-serif;
}

nav ul {
    display: flex;
    list-style: none;
    padding: 0;
    margin: 0;
}

nav ul li {
    position: relative;
}

nav a {
    display: block;
    color: #343a40;
    text-align: center;
    padding: 15px 20px;
    text-decoration: none;
    font-size: 1.1em;
    transition: background-color 0.3s ease, color 0.3s ease;
    font-family:bold;
}

nav a:hover, nav a.active {
    background-color: #007bff;
    color: #ffffff;
    border-radius: 5px;
}

nav ul li ul {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    background-color: #ffffff;
    padding: 0;
    list-style: none;
    border-radius: 5px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

nav ul li:hover ul {
    display: block;
}

nav ul li ul li {
    width: 200px;
}

nav ul li ul a {
    padding: 10px 15px;
    font-size: 1em;
    color: #343a40;
}

nav ul li ul a:hover {
    background-color: #f1f1f1;
}

</style>
</head>
<body>
<nav>
        <a href="index.php"><b>Home</b></a>
        <a href="product.php"><b>product</b></a>
        <a href="cart.php"><b>cart</b></a>
        <a href="checkout.php"><b>checkout</b></a>
        <a href="wishlist.php"><b>Wishlist </b><i class="fas fa-heart"></i></a>

    </nav>

  
    <?php if ($statusMessage): ?>
        <p class="status-message"><?= $statusMessage ?></p>
    <?php endif; ?>

    <div class="cart-container">
        <table>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Action</th>
            </tr>

            <?php
            // Check if there are rows in the cart
            if ($result->num_rows > 0) {
                // Output data of each row and calculate total price
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row["id"]) . "</td>";
                    echo "<td>" . htmlspecialchars($row["product_name"]) . "</td>";
                    echo "<td>LKR " . number_format($row["product_price"], 2) . "</td>";
                    echo "<td><a href='delete_from_cart.php?id=" . urlencode($row["id"]) . "' onclick=\"return confirm('Are you sure you want to delete this product?');\">Delete</a></td>";
                    echo "</tr>";

                    // Add product price to the total
                    $totalPrice += $row["product_price"];
                }
            } else {
                echo "<tr><td colspan='4' class='empty-cart'>Your cart is empty</td></tr>";
            }
            ?>
        </table>

        <!-- Display the total price if there are items in the cart -->
        <?php if ($totalPrice > 0): ?>
            <p class="total-price">Total: LKR <?= number_format($totalPrice, 2) ?></p>
            <!-- Checkout Button -->
            <a href="checkout.php" class="checkout-button">Proceed to Checkout</a>
        <?php endif; ?>
    </div>

</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
