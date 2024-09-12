<?php if (isset($_GET['status']) && $_GET['status'] == 'success'): ?>
    
<?php endif; ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Products</title>
<style>

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    background-color: #f4f4f4;
    color: #333;
}

header {
    background-color: #212166;
    color: white;
    text-align: center;
    padding: 1em 0;
}

header h1 {
    margin-bottom: 0.5em;
    font-size: 2em;
}

nav {
    background-color: #E8E8E8;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0.5em 0;
    border-bottom: 2px solid #3ae2e7; /* Add a bottom border for better visibility */
    font-family:bold;
}

nav ul {
    display: flex;
    list-style: none;
}

nav ul li {
    position: relative;
}

nav a {
    display: block;
    color: black;
    text-align: center;
    padding: 15px 20px;
    text-decoration: none;
    font-size: 1.1em;
    transition: background-color 0.3s ease, color 0.3s ease;
}

nav a:hover, nav a.active {
    background-color: #3ae2e7;
    color: black;
    border-radius: 5px; 
}

nav ul li ul {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    background-color: #110810;
    padding: 0;
    list-style: none;
    border-radius: 5px;
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
}

section {
    padding: 20px;
    max-width: 1200px;
    margin: 20px auto;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.product-list {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: space-between;
}

.product-detail {
    flex: 1 1 calc(25% - 20px);
    background-color: #f9f9f9;
    border-radius: 8px;
    text-align: left;
    padding: 10px;
    transition: transform 0.2s ease;
}

.product-detail:hover {
    transform: translateY(-5px);
    
}

.product-detail img {
    max-width: 50%;
    height: auto;
  
}

.product-detail h3 {
    font-size: 1em;
    margin-bottom: 10px;
    color: #333;
}

.product-detail p {
    font-size: 1.1em;
    color: #555;
}

.buy-now, .add-to-cart {
    border: none;
    padding: 2px 5px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1em;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

.buy-now {
    background-color: black;
    color: white;
}

.add-to-cart {
    background-color: black;
    color: white;
}

.buy-now:hover, .add-to-cart:hover {
    transform: translateY(-2px);
}

.buy-now:active, .add-to-cart:active {
    transform: translateY(1px);
}

.buy-now:hover {
    background-color: black;
}

.add-to-cart:hover {
    background-color: black;
}

footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 1em 0;
    position: relative;
    bottom: 0;
}

.add-to-wishlist {
    background-color: black;
    color: white;
    border: none;
    padding: 5px 10px;
    font-size: 14px;
    font-weight: bold;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

.add-to-wishlist:hover {
    background-color: #e91e63;
    transform: translateY(-2px);
}

.add-to-wishlist:active {
    background-color: #c2185b;
    transform: translateY(1px);
}


@media (max-width: 1200px) {
    .product-detail {
        flex: 1 1 calc(33.333% - 20px);
    }
}

@media (max-width: 768px) {
    .product-detail {
        flex: 1 1 calc(50% - 20px);
    }
}

@media (max-width: 480px) {
    .product-detail {
        flex: 1 1 100%;
    }
}
.banner {
    
    width: 100%;
    height: 400px; 
    background-image: url('https://www.windsorstore.com/cdn/shop/articles/6dd4711b-what-to-wear-to-graduation-outfits-for-grads-and-guests-2023_c650d25b-6e71-4096-a3ed-739ed1892001_1200x1200.jpg?v=1680651803');
    background-size: cover;
    background-position: center;
    border-bottom: 10px ;
    display: flex;
    align-items: center;
    justify-content: center;
    color: black;
    text-align: center;
    overflow: hidden;
    transition: transform 0.6s ease;
}

.banner:hover {
    transform: scale(1.02); 
}

.banner-content {
    position: relative;
    z-index: 1;
}

.banner h1 {
    font-size: 2.5em;
    margin: 0;
    padding: 0;
    font-weight: bold;
    animation: fadeIn 2s ease-in-out;
}

.banner p {
    font-size: 1.2em;
    margin: 10px 0;
    animation: fadeIn 3s ease-in-out;
}

.cta-button {
    display: inline-block;
    padding: 10px 20px;
    font-size: 1.2em;
    color: #fff;
    background-color: black;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.cta-button:hover {
    background-color: #333;
    transform: translateY(-3px);
}


@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(-20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}


@media (max-width: 768px) {
    .banner {
        height: 250px; 
    }
    
    .banner h1 {
        font-size: 2em;
    }
    
    .banner p {
        font-size: 1em;
    }
    
    .cta-button {
        font-size: 1em;
        padding: 8px 16px;
    }
}

</style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


</head>
<body>
   
    <nav>
        <a href="index.php"><b>Home</b></a>
        <a href="product.php"><b>product</b></a>
        <a href="cart.php"><b>cart</b></a>
        <a href="checkout.php"><b>checkout</b></a>
        <a href="wishlist.php"><b>Wishlist </b><i class="fas fa-heart"></i></a>

    </nav>

    <div class="banner">
            <div class="banner-content">
                <h1>Welcome to Our Product Showcase</h1>
                <p>Explore our latest collection</p>
                <a href="product.php" class="cta-button">Shop Now</a>
            </div>
        </div>
    
    <section>
        <div class="product-list">
            <div class="product-detail">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSlzahkNfbZnAEepoHAweewrtebDursO6aabA&s" alt="Product 1">
                <h3>Spa Socks</h3>
                <p>Price: LKR 450</p>
                <button class="buy-now" onclick="navigateToSignup()">Buy now</button>
                <button class="add-to-cart" onclick="addToCart('Spa Socks', 450)">Add to Cart</button>
                <button class="add-to-wishlist" onclick="addToWishlist(1)"><i class="fas fa-heart"></i></button>

    </div>
    <div class="product-detail">
                <img src="https://img.lazcdn.com/3rd/q/aHR0cHM6Ly9zdGF0aWMtMDEuZGFyYXoubGsvcC82NjI4NzdjNTJhMmYwNTU4YmFmNDQ0NThlNDQ0MzBiZC5qcGc=_200x200q80.png_.webp" alt="Product 2">
                <h3>Hair Straightener</h3>
                <p>Price: LKR 780</p>
                <button class="buy-now" onclick="navigateToSignup()">Buy now</button>
                <button class="add-to-cart" onclick="addToCart('hair straightener', 780)">Add to Cart</button>
                <button class="add-to-wishlist" onclick="addToWishlist(2)"><i class="fas fa-heart"></i></button>

            </div>
            <div class="product-detail">
                <img src="https://ae01.alicdn.com/kf/Sfa0ccf719ffe49e08ac8783e0d30620aO.jpg_220x220q75.jpg_.webp" alt="Product 3">
                <h3>Flat Men's Shoes</h3>
                <p>Price: LKR 5,364</p>
                <button class="buy-now" onclick="navigateToSignup()">Buy now</button>
                <button class="add-to-cart" onclick="addToCart('mens shoes', 5634)">Add to Cart</button>
                <button class="add-to-wishlist" onclick="addToWishlist(3)"><i class="fas fa-heart"></i></button>
            </div>
            <div class="product-detail">
                <img src="https://ae-pic-a1.aliexpress-media.com/kf/Hc2addbccb4644c7dbf974e1d276eb46eD.jpg_480x480.jpg_.webp" alt="Product 4">
                <h3>Nail polish</h3>
                <p>Price: LKR 860</p>
                <button class="buy-now" onclick="navigateToSignup()">Buy now</button>
                <button class="add-to-cart" onclick="addToCart('nail polish',860)">Add to Cart</button>
                <button class="add-to-wishlist" onclick="addToWishlist(4)"><i class="fas fa-heart"></i></button>
            </div>
            <div class="product-detail">
                <img src="https://ae-pic-a1.aliexpress-media.com/kf/H0616a65265604e24a1a099d557bd6b2dt.jpg_480x480.jpg_.webp" alt="Product 5">
                <h3>Handiyan Lipstick</h3>
                <p>Price: LKR 989</p>
                <button class="buy-now" onclick="navigateToSignup()">Buy now</button>
                <button class="add-to-cart" onclick="addToCart('Handiyan Lipsticks',989)">Add to Cart</button>
                <button class="add-to-wishlist" onclick="addToWishlist(5)"><i class="fas fa-heart"></i></button>
            </div>
            <div class="product-detail">
                <img src="https://ae-pic-a1.aliexpress-media.com/kf/H831f008d5c6b41179ea8ceb0f517b3bc7.jpg_480x480.jpg_.webp" alt="Product 6">
                <h3>Ladies crop top</h3>
                <p>Price: LKR 1,250</p>
                <button class="buy-now" onclick="navigateToSignup()">Buy now</button>
                <button class="add-to-cart" onclick="addToCart('ladies crop top', 1250)">Add to Cart</button>
                <button class="add-to-wishlist" onclick="addToWishlist(6)"><i class="fas fa-heart"></i></button>
            </div>
            <div class="product-detail">
                <img src="https://ae-pic-a1.aliexpress-media.com/kf/HTB1.mt0XZvrK1Rjy0Feq6ATmVXaK.jpg_480x480.jpg_.webp" alt="Product 7">
                <h3>Earings</h3>
                <p>Price: LKR 200</p>
                <button class="buy-now" onclick="navigateToSignup()">Buy now</button>
                <button class="add-to-cart" onclick="addToCart('earings', 200)">Add to Cart</button>
                <button class="add-to-wishlist" onclick="addToWishlist(7)"><i class="fas fa-heart"></i></button>
            </div>
            <div class="product-detail">
                <img src="https://ae-pic-a1.aliexpress-media.com/kf/S34488e3710074ce59775ef3e1ca398d3b.jpg_480x480.jpg_.webp" alt="Product 8">
                <h3>Eye liner</h3>
                <p>Price: LKR 670</p>
                <button class="buy-now" onclick="navigateToSignup()">Buy now</button>
                <button class="add-to-cart" onclick="addToCart('eye liner', 670)">Add to Cart</button>
                <button class="add-to-wishlist" onclick="addToWishlist(8)"><i class="fas fa-heart"></i></button>
            </div>
            <div class="product-detail">
                <img src="https://ae-pic-a1.aliexpress-media.com/kf/Sdbf76437892049f790f58f8337bda3e4I.jpg_480x480.jpg_.webp" alt="Product 9">
                <h3>Nail polish</h3>
                <p>Price: LKR 700</p>
                <button class="buy-now" onclick="navigateToSignup()">Buy now</button>
                <button class="add-to-cart" onclick="addToCart('nail polish', 700)">Add to Cart</button>
                <button class="add-to-wishlist" onclick="addToWishlist(9)"><i class="fas fa-heart"></i></button>
            </div>
            <div class="product-detail">
                <img src="https://ae-pic-a1.aliexpress-media.com/kf/H85eef487625d4b5abc48f32ae35929b5w.jpg_480x480.jpg_.webp" alt="Product 10">
                <h3>Silver Neckless</h3>
                <p>Price: LKR 1,550</p>
                <button class="buy-now" onclick="navigateToSignup()">Buy now</button>
                <button class="add-to-cart" onclick="addToCart('Neckless', 1550)">Add to Cart</button>
                <button class="add-to-wishlist" onclick="addToWishlist(10)"><i class="fas fa-heart"></i></button>
            </div>
            <div class="product-detail">
                <img src="https://ae-pic-a1.aliexpress-media.com/kf/S25f75728cddf4ce0a8a9dc96ce289428A.jpg_480x480.jpg_.webp" alt="Product 11">
                <h3>cute hair clips</h3>
                <p>Price: LKR 170</p>
                <button class="buy-now" onclick="navigateToSignup()">Buy now</button>
                <button class="add-to-cart" onclick="addToCart('cute hair clips', 170)">Add to Cart</button>
                <button class="add-to-wishlist" onclick="addToWishlist(11)"><i class="fas fa-heart"></i></button>
            </div>
            <div class="product-detail">
                <img src="https://ae-pic-a1.aliexpress-media.com/kf/Seffe48f14a7643b39f1e737b3f3979001.jpg_480x480.jpg_.webp" alt="Product 12">
                <h3>silver  ring</h3>
                <p>Price: LKR 1,300</p>
                <button class="buy-now" onclick="navigateToSignup()">Buy now</button>
                <button class="add-to-cart" onclick="addToCart('silver ring', 540)">Add to Cart</button>
                <button class="add-to-wishlist" onclick="addToWishlist(12)"><i class="fas fa-heart"></i></button>
            </div>
            <div class="product-detail">
                <img src="https://ae-pic-a1.aliexpress-media.com/kf/Sa167e81e5a2940c08e8f84215cb8d1752.jpg_480x480.jpg_.webp" alt="Product 13">
                <h3>Girls t-shirt</h3>
                <p>Price: LKR 1,700</p>
                <button class="buy-now" onclick="navigateToSignup()">Buy now</button>
                <button class="add-to-cart" onclick="addToCart('girls t-shirt', 1700)">Add to Cart</button>
                <button class="add-to-wishlist" onclick="addToWishlist(13)"><i class="fas fa-heart"></i></button>
            </div>
            <div class="product-detail">
                <img src="https://ae-pic-a1.aliexpress-media.com/kf/S7af10e7afb92464da2ce989b57aba6a0s.jpg_480x480.jpg_.webp" alt="Product 14">
                <h3>Dr.Rashel vitamin C serum</h3>
                <p>Price: LKR 2,150</p>
                <button class="buy-now" onclick="navigateToSignup()">Buy now</button>
                <button class="add-to-cart" onclick="addToCart('Dr.Rashel vitamin C serum',2150)">Add to Cart</button>
                <button class="add-to-wishlist" onclick="addToWishlist(14)"><i class="fas fa-heart"></i></button>
            </div>
            <div class="product-detail">
                <img src="https://img.lazcdn.com/3rd/q/aHR0cHM6Ly9say1saXZlLTIxLnNsYXRpYy5uZXQva2YvU2ZmZjQyYjBiMGIxZDRiNWQ5OTM5YTQ2YjNmZDZmYmY4WC5qcGc=_200x200q80.png_.webp" alt="Product 15">
                <h3>smart watches</h3>
                <p>Price: LKR 5,400</p>
                <button class="buy-now" onclick="navigateToSignup()">Buy now</button>
                <button class="add-to-cart" onclick="addToCart('smart watches', 5400)">Add to Cart</button>
                <button class="add-to-wishlist" onclick="addToWishlist(15)"><i class="fas fa-heart"></i></button>
            </div>
            <div class="product-detail">
                <img src="https://img.lazcdn.com/3rd/q/aHR0cHM6Ly9say1saXZlLTIxLnNsYXRpYy5uZXQva2YvUzc0OWFhYTYxZmFkYTQ5ZDFhMWY2NmQ0OGRhYjg2Mzc4VC5qcGc=_200x200q80.png_.webp" alt="Product 16">
                <h3>Mens trousers</h3>
                <p>Price: LKR 6,200</p>
                <button class="buy-now" onclick="navigateToSignup()">Buy now</button>
                <button class="add-to-cart" onclick="addToCart('Mens trousers',6200)">Add to Cart</button>
                <button class="add-to-wishlist" onclick="addToWishlist(16)"><i class="fas fa-heart"></i></button>
            </div>
            <div class="product-detail">
                <img src="https://img.drz.lazcdn.com/g/kf/S1489f8c144684200badafcfe69b5fa99l.jpg_200x200q80.jpg_.webp" alt="Product 17">
                <h3>women's luxury watches</h3>
                <p>Price: LKR 3,150</p>
                <button class="buy-now" onclick="navigateToSignup()">Buy now</button>
                <button class="add-to-cart" onclick="addToCart('womens luxery watches',3150)">Add to Cart</button>
                <button class="add-to-wishlist" onclick="addToWishlist(17)"><i class="fas fa-heart"></i></button>
            </div>
            <div class="product-detail">
                <img src="https://img.drz.lazcdn.com/static/lk/p/637d35096ad15cee2c3931fdb908ef63.jpg_200x200q80.jpg_.webp" alt="Product 16">
                <h3>mini beauty trimmer</h3>
                <p>Price: LKR 890</p>
                <button class="buy-now" onclick="navigateToSignup()">Buy now</button>
                <button class="add-to-cart" onclick="addToCart('mini beauty trimmer',890)">Add to Cart</button>
                <button class="add-to-wishlist" onclick="addToWishlist(18)"><i class="fas fa-heart"></i></button>
            </div>
            <div class="product-detail">
                <img src="https://img.lazcdn.com/3rd/q/aHR0cHM6Ly9say1saXZlLTIxLnNsYXRpYy5uZXQva2YvUzUxN2RkMmExNmZkZjRmMmZhNWFlMmY4MzMyYTVlM2I3cC5qcGc=_200x200q80.png_.webp" alt="Product 16">
                <h3>Mens wallets</h3>
                <p>Price: LKR 1,200</p>
                <button class="buy-now" onclick="navigateToSignup()">Buy now</button>
                <button class="add-to-cart" onclick="addToCart('Mens wallet',1200)">Add to Cart</button>
                <button class="add-to-wishlist" onclick="addToWishlist(19)"><i class="fas fa-heart"></i></button>
            </div>
            <div class="product-detail">
                <img src="https://img.lazcdn.com/3rd/q/aHR0cHM6Ly9say1saXZlLTIxLnNsYXRpYy5uZXQva2YvUzE4MDIxNjZkM2NkOTQ2OTViYjNjNjlmZDZkZWNmZTdkZy5qcGc=_200x200q80.png_.webp" alt="Product 16">
                <h3>silver cap</h3>
                <p>Price: LKR 750</p>
                <button class="buy-now" onclick="navigateToSignup()">Buy now</button>
                <button class="add-to-cart" onclick="addToCart('silver cap',750)">Add to Cart</button>
                <button class="add-to-wishlist" onclick="addToWishlist(20)"><i class="fas fa-heart"></i></button>
            </div>
            <div class="product-detail">
                <img src="https://img.lazcdn.com/3rd/q/aHR0cHM6Ly9say1saXZlLTIxLnNsYXRpYy5uZXQva2YvUzUyODkzNzY3YTQzNjRhYjRiZDg0Y2FlNGU3NjAzMDBhSy5qcGc=_200x200q80.png_.webp" alt="Product 16">
                <h3>Men's beauty T</h3>
                <p>Price: LKR 2,000</p>
                <button class="buy-now" onclick="navigateToSignup()">Buy now</button>
                <button class="add-to-cart" onclick="addToCart('Mens beauty T',2000)">Add to Cart</button>
                <button class="add-to-wishlist" onclick="addToWishlist(21)"><i class="fas fa-heart"></i></button>
            </div>
            <div class="product-detail">
                <img src="https://img.lazcdn.com/3rd/q/aHR0cHM6Ly9say1saXZlLTIxLnNsYXRpYy5uZXQva2YvUzM0NWU2NDM2NTk0ODRmMmQ5NjU2NzcxY2JjYzc0N2U0Vy5qcGc=_200x200q80.png_.webp" alt="Product 16">
                <h3>luxury mens t-shirt</h3>
                <p>Price: LKR 2,200</p>
                <button class="buy-now" onclick="navigateToSignup()">Buy now</button>
                <button class="add-to-cart" onclick="addToCart('luxury mens tshirt',2200)">Add to Cart</button>
                <button class="add-to-wishlist" onclick="addToWishlist(22)"><i class="fas fa-heart"></i></button>
            </div>
            <div class="product-detail">
                <img src="https://img.lazcdn.com/3rd/q/aHR0cHM6Ly9say1saXZlLTIxLnNsYXRpYy5uZXQva2YvUzRiOTk3ODZlOTMxNDRlNGNhOGQzNTgzZGEzOWQyZmEzMS5qcGc=_200x200q80.png_.webp" alt="Product 16">
                <h3>girls raincaot</h3>
                <p>Price: LKR 3,500</p>
                <button class="buy-now" onclick="navigateToSignup()">Buy now</button>
                <button class="add-to-cart" onclick="addToCart('girls taincaot',3500)">Add to Cart</button>
                <button class="add-to-wishlist" onclick="addToWishlist(23)"><i class="fas fa-heart"></i></button>
            </div>
            <div class="product-detail">
                <img src="https://img.drz.lazcdn.com/g/kf/S998e86c0a8c24338b2218d1fe671e18f5.png_200x200q80.png_.webp" alt="Product 16">
                <h3>silicon face ice cube</h3>
                <p>Price: LKR 843</p>
                <button class="buy-now" onclick="navigateToSignup()">Buy now</button>
                <button class="add-to-cart" onclick="addToCart('silicon face ice cube',843)">Add to Cart</button>
                <button class="add-to-wishlist" onclick="addToWishlist(24)"><i class="fas fa-heart"></i></button>
            </div>
            <div class="product-detail">
                <img src="https://img.drz.lazcdn.com/g/kf/S3d56b529b79e44bf810479db0fc7d985Q.jpg_200x200q80.jpg_.webp" alt="Product 16">
                <h3>Men's shoes</h3>
                <p>Price: LKR 6,000</p>
                <button class="buy-now" onclick="navigateToSignup()">Buy now</button>
                <button class="add-to-cart" onclick="addToCart('Mens shoes',6000)">Add to Cart</button>
                <button class="add-to-wishlist" onclick="addToWishlist(25)"><i class="fas fa-heart"></i></button>
            </div>
            <div class="product-detail">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPwPGOCDknzUICTA5-BYoJ1zLGd6aI5ATCDA&s" alt="Product 16">
                <h3>new born baby kit</h3>
                <p>Price: LKR 2,000</p>
                <button class="buy-now" onclick="navigateToSignup()">Buy now</button>
                <button class="add-to-cart" onclick="addToCart('new born baby kit',2000)">Add to Cart</button>
                <button class="add-to-wishlist" onclick="addToWishlist(26)"><i class="fas fa-heart"></i></button>
            </div>
            <div class="product-detail">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT0lenvI01TCIWn_pQq2oVRC1qs62t45ACTew&s" alt="Product 16">
                <h3>kid's hair bands</h3>
                <p>Price: LKR 350</p>
                <button class="buy-now" onclick="navigateToSignup()">Buy now</button>
                <button class="add-to-cart" onclick="addToCart('kids hair band',350)">Add to Cart</button>
                <button class="add-to-wishlist" onclick="addToWishlist(27)"><i class="fas fa-heart"></i></button>
            </div>
            <div class="product-detail">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_xzEqlHnukMmkvocKdi-2YC5RNEhO1u_QSw&s" alt="Product 16">
                <h3>kid's accessories</h3>
                <p>Price: LKR 670</p>
                <button class="buy-now" onclick="navigateToSignup()">Buy now</button>
                <button class="add-to-cart" onclick="addToCart('kids accessories',670)">Add to Cart</button>
                <button class="add-to-wishlist" onclick="addToWishlist(28)"><i class="fas fa-heart"></i></button>
            </div>
            
    </section>

    <footer>
        <p>&copy; 2024 My E-Commerce Website.</p>
    </footer>
    <script>
    function navigateToSignup() {
        window.location.href = "signup.php";
    }

    function addToCart(productName, price) {
        // Send product details to the add_to_cart.php script via AJAX
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "add_to_cart.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                alert(productName + ' has been added to your cart. Price: LKR ' + price);
                window.location.href = "product.php?status=success"; 
            }
        };
        xhr.send("product_name=" + productName + "&price=" + price);
    }
</script>
<script>
        function addToWishlist(productId) {
            window.location.href = 'wishlist.php?action=add&product_id=' + productId;
        }
    </script>

</body>
</html>
