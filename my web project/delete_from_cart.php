<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Sanitize input

    // Delete the product from the cart table using the id
    $sql = "DELETE FROM cart WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        // Redirect back to cart.php after deletion with a 'status=deleted' message
        header('Location: cart.php?status=deleted');
        exit;
    } else {
        echo "Error deleting product: " . $conn->error;
    }
} else {
    echo "Invalid product ID";
}

// Close connection
$conn->close();
?>
