<!DOCTYPE html>

<?php
// echo phpinfo();
include 'db_connection.php';
include 'phpfunctions.php';

$conn = OpenCon();

?>

<html>

<head>
    <title> Clicker Game </title>
    <link rel="stylesheet" href="css\styles.css">
    <script type="text/javascript" src="js\main.js"></script>
</head>
<body>
    <p class="centeredText"> Email: kyle@untethered.biz&emsp;<a href="https://untethered.biz/">https://untethered.biz/</a></p>
    <p class="content">MySQL Table:</p>
    <?php
    echo '<div class="content">';
        displayTable($conn, 'clickerdata');
    echo '</div>';
    CloseCon($conn);
    ?>
    <div class="content centeredText">
        <h1>Clicker Game</h1>
        <button id="mainbutton">Click Me</button>
        <script>mainbutton.addEventListener("click", addone, false);</script>
    </div>
</body>
</html>