<?php
session_start();


$servername = "localhost"; 
$dbUsername = "root"; 
$dbPassword = ""; 
$dbname = "ecommerce"; 


$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $phone_number = $_POST['phone']; 
    $password = $_POST['password'];

    
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? OR phone_number = ?");
    $stmt->bind_param("ss", $username, $phone_number);

    
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        
        echo "<script>alert('Username or Phone number already exists.');</script>";
    } else {
        
        $stmt = $conn->prepare("INSERT INTO users (username, phone_number, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $phone_number, $hashed_password);

        if ($stmt->execute()) {
            echo "<script>alert('Signup successful!');</script>";
        } else {
            echo "<script>alert('Error: Could not sign up.');</script>";
        }
    }

    
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form with Watermark</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            position: relative;
        }

        
        .watermark {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://images.alphacoders.com/274/thumb-1920-274901.jpg') no-repeat center center;
            background-size: cover;
            opacity: 0.3; 
            pointer-events: none;
        }

        .signup-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            z-index: 1; 
            position: relative;
        }

        .signup-container h2 {
            margin-bottom: 20px;
            text-align: center;
        }

        .signup-container input[type="text"],
        .signup-container input[type="tel"],
        .signup-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .signup-container button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .signup-container button:hover {
            background-color: #218838;
        }

        .signup-container .login-link {
            text-align: center;
            margin-top: 20px;
        }

        #msg {
            margin-bottom: 10px;
            font-weight: bold;
            color: red;
        }
    </style>
</head>
<body>

    
    <div class="watermark"></div>

    <div class="signup-container">
        <h2>Sign Up</h2>
        <div id="msg"></div>
        <form id="signupForm" action="signup.php" method="post">
            <input type="text" id="username" name="username" placeholder="Username" required>
            <input type="tel" id="phone" name="phone" placeholder="Phone Number (+94XXXXXXXXX)" required>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <button type="submit">Sign Up</button>
            <div class="login-link">
                <a href="login.php">Already have an account? Login</a>
            </div>
        </form>
    </div>

    <script>
        
        function isValidPhone(phone) {
            const phonePattern = /^\+94\d{9}$/; 
            return phonePattern.test(phone);
        }

        
        document.getElementById('signupForm').addEventListener('submit', function(event) {
            const username = document.getElementById('username').value;
            const phone = document.getElementById('phone').value;
            const password = document.getElementById('password').value;

            
            if (username === '' || phone === '' || password === '') {
                document.getElementById('msg').textContent = 'Please fill in all fields.';
                event.preventDefault(); 
            } 
            
            else if (!isValidPhone(phone)) {
                document.getElementById('msg').textContent = 'Please enter a valid phone number in the format +94XXXXXXXXX.';
                event.preventDefault(); 
            } 
            else {
                document.getElementById('msg').textContent = ''; 
            }
        });
    </script>

</body>
</html>