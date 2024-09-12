<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the cart table
$sql = "SELECT id, product_name, product_price FROM cart";
$result = $conn->query($sql);

// Initialize total price variable
$totalPrice = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>

    
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
            color: #333;
        }

        h1 {
            text-align: center;
            color: #333;
            font-size: 2em;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            max-width: 900px;
            margin: 0 auto 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 15px;
            text-align: center;
            font-size: 1em;
        }

        th {
            background-color: #4caf50;
            color: #fff;
            font-size: 1.2em;
            text-transform: uppercase;
        }

        td {
            background-color: #fafafa;
        }

        tr:nth-child(even) td {
            background-color: #f2f2f2;
        }

        tr:hover td {
            background-color: #e0f7fa;
        }

        .total-price {
            text-align: right;
            font-size: 1.2em;
            font-weight: bold;
            margin-top: 10px;
            margin-right: 10%;
        }

        .checkout-form {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .checkout-form label {
            display: block;
            margin-bottom: 8px;
        }

        .checkout-form input[type="text"],
        .checkout-form input[type="email"],
        .checkout-form input[type="number"],
        .checkout-form textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .checkout-form button {
            padding: 10px 20px;
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.1em;
        }

        .checkout-form button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <h1>Checkout</h1>

    <div class="checkout-summary">
        <table>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Product Price</th>
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
                    echo "</tr>";

                    // Add product price to the total
                    $totalPrice += $row["product_price"];
                }
            } else {
                echo "<tr><td colspan='3' class='empty-cart'>Your cart is empty</td></tr>";
            }
            ?>
        </table>

        <!-- Display the total price -->
        <p class="total-price">Total: LKR <?= number_format($totalPrice, 2) ?></p>
    </div>

    <!-- Checkout Form -->
    <div class="checkout-form">
        <form action="process_checkout.php" method="POST">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>

            <label for="address">Shipping Address:</label>
            <textarea id="address" name="address" rows="4" required></textarea>

            <label for="phone">Phone Number:</label>
            <input type="number" id="phone" name="phone" required>

            <input type="hidden" name="total_price" value="<?= $totalPrice ?>">

            <button type="submit">Complete Purchase</button>
        </form>
    </div>

</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
