<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
    
        body, h1, h2, p, a, input, button {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: white;
        }

        header {
            background-color: #292628;
            color: #f5f2f2;
            text-align: center;
            padding: 0.5em 0;
            font-family: serif;
            font-size: 25px;
            
        }

        header img {
            float: left;
            margin-right: 20px;
        }

        header form {
            display: flex;
            align-items: right;
            justify-content: right;
        }

        input[type="text"] {
            padding: 5px;
            font-size: 16px;
            border: 1px solid #fafdfd;
            border-radius: 4px;
            width: 250px;
        }

        button {
            padding: 10px 15px;
            background-color: #67acf1;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-left: 5px;
            transition: background-color 0.3s;
            
        }

        button:hover {
            background-color: #0056b3;
        }

       /* Styling for the top bar */
.top-bar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 8px 330px;
    background-color: #f8f9fa;
    border-bottom: 1px solid #e1e4e8;
}

.category-select {
    font-size: 16px;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    background-color: #fff;
    max-width: 300px; 
    flex: 1;
    margin-right: 0.5px; 
}

.auth-buttons {
    display: flex;
    gap: 0.5px; 
}

.button {
    text-decoration: none;
    font-size: 16px;
    color: #007bff;
    background-color: #fff;
    border: 1px solid #007bff;
    border-radius: 4px;
    padding: 6px 12px;
    transition: background-color 0.3s, color 0.3s;
}

.button:hover {
    background-color: #007bff;
    color: #fff;
}

.button:active {
    background-color: #0056b3;
    border-color: #004085;
}



        .category-select {
            font-size: 16px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #fff;
            flex: 1;
            font-family:bold;
        }

        

        nav {
            background-color: white;
            overflow: hidden;
        }

        nav a {
            float: left;
            display: block;
            color: black;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
            font-family:bold;
        }

        nav a:hover {
            background-color: #3ae2e7;
            color: black;
        }

        .main-banner {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: white;
            padding: 10px;
            color: white;
        }

        .banner-content {
            width: 40%;
        }

        .banner-content h1 {
            font-size: 30px;
            margin-bottom: 20px;
            color:black;
            font-family:bold;
        }

        .banner-content p {
            font-size: 15px;
            margin-bottom: 30px;
            color:black;
            font-family:bold;
        }

        .banner-content a {
            background-color: #ff6f61;
            padding: 10px 20px;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
            transition: background-color 0.3s;
            font-family:bold;
        }

        .banner-content a:hover {
            background-color: #d44e45;
        }

        .banner-image {
            width: 40%;
            text-align: right;
        }

        .banner-image img {
            max-width: 80%;
            height: auto;
            border-radius: 10px;
        }

        .category-section {
            display: flex;
            justify-content: space-between;
            gap: 10px;
            padding: 10px;
            background:black;
        }

        .category-card {
            flex: 1;
            text-align: center;
        }

        .category-card img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .card-text {
            padding: 10px;
            color: white;
        }

        .card-text h2 {
            font-size: 22px;
            margin: 15px 0;
        }

        .card-text p {
            font-size: 18px;
            color: #f3ebeb;
            margin-bottom: 15px;
            color:white;
        }

        .card-text a {
            display: inline-block;
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .card-text a:hover {
            background-color: #0056b3;
        }

        .slider {
    max-width: 100%;
    position: relative;
    overflow: hidden;
    margin-top: 20px;
}

.slides {
    display: flex;
    transition: transform 1s ease-in-out; 
    width: 100%; 
}

.slides img {
    width: 100%;
    height: auto;
}

        footer {
            background-color: #0f0f0f;
            color: rgb(238, 226, 226);
            text-align: center;
            padding: 10px;
            width: 100%;
            bottom: 0;
            position: fixed;
        }
        nav a i {
    color: red;
    margin-left: 5px;
}


    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>

<header>
    <img src="https://img.wethrift.com/kenia-ontiveros-beauty.jpg" width="200" height="200" alt="Header Image">
    <form action="/search" method="get">
        <input type="text" name="q" placeholder="Search in Q kit">
        <button type="submit">Search</button>
    </form>
</header>

<div class="top-bar">
    <select class="category-select">
        <option value="all">All Categories</option>
        <option value="health and beauty">Health and Beauty</option>
        <option value="babies and toys">Babies and Toys</option>
        <option value="women's fashion">Women's Fashion</option>
        <option value="men's fashion">Men's Fashion</option>
        <option value="watches and accessories">Watches and Accessories</option>
        <option value="sports and outdoor">Sports and Outdoor</option>
    </select>
    
    <a href="login.php" class="button">Login</a>
    <a href="signup.php" class="button">Sign Up</a>
</div>

<nav><b>
    <a href="#home">Home</a>
    <a href="product.php">Product</a>
    <a href="cart.php">Cart</a>
    <a href="checkout.php">Checkout</a>
    <a href="about.php">About</a>
    <a href="service.php">Services</a>
    <a href="help.php">Help and Support</a>
    <a href="wishlist.php">Wishlist <i class="fas fa-heart"></i></a>
</b>
</nav>


<div class="main-banner">
    <div class="banner-content">
        <h1>Fashion Mega Sale</h1>
        <p>70% OFF on orders above Rs 1000</p>
        <p>Luxury Mens Shirts</p>
        <a href="product.php" class="button">Shop Now</a>
    </div>
    <div class="banner-image">
        <img src="https://media.centrepointstores.com/i/centrepoint/SP_Offers_Block04MAR18.jpg" width="500" height="500" alt="Fashion Model">
    </div>
</div>
<div class="slider">
    <div class="slides">
        <img src="https://www.misterclippingpaths.com/wp-content/uploads/2018/07/categories.png" alt="Categories">
        <img src="https://www.dominatewear.com/cdn/shop/files/new_lap.jpg?v=1718271525&width=1500" alt="New Laptop">
    </div>
</div>

<div class="category-section">
    <div class="category-card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRia16acsIx4IqMQf4fUDTdJdAztqIfYir4Og&s" alt="Ladies Sunglasses">
        <div class="card-text">
            <h2>Ladies Sunglasses</h2>
            <p>50% OFF</p>
            <a href="checkout.php">Purchase Now</a>
        </div>
    </div>
    <div class="category-card">
        <img src="https://www.hypebeast.com/image/2008/10/the-hundreds-footware-johnson-mid-top-1.jpg" alt="Footwear Sale">
        <div class="card-text">
            <h2>Footwear Big Sale</h2>
            <p>50% OFF</p>
            <a href="product.php">Start Shopping</a>
        </div>
    </div>
    <div class="category-card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUqwHmyWFYMAuvGtqlSKPQfZwsoeKy3KOnSg&s" alt="Smart Watches">
        <div class="card-text">
            <h2>Smart Watches</h2>
            <p>50% OFF</p>
            <a href="product.php">Start Shopping</a>
        </div>
    </div>
</div>




<footer>
    <p>&copy; 2024 Q Kit Fashion Platform</p>
</footer>

<script>
    let slideIndex = 0;

function showSlides() {
    const slides = document.querySelector('.slides');
    const totalSlides = slides.children.length;

    slideIndex++;
    if (slideIndex >= totalSlides) {
        slideIndex = 0;
    }

   
    slides.style.transform = `translateX(${-slideIndex * 100}%)`;

 
    setTimeout(showSlides, 4000); 
}

window.onload = function() {
    const slides = document.querySelector('.slides');
    const totalSlides = slides.children.length;

   
    slides.style.width = `${totalSlides * 100}%`;

    showSlides(); 
};

    </script>
</body>
</html>