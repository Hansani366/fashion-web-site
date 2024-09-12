<?php
session_start();

// Simulate product data with a more dynamic approach
$products = [];
$product_names = ['Spa Socks', 'Hair Straightener', 'flat men shoe', 'Body Lotion', 'Perfume', 'Hair Dryer', 'Face Mask'];
$prices = [450, 780, 550, 620, 1200, 900, 350];

// Dynamically generate product data
foreach ($product_names as $key => $name) {
    $products[$key + 1] = [
        'name' => $name,
        'price' => $prices[$key],
    ];
}

// Add product to wishlist
if (isset($_GET['action']) && $_GET['action'] == 'add') {
    $productId = $_GET['product_id'];
    
    if (isset($products[$productId])) {
        if (!isset($_SESSION['wishlist'])) {
            $_SESSION['wishlist'] = [];
        }

        if (!in_array($productId, $_SESSION['wishlist'])) {
            $_SESSION['wishlist'][] = $productId;
        }
    }
    header('Location: wishlist.php?status=success');
    exit();
}

// Remove product from wishlist
if (isset($_GET['action']) && $_GET['action'] == 'remove') {
    $productId = $_GET['product_id'];
    
    if (($key = array_search($productId, $_SESSION['wishlist'])) !== false) {
        unset($_SESSION['wishlist'][$key]);
    }
    header('Location: wishlist.php');
    exit();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Wishlist</title>
    <style>
       
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            color: #333;
            line-height: 1.6;
            padding: 20px;
        }

        h1 {
            font-size: 2rem;
            color: black;
            margin-bottom: 20px;
            font-family:bold;
        }

       
        ul {
            list-style: none;
            padding: 0;
            margin: 0 0 20px;
        }

        li {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 8px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: background-color 0.3s ease;
        }

        li:hover {
            background-color: #f1f1f1;
        }

        
        li span {
            font-size: 1.2rem;
            color: #333;
        }

        li span.price {
            color: #38A169;
            font-weight: bold;
        }

        
        a {
            text-decoration: none;
            background-color: black;
            color: white;
            padding: 8px 12px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            font-size: 0.9rem;
        }

        a:hover {
            background-color: #C53030;
        }

       
        a.back-to-products {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #3182CE;
            color: white;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        a.back-to-products:hover {
            background-color: #2B6CB0;
        }

        
        p {
            font-size: 1.1rem;
            color: black;
        }

    </style>
</head>
<body>
    <h1>Wish  Items</h1>

    <?php if (isset($_SESSION['wishlist']) && !empty($_SESSION['wishlist'])): ?>
        <ul>
            <?php foreach ($_SESSION['wishlist'] as $productId): ?>
                <li>
                    <?php echo $products[$productId]['name']; ?> - LKR <?php echo $products[$productId]['price']; ?>
                    <a href="wishlist.php?action=remove&product_id=<?php echo $productId; ?>">Remove</a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Your wishlist is empty.</p>
    <?php endif; ?>

    <a href="product.php" class="back-to-products">Back to Products</a>
</body>
</html>
