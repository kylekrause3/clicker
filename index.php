<!DOCTYPE html>

<?php
// echo phpinfo();
include 'db_connection.php';

$conn = OpenCon();

echo "Connected Successfully";

CloseCon($conn);
?>

<html>

<head>
    <link rel="stylesheet" href="css\styles.css">
    <script type="text/javascript" src="js\main.js"></script>
</head>
<body>
    <div class="content centeredText">
        <h1>Clicker Game</h1>
        <button onclick="addone()">Click Me</button>
    </div>
</body>
</html>