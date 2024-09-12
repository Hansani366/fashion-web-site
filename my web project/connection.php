<?php
$con = mysqli_connect("localhost", "root", "", "ecommerce");

if (!$con) {
    echo "Failed to connect";
} else {
    echo "You have successfully connected to your database";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Connect your database</title>
</head>
<body>

</body>
</html>
