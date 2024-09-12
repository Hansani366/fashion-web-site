<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    echo json_encode(['status' => 'error', 'message' => 'Please log in to add items to your wishlist.']);
    exit();
}

$user_id = $_SESSION['user_id'];
$product_id = isset($_POST['product_id']) ? intval($_POST['product_id']) : 0;

// Check if product ID is valid
if ($product_id <= 0) {
    echo json_encode(['status' => 'error', 'message' => 'Invalid product ID.']);
    exit();
}


$host = "localhost"; 
$db = "ecommerce"; 
$user = "root";  
$pass = "";  

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if the product is already in the wishlist
    $checkQuery = $conn->prepare("SELECT * FROM wishlist WHERE user_id = :user_id AND product_id = :product_id");
    $checkQuery->execute(['user_id' => $user_id, 'product_id' => $product_id]);

    if ($checkQuery->rowCount() > 0) {
        echo json_encode(['status' => 'error', 'message' => 'Product is already in your wishlist.']);
    } else {
        // Insert product into wishlist
        $query = $conn->prepare("INSERT INTO wishlist (user_id, product_id) VALUES (:user_id, :product_id)");
        $query->execute(['user_id' => $user_id, 'product_id' => $product_id]);

        echo json_encode(['status' => 'success', 'message' => 'Product added to wishlist successfully.']);
    }
} catch (PDOException $e) {
    echo json_encode(['status' => 'error', 'message' => 'Database error: ' . $e->getMessage()]);
}
?>
<script>
function addToWishlist(productId) {
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'add_to_wishlist.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var response = JSON.parse(xhr.responseText);
            alert(response.message);  // Show success or error message
        }
    };
    xhr.send('product_id=' + productId);
}
</script>

