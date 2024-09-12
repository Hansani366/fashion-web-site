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
    $phone_number = $_POST['pno'];
    $password = $_POST['password'];

    
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND phone_number = ?");
    $stmt->bind_param("ss", $username, $phone_number);

    
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        
        $row = $result->fetch_assoc();

        
        if (password_verify($password, $row['password'])) {
            
            $_SESSION['username'] = $username;
            header("Location: index.php"); 
            exit();
        } else {
           
            echo "<script>alert('Invalid credentials!');</script>";
        }
    } else {
        
        echo "<script>alert('No account found with that username or phone number.');</script>";
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
    <title>Login Form with JavaScript and PHP</title>
    <style>


       body {
    font-family: Arial, sans-serif;
    background-image: url('https://th.bing.com/th/id/R.73993fb27335c03577c0ff143609366c?rik=DzhsstxxJEkWow&pid=ImgRaw&r=0');
    background-size: cover; 
    background-position: center; 
    background-repeat: no-repeat; 
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}


        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        .login-container h2 {
            margin-bottom: 20px;
            text-align: center;
        }

        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .login-container button {
            width: 100%;
            padding: 10px;
            background-color:red;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .login-container button:hover {
            background-color: #0056b3;
        }

        .login-container .signup-link {
            text-align: center;
            margin-top: 20px;
        }

        .login-container .show-password {
            display: flex;
            align-items: center;
            margin-top: 5px;
        }

        .login-container .show-password input {
            margin-right: 5px;
        }

        #msg {
            margin-bottom: 10px;
            font-weight: bold;
        }
    </style>
    <script type="text/javascript">
        function check() {
            const pat = /^\+94[0-9]{9}$/; 
            if (!document.getElementById('pno').value.match(pat)) {
                document.getElementById('msg').innerHTML = "Invalid Phone Number";
                document.getElementById('pno').focus();
                document.getElementById('pno').select();
                document.getElementById('msg').style.color = 'red';
                return false;
            } else {
                document.getElementById('msg').innerHTML = "Valid Phone Number";
                document.getElementById('msg').style.color = 'green';
                return true; 
            }
        }

      
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('showPassword').addEventListener('change', function() {
                const passwordField = document.getElementById('password');
                passwordField.type = this.checked ? 'text' : 'password';
            });

           
            document.getElementById('loginForm').addEventListener('submit', function(event) {
                const username = document.getElementById('username').value;
                const password = document.getElementById('password').value;
                const phoneNumberValid = check(); 

                if (username === '' || password === '') {
                    alert('Please fill in both fields.');
                    event.preventDefault(); 
                } else if (phoneNumberValid) {
                    this.submit(); 
                } else {
                    event.preventDefault(); 
                }
            });
        });
    </script>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <div id="msg"></div>
        <form id="loginForm" action="login.php" method="post">
            <input type="text" id="username" name="username" placeholder="Username" required>
            <input type="text" id="pno" name="pno" size="30" placeholder="+94777220225" required onblur="check()"/>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <div class="show-password">
                <input type="checkbox" id="showPassword"> Show Password
            </div>
            <button type="submit">Login</button>
            <div class="signup-link">
                <a href="signup.php">Don't have an account? Sign up</a>
            </div>
        </form>
    </div>
</body>
</html>
